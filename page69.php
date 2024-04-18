<?php
    if(!empty($_POST)) {
    foreach($_POST as $key => $value) {
        echo "<b>$key</b>" ." = ". $value ."<br>";

    }
    }
    $conn = mysqli_connect("","","");





?>