<?php 
require_once("./db.php");

$students = getData();


if(isset($_POST['id'])){
   $students =  array_filter($students, function ($s) {
        return $s['id'] != $_POST['id'];
    });

    updateData($students);

    header("Location: /students");  
    exit;
}


