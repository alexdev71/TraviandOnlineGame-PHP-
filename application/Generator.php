<?php
class Generator0 {

	public function generateRandID(){
		return md5($this->generateRandStr(16));
		}

   public function generateRandStr($length){
	  $randstr = "";
	  for($i=0; $i<$length; $i++){
		 $randnum = mt_rand(0,61);
		 if($randnum < 10){
			$randstr .= chr($randnum+48);
		 }else if($randnum < 36){
			$randstr .= chr($randnum+55);
		 }else{
			$randstr .= chr($randnum+61);
		 }
	  }
	  return $randstr;
   }

   public function encodeStr($str,$length) {
	   $encode = md5($str);
	   return substr($encode,0,$length);
   }



	public function getTimeFormat($t) {
		return sprintf('%02d:%02d:%02d', ($t/3600),($t/60%60), $t%60);
	}


	public function procMtime($time, $pref = 3) {
		global $session;

		// iRedux - Edited
		$today = date('d',time())-1;
		if (date('Ymd',time()) == date('Ymd',$time)) {
			$day = REPORT_TODAY;
		}elseif($today == date('d',$time)){
			$day = REPROT_YESTERDAY;
		}
		else {
			if(!$session->tformat){ 
				$day = date("j/m/y",$time);
			}else{
				switch($session->tformat){
					case 1: $day = date("m/j/y",$time); break;
					case 2: $day = date("j/m/y",$time); break;
					case 3: $day = date("y/m/j",$time); break;
				}
			}

		}
		if(!$session->tformat){ 
			$new = date("H:i:s",$time);
		}else{
			switch($session->tformat){
				case 1: $new = date("h:i:s",$time); break;
				case 2: $new = date("h:i:s",$time); break;
				case 3: $new = date("H:i:s",$time); break;
			}
		}
		if ($pref=="9"||$pref==9)
			return $new;
		else
			return array($day,$new);
	}



	public function getMapCheck($wref) {
		return substr(md5($wref),5,2);
	}

