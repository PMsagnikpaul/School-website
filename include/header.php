<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    //echo $current_file_name;

    if ($current_file_name == $requestUri)
        return 'active';
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    <title>NASHERKULI NETAJI VIDYALAYA (H.S.)</title>

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/modal.css">
</head>

<body>
    <div class="container-fluid yellow fixed">
        <!-- <img class="NNV" src="./images/Untitled-4.jpg"> -->
        <div class="row">
            <div class="col-sm">
                <p class="top">NASHERKULI NETAJI VIDYALAYA (H.S.)</p>
            </div>
        </div>
    </div>
    <div class="container-fluid yellow">
        <div class="row">
            <div class="col-sm-3 pad">
                <img src="./images/Document_1.jpg" width="100%">
            </div>
            <div class="col-sm-6 pad">
                <span class="head">Index No. - D2-166  <br>  H.S. Code-12374</span>
                <span  class="head">  Village & P.O. – Nasherkuli <br>District – Nadia</span>
                <span class="head"> Pin. – 741238</span>
                <span class="head">West Bengal</span>
            </div>
            <div class="col-sm-3 pad">
            <img src="./images/download.jpg" width="100%">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo echoActiveClassIfRequestMatches("index")?>">
                        <a class="nav-link" href=".\index.php">Home</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown <?php echo echoActiveClassIfRequestMatches("school")?><?php echo echoActiveClassIfRequestMatches("Vission")?><?php echo echoActiveClassIfRequestMatches("infrastructure")?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            School
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href=".\school.php">Our school</a>
                            <a class="dropdown-item" href=".\Vission.php">Mission and Vission</a>
                            <a class="dropdown-item" href=".\infrastructure.php"> Infrastructure </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown <?php echo echoActiveClassIfRequestMatches("timing")?> <?php echo echoActiveClassIfRequestMatches("rules")?> <?php echo echoActiveClassIfRequestMatches("inclusion")?> <?php echo echoActiveClassIfRequestMatches("uniform")?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Academics
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href=".\timing.php"> School Timings</a>
                            <a class="dropdown-item" href=".\rules.php"> School Rules </a>
                            <a class="dropdown-item" href=".\inclusion.php"> Inclusion </a>
                            <a class="dropdown-item" href=".\uniform.php">School Uniform </a>
                        </div>
                    </li>

                    <li class="nav-item  <?php echo echoActiveClassIfRequestMatches("event")?>">
                        <a class="nav-link" href=".\event.php">Event</a>
                    </li>

                    <li class="nav-item  <?php echo echoActiveClassIfRequestMatches("staff")?>">
                        <a class="nav-link" href=".\staff.php">Staff</a>
                    </li>

                    <li class="nav-item  <?php echo echoActiveClassIfRequestMatches("gallery")?>">
                        <a class="nav-link" href=".\gallery.php">Gallery</a>
                    </li>

                    <li class="nav-item  <?php echo echoActiveClassIfRequestMatches("contact")?>">
                        <a class="nav-link" href=".\contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>