<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'guestCheckLog.php';

// connect to db
require ('/home/ebarkeyg/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook Admin</title>

    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" >


    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/book.png">


</head>

<body>
    <div class="container">
        <h3>Guess Book Admin</h3>
        <table id="guestbook">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>LinkedIn</th>
                <th>How we meet</th>
                <th>Mailing List</th>
                <th>Message</th>
                <th>Time Stamp</th>
            </tr>
            </thead>

            <?php
            // define a query
            $sql = "SELECT * FROM guestbook";

            // send the query to the db
            $result = mysqli_query($cnxn, $sql);

            // process the result
            foreach ($result as $row)
            {
                $first = $row['firstName'];
                $last = $row['lastName'];
                $email = $row['email'];
                $linkedin = $row['linkedin'];
                $jobTitle = $row['jobTitle'];
                $message = $row['message'];
                $met = $row['met'];
                $timeStamp = $row['timeS'];
                $company = $row['company'];

                $mailingList = $row['mailingList'];
                if ($mailingList == 1)
                {
                    $mailingList = "yes";
                }
                else
                {
                    $mailingList = "no";
                }

                echo
                "<tr>
                    <td>$first $last</td>
                    <td>$email</td>
                    <td>$jobTitle</td>
                    <td>$company</td>
                    <td>$linkedin</td>
                    <td>$met</td>
                    <td>$mailingList</td>
                    <td>$message</td>
                 
                    <td>$timeStamp</td>
                   </tr>";
            }
            ?>
        </table>
    </div>
    <a href="guestbook.php" class="btn btn-secondary">Guest book form</a>
    <a href="guestLogout.php" class="btn btn-secondary"> Logout</a>
    <a href="../../portIndex.html" class="btn btn-secondary"> Portfolio</a>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#guestbook').DataTable();
</script>

</body>
</html>


<?php
