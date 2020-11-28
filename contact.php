<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['msg'];

// Check input field

if(empty($name) || empty($email) || empty($msg)){
    echo "Please fill all the fields";
}
else{
    mail("omeruday@gmail.com", "Webtech Message", $msg, "From: $name <$email>");

    echo "<script type='text/javascript'>alert('Your message sent successfully');
    window.history.log(-1);</script>";
}
?>