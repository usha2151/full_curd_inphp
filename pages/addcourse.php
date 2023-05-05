<?php
    if(isset($_POST['submit'])){
        include 'conixion.php';
        $userName = $_POST['uname'];
        $email = $_POST['des'];
        $pass = $_POST['prix'];
        var_dump($userName);
            $requete = $con->prepare("INSERT INTO `courses`(`Name`, `Description`, `Prix`)
             VALUES('$userName','$email','$pass')");
            $requete->execute();
        if($requete){
            header('location:course.php');
        }
        else{
            header("location:index.php?error=password not found");
        }
    }
?>