    public function generateCountryName($name) {
        switch ($name) {
            case "ad":
                echo "Andorra";
                break;
            case "ae":
                return "Arab Emirates";
                break;
            case "af":
                return "Afghanistan";
                break;
            case "ag":
                return "Antigua";
                break;
			case "ai":
                return "Anguilla";
                break;	
            case "al":
                return "Albania";
                break;
			case "am":
                return "Armenia";
                break;
			case "an":
                return "Netherlands";
                break;
			case "ao":
                return "Angola";
                break;
			case "ar":
                return "Argentina";
                break;
			case "as":
                return "American Samoa";
                break;
			case "au":
                return "Australia";
                break;
			case "aw":
                return "Aruba";
                break;
			case "ax":
                return "Åland";
                break;
			case "az":
                return "Azerbaijan";
                break;
			case "ba":
                return "Bosnia";
                break;
			case "bb":
                return "Barbados";
                break;
			case "bd":
                return "Bangladesh";
                break;
			case "be":
                return "Belgium";
                break;
			case "bf":
                return "Burkina Faso";
                break;
			case "bg":
                return "Bulgaria";
                break;
			case "bh":
                return "Bahrain";
                break;
			case "bi":
                return "Burundi";
                break;
			case "bj":
                return "Benin";
                break;
			case "bl":
                return "Barthélemy";
                break;
			case "bm":
                return "Bermuda";
                break;
			case "bn":
                return "Brunei";
                break;
			case "bo":
                return "Bolivia";
                break;
			case "br":
                return "Brazil";
                break;
			case "bs":
                return "Bahamas";
                break;
			case "bt":
                return "Bhutan";
                break;
			case "bv":
                return "Bouvet";
                break;
			case "bw":
                return "Botswana";
                break;
			case "by":
                return "Belarus";
                break;
			case "bz":
                return "Belize";
                break;
			case "ca":
                return "Canada";
                break;
			case "cc":
                return "Cocos Islands";
                break;
			case "cd":
                return "Congo";
                break;
			case "cf":
                return "African";
                break;
			case "cg":
                return "Congo African";
                break;
			case "ch":
                return "Switzerland";
                break;
			case "ci":
                return "Côte d'Ivoire";
                break;
			case "ck":
                return "Cook Islands";
                break;
			case "cl":
                return "Chile";
                break;
			case "cm":
                return "Cameroon";
                break;
			case "cn":
                return "China";
                break;
			case "co":
                return "Colombia";
                break;
			case "cr":
                return "Costa Rica";
                break;
			case "cs":
                return "Serbia";
                break;
			case "cu":
                return "Cuba";
                break;
			case "cv":
                return "Cabo Verde";
                break;
			case "cx":
                return "Christmas";
                break;
			case "cy":
                return "Cyprus";
                break;
			case "cz":
                return "Czechia";
                break;
			case "de":
                return "Germany";
                break;
			case "dj":
                return "Djibouti";
                break;
			case "dk":
                return "Denmark";
                break;
			case "dm":
                return "Dominica";
                break;
			case "do":
                return "Dominican";
                break;
			case "dz":
                return "Algeria";
                break;
			case "ec":
                return "Ecuador";
                break;
			case "ee":
                return "Estonia";
                break;
			case "eg":
                return "Egypt";
                break;
			case "eh":
                return "Western Sahara";
                break;
			case "er":
                return "Eritrea";
                break;
			case "es":
                return "Spain";
                break;
			case "et":
                return "Ethiopia";
                break;
			case "fi":
                return "Finland";
                break;
			case "fj":
                return "Fiji";
                break;
			case "fk":
                return "Falkland";
                break;
			case "fm":
                return "Micronesia";
                break;
			case "fo":
                return "Faroe";
                break;
			case "fr":
                return "France";
                break;
			case "ga":
                return "Gabon";
                break;
			case "gb":
                return "United Kingdom";
                break;
			case "gd":
                return "Grenada";
                break;
			case "ge":
                return "Georgia";
                break;
			case "gf":
                return "French Guiana";
                break;
			case "gg":
                return "Guernsey";
                break;
			case "gh":
                return "Ghana";
                break;
			case "gi":
                return "Gibraltar";
                break;
			case "gl":
                return "Greenland";
                break;
			case "gm":
                return "Gambia";
                break;
			case "gn":
                return "Guinea";
                break;
			case "gp":
                return "Guadeloupe";
                break;	
			case "gq":
                return "Equatorial Guinea";
                break;	
			case "gr":
                return "Greece";
                break;	
			case "gs":
                return "Georgia";
                break;	
			case "gt":
                return "Guatemala";
                break;
			case "gu":
                return "Guam";
                break;
			case "gw":
                return "Guinea-Bissau";
                break;
			case "gy":
                return "Guyana";
                break;
			case "hk":
                return "Hong Kong";
                break;
			case "hm":
                return "McDonald Islands";
                break;
			case "hn":
                return "Honduras";
                break;
			case "hr":
                return "Croatia";
                break;
			case "ht":
                return "Haiti";
                break;
			case "hu":
                return "Hungary";
                break;
			case "id":
                return "Indonesia";
                break;
			case "ie":
                return "Ireland";
                break;
			case "il":
                return "Israel";
                break;
			case "im":
                return "Isle of Man";
                break;
			case "in":
                return "India";
                break;
			case "io":
                return "British Indian";
                break;
			case "iq":
                return "Iraq";
                break;
			case "ir":
                return "Iran";
                break;
			case "is":
                return "Iceland";
                break;
			case "it":
                return "Italy";
                break;
			case "je":
                return "Jersey";
                break;
			case "jm":
                return "Jamaica";
                break;
			case "jo":
                return "Jordan";
                break;
			case "jp":
                return "Japan";
                break;
			case "ke":
                return "Kenya";
                break;
			case "kg":
                return "Kyrgyzstan";
                break;
			case "kh":
                return "Cambodia";
                break;
			case "ki":
                return "Kiribati";
                break;
			case "km":
                return "Comoros";
                break;
			case "kn":
                return "Kitts and Nevis";
                break;
			case "kp":
                return "North Korea";
                break;
			case "kr":
                return "South Korea";
                break;
			case "kw":
                return "Kuwait";
                break;
			case "ky":
                return "Cayman";
                break;
			case "kz":
                return "Kazakhstan";
                break;
			case "la":
                return "Lao";
                break;
			case "lb":
                return "Lebanon";
                break;
			case "lc":
                return "Saint Lucia";
                break;
			case "li":
                return "Liechtenstein";
                break;
			case "lk":
                return "Sri Lanka";
                break;
			case "lr":
                return "Liberia";
                break;
			case "ls":
                return "Lesotho";
                break;
			case "lt":
                return "Lithuania";
                break;
			case "lu":
                return "Luxembourg";
                break;	
			case "lv":
                return "Latvia";
                break;
			case "ly":
                return "Libya";
                break;
			case "ma":
                return "Morocco";
                break;
			case "mc":
                return "Monaco";
                break;
			case "md":
                return "Moldova";
                break;
			case "me":
                return "Montenegro";
                break;
			case "mg":
                return "Madagascar";
                break;
			case "mh":
                return "Marshall";
                break;
			case "mk":
                return "North Macedonia";
                break;
			case "ml":
                return "Mali";
                break;
			case "mm":
                return "Myanmar";
                break;
			case "mn":
                return "Mongolia";
                break;
			case "mo":
                return "Macao";
                break;
			case "mp":
                return "Mariana Islands";
                break;
			case "mq":
                return "Martinique";
                break;
			case "mr":
                return "Mauritania";
                break;
			case "ms":
                return "Montserrat";
                break;
			case "mt":
                return "Malta";
                break;
			case "mu":
                return "Mauritius";
                break;
			case "mv":
                return "Maldives";
                break;
			case "mw":
                return "Malawi";
                break;
			case "mx":
                return "Mexico";
                break;
			case "my":
                return "Malaysia";
                break;
			case "mz":
                return "Mozambique";
                break;
			case "na":
                return "Namibia";
                break;
			case "nc":
                return "New Caledonia";
                break;
			case "ne":
                return "Niger";
                break;
			case "nf":
                return "Norfolk Island";
                break;
			case "ng":
                return "Nigeria";
                break;
			case "ni":
                return "Nicaragua";
                break;
			case "nl":
                return "Netherlands";
                break;	
			case "no":
                return "Norway";
                break;	
			case "np":
                return "Nepal";
                break;
			case "nr":
                return "Nauru";
                break;
			case "nu":
                return "Niue";
                break;
			case "nz":
                return "New Zealand";
                break;
			case "om":
                return "Oman";
                break;
			case "pa":
                return "Panama";
                break;
			case "pe":
                return "Peru";
                break;
			case "pf":
                return "Polynesia";
                break;
			case "pg":
                return "Guinea";
                break;
			case "ph":
                return "Philippines";
                break;
			case "pk":
                return "Pakistan";
                break;
			case "pl":
                return "Poland";
                break;
			case "pm":
                return "Saint Pierre";
                break;
			case "pn":
                return "Pitcairn";
                break;
			case "pr":
                return "Puerto Rico";
                break;
			case "ps":
                return "Palestine";
                break;
			case "pt":
                return "Portugal";
                break;
			case "pw":
                return "Palau";
                break;
			case "py":
                return "Paraguay";
                break;
			case "qa":
                return "Qatar";
                break;
			case "re":
                return "Réunion";
                break;
			case "ro":
                return "Romania";
                break;
			case "rs":
                return "Serbia";
                break;
			case "ru":
                return "Russia";
                break;
			case "rw":
                return "Rwanda";
                break;
			case "sa":
                return "Saudi Arabia";
                break;
			case "sb":
                return "Solomon Islands";
                break;
			case "sc":
                return "Seychelles";
                break;
			case "sd":
                return "Sudan";
                break;
			case "se":
                return "Sweden";
                break;
			case "sg":
                return "Singapore";
                break;
			case "sh":
                return "Saint Helena";
                break;
			case "si":
                return "Slovenia";
                break;
			case "sj":
                return "Svalbard";
                break;
			case "sk":
                return "Slovakia";
                break;
			case "sl":
                return "Sierra Leone";
                break;
			case "sm":
                return "San Marino";
                break;
			case "sn":
                return "Senegal";
                break;
			case "so":
                return "Somalia";
                break;
			case "sr":
                return "Suriname";
                break;
			case "st":
                return "Sao Tome";
                break;
			case "sv":
                return "El Salvador";
                break;
			case "sy":
                return "Syria";
                break;
			case "sz":
                return "Eswatini";
                break;
			case "tc":
                return "Turks";
                break;
			case "td":
                return "Chad";
                break;
			case "tf":
                return "French Southern";
                break;
			case "tg":
                return "Togo";
                break;
			case "th":
                return "Thailand";
                break;
			case "tj":
                return "Tajikistan";
                break;
			case "tk":
                return "Tokelau";
                break;
			case "tl":
                return "Timor-Leste";
                break;
			case "tm":
                return "Turkmenistan";
                break;
			case "tn":
                return "Tunisia";
                break;
			case "to":
                return "Tonga";
                break;
			case "tr":
                return "Turkey";
                break;
			case "tt":
                return "Trinidad";
                break;
			case "tv":
                return "Tuvalu";
                break;
			case "tw":
                return "Taiwan";
                break;
			case "tz":
                return "Tanzania";
                break;
			case "ua":
                return "Ukraine";
                break;
			case "ug":
                return "Uganda";
                break;
			case "uk":
                return "United Kingdom";
                break;
			case "um":
                return "USA Islands";
                break;
			case "us":
                return "United States";
                break;
			case "uy":
                return "Uruguay";
                break;
			case "uz":
                return "Uzbekistan";
                break;
			case "va":
                return "Vatican City";
                break;
			case "vc":
                return "Saint Vincent";
                break;
			case "ve":
                return "Venezuela";
                break;
			case "vg":
                return "Virgin Islands";
                break;
			case "vi":
                return "Virgin Islands(U.S.)";
                break;
			case "vn":
                return "Viet Nam";
                break;
			case "vu":
                return "Vanuatu";
                break;
			case "wf":
                return "Wallis";
                break;
			case "ws":
                return "Samoa";
                break;
			case "ye":
                return "Yemen";
                break;
			case "yt":
                return "Mayotte";
                break;
			case "za":
                return "South Africa";
                break;
			case "zm":
                return "Zambia";
                break;
			case "zw":
                return "Zimbabwe";
                break;	
				
                //need add all country
        }
    }


};
$generator = new Generator0;
