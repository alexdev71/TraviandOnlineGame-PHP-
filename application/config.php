<?php
header('Content-Type: text/html; charset=UTF-8');

set_time_limit(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

//////////////////////////////////
//   ****  SQL SETTINGS  ****   //
//////////////////////////////////
define("SQL_SERVER", "localhost");
define("SQL_USER", "traviand_ssss");
define("SQL_PASS", "PwVN&94g(lZe");
define("SQL_DB", "traviand_ssss");


define('APP_MAIN_PATH', dirname(realpath(__DIR__)));
define('APP_BASE_PATH', realpath(__DIR__));
include_once(realpath(__DIR__)."/DB.php");
$sData = $db->queryFetch("SELECT * FROM config");

define("SERVER_NAME",$sData['SERVER_NAME']); // titre server
define("DEFAULT_GOLD",$sData['DEFAULT_GOLD']);  // gold 
define("AUCTIONTIME",$sData['AUCTIONTIME']); //  auction seconds
define("GP_LOCATE", $sData['GP_LOCATE']);
define("OPENING", $sData['OPENING']); 
define("REF_POP",500); 
define("REF_GOLD",50);
define("OASISX",$sData['OASISX']); 
define("SPEED", $sData['SPEED']); // speed server
define("MAX_FILES",1000);
define("MAX_FILESH",3000);
define("IMGQUALITY",50);
define("MOMENT_TRAIN",$sData['MOMENT_TRAIN']); 
define("QUEST",True);
define("ARTEFACTS",$sData['ARTEFACTS']); // date artefacts
define("WW_PLAN",$sData['WW_PLAN']); // date plan Building
define("CRANNY_CAP",$sData['CRANNY_CAP']); // cranny
define("ADV_TIME",86400/$sData['ADV_TIME']); // adventure
define("TRAPPER_CAPACITY",$sData['TRAPPER_CAPACITY']); 
define("LANG", $sData['Lang']); // speed server

define("TRI5BES", TRUE); // TRUE OR FALSE

define("MAX_UNIT",60); // 
define("MAX_TRIBE",6);
// ***** Change storage capacity
define("STORAGE_MULTIPLIER",$sData['STORAGE_MULTIPLIER']); // storage
define("STORAGE_BASE",800*STORAGE_MULTIPLIER);

// ***** World size
// Defines world size. NOTICE: DO NOT EDIT!!
define("WORLD_MAX", "100");

define("INCREASE_SPEED",$sData['INCREASE_SPEED']); // speed Forces

// ***** Beginners Protection
define("PHOUR", "3600");
define("PROTECTIOND",$sData['PROTECTIOND']);
$timestoup = 0;
$fromstart=time()-OPENING;
if($fromstart>=42300){
$timestoup=floor($fromstart/42300);
}

define("PROTECTION",PROTECTIOND);
// ***** Trader capacity
// Values: 1 (normal), 3 (3x speed) etc...
define("TRADER_CAPACITY",$sData['TRADER_CAPACITY']); // 

define("INCLUDE_ADMIN",True);

define("CP", "1");

// ***** PLUS
//Plus account lenght
define("PLUS_TIME",$sData['PLUS_TIME']);
//+25% production lenght
define("PLUS_PRODUCTION",$sData['PLUS_PRODUCTION']);
// ***** through сколько клеток начинается дейстinие арены
define("TS_THRESHOLD",20);


//////////////////////////////////////////
//   ****  DO NOT EDIT SETTINGS  ****   //
//////////////////////////////////////////
define("ALLOW_ALL_TRIBE",false);
define("USRNM_MIN_LENGTH",3);
define("PW_MIN_LENGTH",4);
define("BANNED",0);
define("MULTIHUNTER",8);
define("ADMIN",9);
define("COOKIE_EXPIRE", 60*60*24*7);
define("COOKIE_PATH", "/");
define("HOMEPAGE", $sData['HOMEPAGE']);
define("MAXLENGHT","15");
define("RADIUS",2); //делитель для максимального радиуса inыпадения артоin,например если карта 400 а делитель 2 то дальше 200х200 арт НЕ улетит


// New setting

define("MAX_LEVEL", TRUE); //  With gold
define("MAX_LEVEL_COST", 15); // With gold

define("FINISH_ALL",TRUE); // Training With gold 
define("FINISH_ALL_COST",30);
define("MEDALS", 259200); // distribution seconds

define("farmList", 20); 
define("maxOasisRes", 10000); 

define("DEMOLISH_FULL",5); // Completely demolished


define("adminMail", $sData['adminMail']);

$config = array(
    // Paypal
    'paypalStatus' => 'sandbox', // live - sandbox 
    'paypalAPIUser' => 'sb-abqed448537_api1.business.example.com',
    'paypalAPIPwd' => '2YZYPGK8LLFB7FHC',
    'paypalAPISign' => 'AvcFUUGNcvmpnPV-Gc1Mb8NnZNZ5AGN20dc.zQcX0UVGPqZXAFwKsckp',

    // SMTP Setting
    'SMTPHost' => 'smtp.gmail.com',
    'SMTPUser' => '', // mail
    'SMTPPass' => '', // password

 
    'goldClub' => $sData['goldClub'],
    'Plus' => $sData['Plus'],
    'addonProduction' => $sData['addonProduction'],

    'needActivate' => 0,
    'plusFeatures' => $sData['plusFeatures'], 
    'storageUpgrade' => $sData['storageUpgrade'], 
    '25pFaster' => $sData['25pFaster'], 
    'allSmithy' => $sData['allSmithy'], 
    'searchAll' => $sData['searchAll'], 
    'resources01' => $sData['resources01'], 
    'resources02' => $sData['resources02'], 
    'resources03' => $sData['resources03'], 
    'protect01' => $sData['protect01'], 
    'protect02' => $sData['protect02'], 
    'protect03' => $sData['protect03'], 

    'resources01A' => $sData['resources01A'], // quantity Resources 
    'resources02A' => $sData['resources02A'], // quantity Resources second
    'resources03A' => $sData['resources03A'], // quantity Resources 
);

$packages	= array (
    array ( 
        'id' 		  => 1,
        'gold'		=> '180',
        'cost'		=> '2.49',
        'currency'	=> 'USD',
        'img'       => 'Travian_Facelift_1.png'
    ),
    array ( 
        'id' 		  => 2,
        'gold'		=> '600',
        'cost'		=> '5.99',
        'currency'	=> 'USD',
        'img'       => 'Travian_Facelift_2.png'
    ),
    array ( 
        'id' 		  => 3,
        'gold'		=> '1500',
        'cost'		=> '11.99',
        'currency'	=> 'USD',
        'img'       => 'Travian_Facelift_3.png'
    ),
        array ( 
        'id' 		  => 4,
        'gold'		=> '3600',
        'cost'		=> '24.99',
        'currency'	=> 'USD',
        'img'       => 'Travian_Facelift_4.png'
    ),	
    array ( 
        'id' 		  => 5,
        'gold'		=> '9600',
        'cost'		=> '49.99',
        'currency'	=> 'USD',
        'img'       => 'Travian_Facelift_5.png'
    ),
    array ( 
        'id' 		  => 6,
        'gold'		=> '22000',
        'cost'		=> '99.99',
        'currency'	=> 'USD',
        'img'       => 'Travian_Facelift_6.png'
    )
);
