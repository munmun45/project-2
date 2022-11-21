<?php

//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);



    if (isset($_POST['submit'])){

        $l_name = $_POST['l_name'];
        $f_name = $_POST['f_name'];
        $m_name = $_POST['m_name'];

        $date = $_POST['date'];

        $address_1 = $_POST['address_1'];
        $address_1 = $_POST['unit_1'];
        $address_1 = $_POST['unit_1'];

        
    }
    
    
    
    
   
    

    


?>