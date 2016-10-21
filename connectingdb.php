<?php
$db = new mysqli(
    ''hostname'',
    ''username'',
    ''password'',
    ''db_name''
);
if($db->connect_errno){
    di e('connectfailed['.$db->connect_error.]']');
}