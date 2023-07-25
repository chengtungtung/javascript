<?php
$uid = $_REQUEST['uid'];
header('Access-Control-Allow-Origin: *')

sleep(5);

if(($uid == 'a01') || ($uid == 'a02')){
    echo '0';
}else{
    echo '1';
}

?>