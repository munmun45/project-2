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



    if (isset($_POST['submit_1'])){

        $l_name = $_POST['l_name'];
        $f_name = $_POST['f_name'];
        $m_name = $_POST['m_name'];

        $date = $_POST['date'];

        $address_1 = $_POST['address_1'];
        $address_1 = $_POST['unit_1'];
        $address_1 = $_POST['unit_1'];

        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];

        $number_1 = $_POST['number_1'];
        $email_1 = $_POST['email_1'];

        $email_1 = $_POST['email_1'];

        $date_available = $_POST['date_available'];

        $Security_1 = $_POST['Security_1'];
        $Desired_Salary = $_POST['Desired_Salary'];

        $Position_Applying_for = $_POST['Position_Applying_for'];


        $y1 = $_POST['y1'];
        $y2 = $_POST['y2'];
        $y3 = $_POST['y3'];
        
        $If_yes_When = $_POST['If_yes_When'];
        
        $y4 = $_POST['y4'];
        
        $If_yes_explain = $_POST['If_yes_explain'];

        $High_School = $_POST['High_School'];

        $Address_2 = $_POST['Address_2'];

        $From_1 = $_POST['From_1'];
        $To = $_POST['To'];

        $y5 = $_POST['y5'];

        $Diploma_1 = $_POST['Diploma_1'];

        $College_1 = $_POST['College_1'];

        $Address_3 = $_POST['Address_3'];

        $From_2 = $_POST['From_2'];
        $To_1  = $_POST['To_1'];
        $y6  = $_POST['y6'];

        $Degree_2  = $_POST['Degree_2'];
        $Other_1  = $_POST['Other_1'];
        $Address_4  = $_POST['Address_4'];

        $From_3  = $_POST['From_3'];
        $To_3  = $_POST['To_3'];

        $y7  = $_POST['y7'];

        $Degree_3  = $_POST['Degree_3'];

        $Full_Name  = $_POST['Full_Name'];

        $Relationship  = $_POST['Relationship'];

        $Company_2  = $_POST['Company_2'];

        $Phone_2  = $_POST['Phone_2'];

        $Address_5  = $_POST['Address_5'];

        $Full_Name_2  = $_POST['Full_Name_2'];
        $Relationship_2  = $_POST['Relationship_2'];

        $Company_3  = $_POST['Company_3'];
        $Phone_3  = $_POST['Phone_3'];

        $Address_6  = $_POST['Address_6'];

        $Full_Name_3  = $_POST['Full_Name_3'];
        $Relationship_3  = $_POST['Relationship_3'];

        $Company_4  = $_POST['Company_4'];
        $Phone_4  = $_POST['Phone_4'];

        $Address_7  = $_POST['Address_7'];

        $Company_5  = $_POST['Company_5'];
        $Phone_5  = $_POST['Phone_5'];

        $Address_8  = $_POST['Address_8'];
        $Supervisor_1  = $_POST['Supervisor_1'];

        $Job_Title_1  = $_POST['Job_Title_1'];
        $Starting_Salary  = $_POST['Starting_Salary'];

        $Ending_Salary  = $_POST['Ending_Salary'];

        $Responsibilities_2  = $_POST['Responsibilities_2'];

        $From_4  = $_POST['From_4'];
        $TO_4  = $_POST['TO_4'];

        $Reason_for_leaving  = $_POST['Reason_for_leaving'];
        $reference_2  = $_POST['reference_2'];

        $Company_6  = $_POST['Company_6'];
        $Phone_6  = $_POST['Phone_6'];

        $Address_9  = $_POST['Address_9'];
        $Supervisor_9  = $_POST['Supervisor_9'];

        $Job_Title_2  = $_POST['Job_Title_2'];
        $Starting_Salary_5  = $_POST['Starting_Salary_5'];
        $Ending_Salary_5  = $_POST['Ending_Salary_5'];

        $Responsibilities_3  = $_POST['Responsibilities_3'];

        $From_5  = $_POST['From_5'];
        $TO_5  = $_POST['TO_5'];

        $Reason_for_leaving_5  = $_POST['Reason_for_leaving_5'];
        $reference_3  = $_POST['reference_3'];

        $Company_7  = $_POST['Company_7'];
        $Phone_7  = $_POST['Phone_7'];

        $Address_10  = $_POST['Address_10'];
        $Supervisor_10  = $_POST['Supervisor_10'];
        
        $Job_Title_11  = $_POST['Job_Title_11'];
        $Starting_Salary_11  = $_POST['Starting_Salary_11'];

        $Ending_Salary_11  = $_POST['Ending_Salary_11'];

        $Responsibilities_11  = $_POST['Responsibilities_11'];

        $From_12  = $_POST['From_12'];
        $TO_12  = $_POST['TO_12'];

        $Reason_for_leaving_12  = $_POST['Reason_for_leaving_12'];
        $reference_12  = $_POST['reference_12'];


        $Branch_13  = $_POST['Branch_13'];
        $From_13  = $_POST['From_13'];
        $TO_13  = $_POST['TO_13'];
        $Rank_at_Discharge_13  = $_POST['Rank_at_Discharge_13'];
        $Rank_at_Discharge_14  = $_POST['Rank_at_Discharge_14'];

        $Signature_14  = $_POST['Signature_14'];
        $Date_14  = $_POST['Date_14'];




        $message = " " ;




        try {

            $mail->isSMTP();                                            
            $mail->Host       = 'mail.demo.com';        
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'demo@demo.com';                 
            $mail->Password   = 'pass';                         
            $mail->SMTPSecure = 'tls';                                  
            $mail->Port       = 587;                                    
            
            $mail->setFrom( "Noreplay@demo.com", $name); 
            $mail->addAddress("demo@gmail.com", "demo name");     
           
            $mail->isHTML(true);
            $mail->Subject = "title demo";
            $mail->Body    = $message;
    
            $mail->send();
            
            
            
            
            echo "
                <script>

                    localStorage.setItem('alert_Email', '1');
                    window.location.href='../index.php';
                
                </script>
            ";
            exit;

        } catch (Exception $e) {

            echo "
                <script>

                    localStorage.setItem('alert_Email', '2');
                    window.location.href='../index.php';
                
                </script>
            ";
            exit;

        }



        





        
    }








    if (isset($_POST['submit_2'])){


        $Comments_1 = $_POST['Comments_1'];
        $Comments_2 = $_POST['Comments_2'];


        $t_1 = $_POST['t_1'];
        $t_2 = $_POST['t_2'];
        $t_3 = $_POST['t_3'];


        $SIGNED_this_1 = $_POST['SIGNED_this_1'];
        $day_of_1 = $_POST['day_of_1'];

        $By_1 = $_POST['By_1'];
        $Employee_1 = $_POST['Employee_1'];

        $Employee_2 = $_POST['Employee_2'];
        $Printed_Name = $_POST['Printed_Name'];

        $Employee_Signature = $_POST['Employee_Signature'];

        $Date_2 = $_POST['Date_2'];

        $Employee_Signature_D_1 = $_POST['Employee_Signature_D_1'];
        $Employee_Signature_D_2 = $_POST['Employee_Signature_D_2'];

        $Employee_Signature_D_2 = $_POST['Employee_Signature_D_2'];


        $t_4 = $_POST['t_4'];
        $t_5 = $_POST['t_5'];
        $t_6 = $_POST['t_6'];
        $t_7 = $_POST['t_7'];
        $t_8 = $_POST['t_8'];
        $t_9 = $_POST['t_9'];
        $t_10 = $_POST['t_10'];
        $t_11 = $_POST['t_11'];
        $t_12 = $_POST['t_12'];
        $t_13 = $_POST['t_13'];
        $t_14 = $_POST['t_14'];
        $t_15 = $_POST['t_15'];
        $t_16 = $_POST['t_16'];
        $t_17 = $_POST['t_17'];
        $t_18 = $_POST['t_18'];

        $Employee_Signature_3 = $_POST['Employee_Signature_3'];
        $Date_3 = $_POST['Date_3'];

        $Date_3 = $_POST['Date_3'];
        $Agency_Witness_1 = $_POST['Agency_Witness_1'];
        $Date_4 = $_POST['Date_4'];

        $Approved_By_1 = $_POST['Approved_By_1'];
        $Effective_By_1 = $_POST['Effective_By_1'];

        $Effective_By_1 = $_POST['Effective_By_1'];

        $t_19 = $_POST['t_19'];

        $Employee_Signature_4 = $_POST['Employee_Signature_4'];
        $Date_5 = $_POST['Date_5'];

        $Supervisor_Signature = $_POST['Supervisor_Signature'];
        $Date_6 = $_POST['Date_6'];

        $t_20 = $_POST['t_20'];
        $Staff_Signature_1 = $_POST['Staff_Signature_1'];
        $Staff_Title_1 = $_POST['Staff_Title_1'];

        $Date_7 = $_POST['Date_7'];

        $Employee_Signature_5 = $_POST['Employee_Signature_5'];
        $Date_8 = $_POST['Date_8'];

        $Agency_Representative_Signature = $_POST['Agency_Representative_Signature'];
        $Date_9 = $_POST['Date_9'];

        $t_21 = $_POST['t_21'];
        $Printed_Name_of_Applicant_1 = $_POST['Printed_Name_of_Applicant_1'];
        $Application_Signature_1 = $_POST['Application_Signature_1'];

        $Date_10 = $_POST['Date_10'];

        $Witness_Signature_1 = $_POST['Witness_Signature_1'];
        $Printed_Name_of_Witness_1 = $_POST['Printed_Name_of_Witness_1'];




        


        $message = " " ;




        try {

            $mail->isSMTP();                                            
            $mail->Host       = 'mail.demo.com';        
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'demo@demo.com';                 
            $mail->Password   = 'pass';                         
            $mail->SMTPSecure = 'tls';                                  
            $mail->Port       = 587;                                    
            
            $mail->setFrom( "Noreplay@demo.com", $name); 
            $mail->addAddress("demo@gmail.com", "demo name");     
           
            $mail->isHTML(true);
            $mail->Subject = "title demo";
            $mail->Body    = $message;
    
            $mail->send();
            
            
            
            
            echo "
                <script>

                    localStorage.setItem('alert_Email', '1');
                    window.location.href='../index.php';
                
                </script>
            ";
            exit;

        } catch (Exception $e) {

            echo "
                <script>

                    localStorage.setItem('alert_Email', '2');
                    window.location.href='../index.php';
                
                </script>
            ";
            exit;

        }



        






    }
