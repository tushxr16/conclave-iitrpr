<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadership Summit 2022</title>
    <link href="styles/home.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/animation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="background-img">
    <nav class="navbar navbar-expand-lg navbar-light navbar-grad bg-light">
        <div class="container-fluid">
            <a class="nav-brand-layout" href="./index.php">Leadership Summit 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav mx-3">
                    <li class="nav-item my-3">
                        <a class="gradient-box-outline" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="gradient-box-outline" href="./prelude.php">Prelude</a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="active gradient-box" aria-current="page" href="./agenda.php">Agenda</a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="gradient-box-outline" href="./team.php">Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-evenly my-5">
            <div class="col-md-5 w3-animate-left">
                <div class="heading">
                    REVIVAL OF CLUTURE AMONG IITIANS (PRE-COVID IIT LIFE)
                </div>
                <p class="my-3">
                    It is quite evident that after the outbreak of the COVID-19 virus, it is challenging to return to the world as it was before. Therefore, putting efforts in the right direction to revive the lost offline experiences is crucial. Even though the virtual world has its advantages, we can't deny the importance of classroom teaching, peer interactions, and senior-junior involvement. This lack of hands-on experience has deteriorated the social aspect of our lives.
                </p>
            </div>
            <div class="col-md-5 w3-animate-right" style="display: flex; flex-direction: column; align-items: center;">
                <div class="sub-heading">
                    We envision discussing the following aspects
                </div>
                <div class="btn btn-light my-3" style="height: 100px; width: 30vw">
                    What measures can be taken to encourage more and more students to be involved in cultural activities?
                </div>
                <div class="btn btn-info my-3" style="height: 100px; width: 30vw">
                    What components of our current organizations (societies and clubs) need to change considering this online to offline transition again?
                </div>
                <div class="btn btn-dark my-3" style="height: 100px; width: 30vw">
                    In what ways can we restore the gap between specific batches owing to the pandemic?
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>