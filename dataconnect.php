<?php
// connect to csdm- webdev server and sel ect database
$db = new mysqli
('eu-cdbr-azure-north-e.cloudapp.net',
    'b6eddf165f7163',
    'b43888f8',
    'ajw1405437');
if($db->connect_errno){
    die('Connectfailed]'.$db->connect_error.']');
}