<?php
$std_id = $_GET['std_id'];
$std_name = $_GET['std_name'];
$std_sname = $_GET['std_sname'];

require "condb.php";

try {
    $sqp = "INSERT INTO td_student
            VALUES('$std_id','std_name','std_sname')";
    mysqli_query($link,$sql);
    echo "Affected : " . mysqli_affected_rows($link);
} catch (Exception $e) {
    echo $e . "Error no : " . mysqli_error($link);
}