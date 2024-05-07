<?php
if(isset($_POST['number'])) {
    $number = $_POST['number'];
    if($number % 2 == 0) {
        echo "$number is Even";
    } else {
        echo "$number is Odd";
    }
}
?>
