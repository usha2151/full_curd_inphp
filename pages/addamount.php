<?php
   
  
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
        $userName = $_POST['name'];
        $email = $_POST['payment'];
        $pass = $_POST['bill'];
        $Name = $_POST['amount'];
        $emails = $_POST['balance'];
        $DateOfAdmission = $_POST['date'];

        $requete = $con->prepare("INSERT INTO `payments_list`(`Name`, `PaymentSchedule`, `BillNumber`, `AmountPaid`, `BalanceAmount`, `Date`) VALUES('$userName','$email','$pass','$Name','$emails','$DateOfAdmission')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:payment_details.php');
    ?>
