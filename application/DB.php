<?php

class DB
{
    # @object, The PDO object
    private $pdo;

    # @object, PDO statement object
    private $sQuery;

    private $succes;

    # @bool ,  Connected to the database
    private $bConnected = false;



    # @array, The parameters of the SQL query
    private $parameters;

       /**
    *   Default Constructor
    *
    *    1. Instantiate Log class.
    *    2. Connect to database.
    *    3. Creates the parameter array.
    */
        public function __construct()
        {
           // $this->Connect();
            $this->parameters = array();
        }

       /**
    *    This method makes connection to the database.
    *
    *    1. Reads the database settings from a ini file.
    *    2. Puts  the ini content into the settings array.
    *    3. Tries to connect to the database.
    *    4. If connection failed, exception is displayed and a log file gets created.
    */
        private function Connect()
        {
           // echo "lol<br/>";
           // $this->settings = parse_ini_file("settings.ini.php");
            //$dsn = 'mysql:dbname='.$this->settings["dbname"].';host='.$this->settings["host"].'';
              $dsn = 'mysql:dbname='.SQL_DB.';host='.SQL_SERVER;

                # Read settings from INI file
               // $this->pdo = new PDO($dsn, $this->settings["user"], $this->settings["password"]);
                $this->pdo = new PDO($dsn, SQL_USER, SQL_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET sql_mode=""'));
                $this->pdo->exec('SET NAMES utf8');

               # iRedux

               # We can now log any exceptions on Fatal error.
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                # Disable emulation of prepared statements, use REAL prepared statements instead.
                $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


                # Connection succeeded, set the boolean to true.
                $this->bConnected = true;

        }
       /**
    *    Every method which needs to execute a SQL query uses this method.
    *
    *    1. If not connected, connect to the database.
    *    2. Prepare Query.
    *    3. Parameterize Query.
    *    4. Execute Query.
    *    5. On exception : Write Exception into the log + SQL query.
    *    6. Reset the Parameters.
    */
        private function Init($query,$parameters = "")
        {
        if(!$this->bConnected) { $this->Connect(); }
        try {

                # Prepare query
                $this->sQuery = $this->pdo->prepare($query);

                # Add parameters to the parameter array
                $this->bindMore($parameters);

                # Bind parameters
                if(!empty($this->parameters)) {
                    foreach($this->parameters as $param)
                    {
                        $parameters = explode("\x7F",$param);
                        $this->sQuery->bindParam($parameters[0],$parameters[1]);
                    }
                }
    # Execute SQL
  
                $this->succes     = $this->sQuery->execute();

            }
            catch(PDOException $e)
            {
                    # Write into log and display Exception
                $data['custom'] = array(
                    'time' => time()
                );
                $data['ses']=$_SESSION;
                $data['post']=$_POST;
                $data['serv']=$_SERVER;
                $data['err']=$this->ExceptionLog($e->getMessage());
                $data['query']=$query;
                $data['params']=$parameters;
                //echo $data['err'];
                // print_r($data);
                echo $data['query']."<br/>".$data['err'];
                echo '<br/>';
                print_r($parameters);
                file_put_contents('application/queue2/error_log.txt', var_export($data, true) . "\r\n\r\n",FILE_APPEND);
//exit;
            }

            # Reset the parameters
            $this->parameters = array();
        }

       /**
    *    @void
    *
    *    Add the parameter to the parameter array
    *    @param string $para
    *    @param string $value
    */
        public function bind($para, $value)
        {
            $this->parameters[sizeof($this->parameters)] = ":" . $para . "\x7F" . $value;

        }
       /**
    *    @void
    *
    *    Add more parameters to the parameter array
    *    @param array $parray
    */
        public function bindMore($parray)
        {

            if(empty($this->parameters) && is_array($parray)) {
                $columns = array_keys($parray);
                foreach($columns as $column)    {
                    $this->bind($column, $parray[$column]);
                }
            }

        }
    /**
    *   If the SQL query  contains a SELECT statement it returns an array containing all of the result set row
    *    If the SQL statement is a DELETE, INSERT, or UPDATE statement it returns the number of affected rows
    *
    *       @param  string $query
    *    @param  array  $params
    *    @param  int    $fetchmode
    *    @return mixed
    */
        public function query($query,$params = null,$fetchmode = PDO::FETCH_ASSOC)
        {
            $query = trim($query);

            $this->Init($query,$params);
                                                                                                                                    //->lastInsertId
            if (stripos($query, 'SELECT') === 0){

                return $this->sQuery->fetchAll($fetchmode);
            }
            else{

                return NULL;
            }
        }

        public function queryFetch($query,$params = null,$fetchmode = PDO::FETCH_ASSOC)
        {
            $query = trim($query);

            $this->Init($query,$params);
                                                                                                                                    //->lastInsertId
            if (stripos($query, 'SELECT') === 0){

                return $this->sQuery->fetch($fetchmode);
            }
            else{

                return NULL;
            }
        }
        public function queryNum($table, $addons='')
        {
            $query = $this->queryFetch("SELECT COUNT(*) as num FROM ".$table." ".$addons."");
            return $query['num'];
        }

        public function queryFetchColumn($query,$params = null){
            $query = trim($query);

            $this->Init($query,$params);
                                                                                                                                    //->lastInsertId
            if (stripos($query, 'SELECT') === 0){

                return $this->sQuery->fetchColumn();
            }
            else{

                return NULL;
            }
        }

    public function starttransaction(){
        $this->pdo->beginTransaction();
    }
    public function commitq(){
        $this->pdo->commit();
    }



         public function queryNumRow($query,$params = null)
        {
            $query = trim($query);

            $this->Init($query,$params);
            return $this->sQuery->rowCount();

        }



       /**
    *    Returns an array which represents a column from the result set
    *
    *    @param  string $query
    *    @param  array  $params
    *    @return array
    */
        public function column($query,$params = null)
        {
            $this->Init($query,$params);
            $Columns = $this->sQuery->fetchAll(PDO::FETCH_NUM);

            $column = null;

            foreach($Columns as $cells) {
                $column[] = $cells[0];
            }

            return $column;

        }
       /**
    *    Returns an array which represents a row from the result set
    *
    *    @param  string $query
    *    @param  array  $params
    *       @param  int    $fetchmode
    *    @return array
    */
        public function row($query,$params = null,$fetchmode = PDO::FETCH_ASSOC)
        {
            $this->Init($query,$params);
            return $this->sQuery->fetch($fetchmode);
        }
       /**
    *    Returns the value of one single field/column
    *
    *    @param  string $query
    *    @param  array  $params
    *    @return string
    */
        public function single($query,$params = null)
        {
            $this->Init($query,$params);
            return $this->sQuery->fetchColumn();
        }
        /**
        * grab the last insterted query id
        *
        */
        public function get_last_id(){
         return $this->pdo->lastInsertId();
        }
       /**
    * Writes the log and returns the exception
    *
    * @param  string $message
    * @param  string $sql
    * @return string
    */
    private function ExceptionLog($message , $sql = "")
    {
        $exception  = 'Unhandled Exception. <br />';
        $exception .= $message;
        $exception .= "<br /> DEATH FOR YOU.";

        if(!empty($sql)) {
            # Add the Raw SQL to the Log
            $exception .= "\r\nRaw SQL : "  . $sql;
        }

        return $exception;
    }
}
$db = new Db;