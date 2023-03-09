<?php

$conn = mysqli_connect('localhost', 'hassan', 'bscs', 'employee_record');
    
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}


?>