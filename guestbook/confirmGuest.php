<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <br>

<?php
         require('/home/ebarkeyg/db.php');
        require ('functions.php');

        //Turn on error reporting
        ini_set('display_errors', 1);
        error_reporting(E_ALL);


        $isValid = true;

        //var_dump($_POST);
        echo '<br>';

        //Get the form data
        if (!empty($_REQUEST['firstName']) && validName($_REQUEST['firstName']))
        {
            $fname = $_POST['firstName'];
        }
        else
        {
            echo '<h1>Please enter your first name.</h1><br>';
            $isValid = false;
        }

        if (!empty($_REQUEST['lastName']) && validName($_REQUEST['lastName']))
        {
            $lname = $_POST['lastName'];
        }
        else
        {
            echo '<h1>Please enter your last name.</h1><br>';
            $isValid = false;
        }



        //Validate email address
        if (!empty($_REQUEST['emailN']))
        {
            if (filter_var($_POST['emailN'], FILTER_VALIDATE_EMAIL))
            {
                $email =  $_POST['emailN'];
            }
            else
            {
                echo '<h1>Invalid email address.<br></h1>';
                $isValid = false;
            }
        }


        if (($_REQUEST['metN']) != 'none' and validMet($_REQUEST['metN']))
        {
            if($_REQUEST['metN'] == 'Other')
            {
                $met = $_POST['others'];
            }
            else
            {
                $met = $_POST['metN'];
            }

        }
        else
        {
            echo '<h1>You must select a meet up option</h1><br>';
            $isValid = false;
        }

        if (!empty($_REQUEST['linkedinN']))
        {
            $url = $_POST['linkedinN'];
            $check = true;

            if (!preg_match('/(\.com)/', $url))
            {
                $check = false;
            }
            if (!preg_match('/^(https)/' , $url))
            {
                $check = false;
            }

            if ($check == false)
            {
                echo '<h1>Invalid linkedin address.</h1><br>';
                $isValid = false;
            }
            else
            {
                $url =  $_POST['linkedinN'];
            }
        }
        else
        {
            $url = "";
        }



        if (isset($_REQUEST['emailcheck']))
        {
            $mailing = true;
            if (!empty($_REQUEST['emailN']))
            {
                if (filter_var($_POST['emailN'], FILTER_VALIDATE_EMAIL))
                {
                    $email =  $_POST['emailN'];
                }
                else
                {
                    $isValid = false;
                }
            }

            else
            {
                echo '<h1>Please enter a email address.</h1><br>';
                $isValid = false;
            }
        }
        else
        {
            $mailing = false;
        }

        if (!empty($_REQUEST['jobTitles']))
        {
            $jobTitle = $_POST['jobTitles'];
        }
        else
        {
            $jobTitle = "";
        }

        if (!empty($_REQUEST['companys']))
        {
            $company = $_POST['companys'];
        }
        else
        {
            $company = "";
        }

        if (!empty($_REQUEST['messages']))
        {
            $message = $_POST['messages'];
        }
        else
        {
            $message = "";
        }

        $radiobtn = $_POST['method'];

        $timestamp = getdate();


        if ($isValid)
        {
            echo '<h1>Thanks for being part of my guest book</h1>';
            //Make the query
            $q = "INSERT INTO guestbook (firstName, lastName, email, linkedin, mailingList, jobTitle, message, met, company, mailingType) 
                  VALUES ('$fname', '$lname', '$email', '$url','$mailing', '$jobTitle','$message','$met','$company', '$radiobtn')";


            //Send the query to the db
            $result = mysqli_query($cnxn, $q);


            echo '<p>' . 'Name: '. $fname . ' ' . $lname . '<br>' .
                'Email: '. $email .'<br>'.'Linkedin: '. $url . '<br>'.
                'How we meet: ' . $met .'<br>' . 'Mailing List: '. $mailing.'<br>'
                . 'Job Title: '. $jobTitle .'<br>'. 'Message: '. $message .'<br>'. 'Company: ' . $company .'<br>'.
                'Mailing Type: '. $radiobtn. '</p>';
        }

?>
</body>
</html>