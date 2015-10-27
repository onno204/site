<?php
$dbn = "sitedatabase";
$dbc = mysqli_connect('localhost', 'sitemanager', 'sitemanager', $dbn);
if (!$dbc){die('not connected : ' . mysql_error());}
$db_selected = mysqli_select_db($dbc, $dbn);
if (!$db_selected){die('error by selecting : ' . mysqli_error());}

function getUserIP(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP)){$ip = $client;}
    elseif(filter_var($forward, FILTER_VALIDATE_IP)){$ip = $forward;}
    else{$ip = $remote;}
    return $ip;
}
$user_ip = getUserIP();
//START FUNCTION
function quary($quary){
    global $dbc;
    $result = $dbc->query($quary);
    foreach ($result as $row) {
        //OUTPUT INDEX
        $timess = (int)$row['Times'] + 1;
        echo 'TimesLoaded: ' . $timess;
        echo InputTime();
        
        
        if ($row['IP'] == getUserIP()){static $test = "abc";
            DBcheckI($test, "yes");
        }for ($i =0; $i <= (int)$row["Times"]; 1){
            if ((int)$row['Times'] == $i){
                $i = $i+1;
                $query = "UPDATE `sitedatabase` SET `Times`=". $i ." WHERE ID =" . $row['ID'];
                $result = $dbc->query($query); }else{$i = $i +1;}}
                
    }
}
//END FUNCTION

//START FUNCTION
function DBcheckI($test, $yesorno){
    global $testing, $dbc;
    if ($yesorno == "yes" || $testing == "abd"){
        $testing = 'abd';
        if ($test == "abc" || $testing == "abd"){return true;}
        }else {
            echo "</br> WE DIDN'T FIND YOUR IP!, added to the database!";
            echo "</br> pleas reload the page if it doesn't do it for u";
            $quary = "INSERT INTO `sitedatabase`(`IP`, `Times`) VALUES ('". getUserIP() ."',1)";
            InputTime();
            $dbc->query($quary); 
            header('Location: '. '/use'); return false; }
}
//END FUNCTION

//START FUNCTION
function InputTime(){
    global $dbc;
    $date = date("Y/m/d"); 
    $time = date("h:i:sa");
    $fancy = $date . "---" . $time;
    $query = "UPDATE `sitedatabase` SET `time`='" . $fancy . "' WHERE IP ='" . getUserIP() . "'";
    $dbc->query($query);
}
    
//END FUNCTION



quary("SELECT * FROM `sitedatabase` WHERE ip = '" . getUserIP() . "'");
global $testing;
if ($testing != "abd"){DBcheckI ('nothing', 'nothing');}
global $row;
?>