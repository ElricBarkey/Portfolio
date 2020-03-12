<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>

    <!-- Very key and important, Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="guestbookstyles.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/book.png">


</head>
<body>
    <div class = "container" id="outside">

        <div class="jumbotron">
            <h1 class="display-1">Welcome and Sign My Guestbook!</h1>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <div class="navbar-text " id="logo-title"><a href="../../portIndex.html">Portfolio</a></div>
                <button id="menubtn" class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a target="_blank" href="https://www.linkedin.com/in/elric-barkey/">Linkedin</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1 rounded" id="contactUs">
                            <a href="../resume/resumeTemplate.html">Resume</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a href="guestbook.php">Guestbook</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a href="guestbookadmin.php">Admin page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- start of form -->
        <form id="guestbookform" method="post" action="confirmGuest.php">

            <fieldset class="form-group">

                <legend>Contact Info</legend>

                <div class="form-group">
                    <label for="firstN">First Name</label>
                    <input type="text" class="form-control" id="firstN" name="firstName">
                    <span class="err" id="errFirst">Please enter your first name</span>
                </div>

                <div class="form-group">
                    <label for="lastN">Last Name</label>
                    <input type="text" class="form-control" id="lastN" name="lastName">
                    <span class="err" id="errLast">Please enter your last name</span>
                </div>

                <div class="form-group">
                    <label for="jobTitle">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitles">
                </div>

                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="companys">
                </div>

                <div class="form-group">
                    <label for="linkedin">LinkedIn URL</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedinN">
                    <span class="err" id="errUrl">Please include http and .com</span>
                </div>

                <div class="form-group">
                    <label for="emailAddress">Email</label>
                    <input type="text" class="form-control" id="emailAddress" name="emailN">
                    <span class="err float-left" id="errValidEmail">Please enter an email with @ and .</span>
                    <span class="err float-left" id="errEmail">Please enter a email</span>
                </div>

            </fieldset>



            <fieldset class="form-group">

                <legend>How did we meet?</legend>

                <div class="form-group">
                    <select class="form-control" id="met" name="metN">
                        <option value="none">Select a option</option>
                        <option value="Meet up">Meetup</option>
                        <option value="Job Fair">Job Fair</option>
                        <option value="Other">Other</option>
                        <option value="We haven't meet">We haven't meet</option>
                    </select>
                    <span class="err float-right" id="errMet">Please select an option</span>

                    <div id="otherCon">
                        <label for="message">Other</label>
                        <textarea class="form-control" rows="1" id="other" name="others"> </textarea>
                    </div>
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="3" id="message" name="messages"> </textarea>
                </div>

            </fieldset>


            <fieldset class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="email" value="email"  name="emailcheck" onchange="showType()">
                    <label class="form-check-label" for="email">Please add me your mailing list!</label>
                </div>
                <div id="mailType">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="method"
                               id="HTML" value="HTML" checked>
                        <label class="form-check-label" for="HTML">HTML</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="method"
                               id="Text" value="Text">
                        <label class="form-check-label" for="Text">Text</label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="guestbookadmin.php" class="btn btn-secondary float-right">Admin</a>
        </form>
    </div>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <script src="client-side.js"></script>

</body>
</html>