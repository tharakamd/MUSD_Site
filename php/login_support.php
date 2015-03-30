<?php 
    session_start();
    if(isset($_POST['pw'])){
        $pw = $_POST['pw'];
        $pass_word = '123';
        if(strcmp($pw,$pass_word )==0){
            $_SESSION['log'] = true;
            header('location: ../home.php');
        }else{
            header('location: ../login.php');
        }
    }else{
        die('Dev error #$post');
    }
?>