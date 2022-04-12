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

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
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

        <!-- INTRO TO AGENDA -->
        <div class="row justify-content-evenly my-5">
            <div class="col-md-5 w3-animate-left justify-content-evenly">
                <div class="heading">
                    REVIVAL OF CLUTURE AMONG IITIANS (PRE-COVID IIT LIFE)
                </div>
                <p class="my-5" style="text-align: justify;">
                    It is quite evident that after the outbreak of the COVID-19 virus, it is challenging to return to the world as it was before. Therefore, putting efforts in the right direction to revive the lost offline experiences is crucial. Even though the virtual world has its advantages, we can't deny the importance of classroom teaching, peer interactions, and senior-junior involvement. This lack of hands-on experience has deteriorated the social aspect of our lives.
                </p>
                <img src="./images/agenda-1.png" class="agenda-img-resp" style="height:50vh; object-fit: contain"></img>
            </div>
            <div class="col-md-5 w3-animate-right" style="display: flex; flex-direction: column; align-items: center;">
                <div class="sub-heading">
                    We envision discussing the following aspects
                </div>
                <div class="my-3 agendaBlock" style="background: #00A8C6; color: white; display: flex; align-items: center;">
                    What measures can be taken to encourage more and more students to be involved in cultural activities?
                </div>
                <div class="my-3 agendaBlock" style="background: #8F77B4; color: white; display: flex; align-items: center;">
                    What components of our current organizations (societies and clubs) need to change considering this online to offline transition again?
                </div>
                <div class="my-3 agendaBlock" style="background: #757284; color: white; display: flex; align-items: center;">
                    In what ways can we restore the gap between specific batches owing to the pandemic?
                </div>
            </div>
        </div>
        <!-- AGENDA 3 -->


        <!-- AGENDA 5 -->
        <div class="row justify-content-evenly my-5" style="background: url('./images/agenda-2.png'); height: 90%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="col-10 my-5">
                <div class="justify-content-start w3-animate-left">
                    <div class="agenda-layout">
                        AGENDA 5
                    </div>
                    <div class="sub-heading my-3" style="text-overflow: hidden">
                        TO STOP BRAIN-DRAIN FROM THE COUNTRY (JOBS/HIGHER EDUCATION)
                    </div>
                </div>
                <div class="w3-animate-right">
                    <p class="my-5" style="text-align: justify;"> Around one-third of the IIT graduates move out of our country for further studies and better job opportunities that results in loss of talent due and this impacts the nation in terms of economic development and overall growth. Lack of funding for research, degraded quality of life and non-recognition of their work are some of the reasons responsible for brain drain. </p>
                    <p style="text-align: justify;">Our summit needs to address and discuss the Further mentioned problems:</p>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-5 w3-animate-left">
                    <div class="my-3 agendaBlock" style="background: #01AAB1; color: white; display: flex; align-items: center;">
                        Do highly competent workers send money home, invest, and share their knowledge? If not, what needs to be done to ensure that this occurs? </div>
                    <div class="my-3 agendaBlock" style="background: #2E526A; color: white; display: flex; align-items: center;">
                        What do we know about the fiscal and production externalities of brain drain, and isn't it time we returned the favor to the society that helped us develop our moral responsibility? </div>
                </div>
                <div class="col-md-5 w3-animate-right">
                    <div class="my-3 agendaBlock" style="background: #2184A3; color: white; display: flex; align-items: center;">
                        What are the ramifications of such migration, particularly on the educational system and the country's development? </div>
                    <div class="my-3 agendaBlock" style="background: #6B83AF; color: white; display: flex; align-items: center;">
                        How can the startup culture be resurrected in India so that Indians, rather than becoming CEOs of large foreign corporations, form MNCs in their own country? </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>