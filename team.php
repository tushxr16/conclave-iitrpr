<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Leadership Summit '22 | IIT Ropar" />
    <meta name="author" content="IIT Ropar" />
    <meta name="keywords" content="Leadership, Summit, IIT Ropar, Conclave" />
    <meta name="language" content="EN" />
    <meta name="subtitle" content="Leadership Summit '22 Official Website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Leadership Summit '22 | IIT Ropar" />
    <meta property="og:description" content="Leadership Summit '22 Official Website" />
    <meta property="og:url" content="https://leadership-summit22.herokuapp.com/" />
    <meta property="og:image" content="images/LOGO.jpeg" />
    <title>Leadership Summit 2022</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="styles/home.css" />
    <link rel="stylesheet" href="styles/animation.css" />
    <link rel="stylesheet" href="styles/bootstrap.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy:ital@0;1&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
      
            <link href="styles/team.css" rel="stylesheet">

    <!-- New Addition FontAwesome Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
		.page-sticky-head-holder {
			position: sticky;
			top: 80px;
			background-color: #eee;
			z-index: 10;
			margin-bottom: 30px;
		}

		.page-sticky-head {
			font-family: 'Montserrat';
			font-size: 16px;
			letter-spacing: 10px;
			color: #0d6c7c;
			font-weight: 600;
			border-bottom: 1px solid #ccc;
			width: 60%;
			margin-left: 7%;
			padding: 20px 30px;
			box-shadow: 0px 8px 6px -6px #ddd;
		}


		@media (max-width: 660px) {
			.page-sticky-head-holder {
				top: 68px;
			}

			.page-sticky-head {
				margin-left: 2%;
				width: 90%;
				letter-spacing: 5px;
				;
			}
		}

		.desc_text {
			font-family: 'Raleway';
			line-height: 30px;
			font-size: 20px;
			margin-top: 30px;
		}

		@media (max-width: 660px) {
			.desc_text {
				line-height: 26px;
				font-size: 16px;
				margin-top: 30px;
			}
		}
	</style>

</head>

<!--
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="navbar-example2">
        <div class="container-fluid">
            <a class="nav-brand-layout" href="./index.php">Leadership Summit 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav mx-3 nav-tabs" role="tablist" id="mainNav">
                    <li class="nav-item my-3">
                        <a href="index.php#home" class="gradient-box-outline">Home</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#prelude" class="gradient-box-outline">Prelude</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#agendas" class="gradient-box-outline">Agendas</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#agendas" class="gradient-box-outline">Schedule</a>
                    </li>
                    <li class="nav-item my-3">
                        <a aria-current="page" href="#team" class="gradient-box-outline gradient-box">Team</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="#contact" class="gradient-box-outline">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="team" class="py-5">
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-md-12 team-head-ad">
                    <h1>Meet The Team</h1>
                </div>
            </div>
        </div>

        <div class="container" id="m-content">
            <div class="team-heading">Mentors</div>
            <div class="row" style="justify-content: center;">
                
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/Dr-Pushpendra-P-Singh.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Dr. Pushpendra P. Singh - Associate Dean (Research and Developement)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/sc-martha.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Dr. Subash Chandra Martha - Associate Dean (Student Affairs)</h6>
                        </div>
                    </div>

                </div>


            </div>
            <br>
            <br>
            <br>
        </div>
        <div class="container" id="c-content" >
            <div class="team-heading">Torch Bearers</div>
            <div class="row" style="justify-content: center;">
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/diksha-mittal.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Diksha Mittal </h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/raghav-verma.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Raghav Verma </h6>
                        </div>
                    </div>

                </div>
               
               
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/suvansh.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Suvansh Bhargava</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/piyush-pratap-singh.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Piyush Pratap Singh</h6>
                        </div>
                    </div>

                </div>
    

            </div>
            <br>
            <br>
            <br>
        </div>

        <div class="container" id="c-content" >
            <div class="team-heading">Core Team</div>
            <div class="row" style="justify-content: center;">
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/diksha-mittal.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Vedant Sati</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/prachi.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Prachi</h6>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <br>
            <br>
        </div>

        <div class="container" id="o-content">
            <div class="team-heading">Organizing Team</div>
            <div class="row" style="justify-content: center;">
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/riya-gupta.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Riya Gupta</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/hardik.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Hardik Rana</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/ashu.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Ashutosh Patil</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/harjot.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Harjot Kaur</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/sagarika.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Sagarika Bhattacharjee</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/prachi.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Prachi</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/tiya.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Tiya Jain</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/himanshu.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Himanshu Parganiha</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/tushar.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Tushar Sharma</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/chitrankar.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Chitrankar</h6>
                        </div>
                    </div>

                </div>
               
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/armaan.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Armaan Sharma</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/chinmay.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Chinmay Agrawal</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/vedant.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Vedant Sati</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/vasu.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Vasu Bansal</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/jashandeep.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Jashandeep Singh</h6>
                        </div>
                    </div>

                </div>
               
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/ayushi.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Ayushi Patel</h6>
                        </div>
                    </div>

                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/aryan.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Aryan Agrawal</h6>
                        </div>
                    </div>

                </div>
            
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/yatin.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Yatin Saini</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/rahul.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Rahul Vinod</h6>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/arnav-kharbanda.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Arnav Kharbanda</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/yashasav.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Yashasav Prajapati</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/arpit.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Arpit Kumar Verma</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/sneha.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Sneha Shah</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/devanshi.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Devanshi Sawhney</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/vaishnavi.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Vaishnavi Baredar</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/rohan.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Rohan Nijhawan</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/manan.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Manan Dangwal</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/vrinda.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Vrinda Dua</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad w-75">

                        <img src="./images/vishal.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Vishal Agarwal</h6>
                        </div>
                    </div>

                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/navneet.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Navneet Mishra</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/simarpreet.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Simarpreet Kaur</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/riya.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Riya Wadhwa</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/taranjot.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Taranjot Kaur</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/nazim.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Nazim Ali</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 center-responsive d-flex" style="margin-top:15px;">
                    <div class="card card-body flex-fill card-custom-ad">

                        <img src="./images/sacchidanad.png" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Sacchidanad Kushwaha</h6>
                        </div>
                    </div>

                </div>
                

            </div>
            <br>
            <br>
            <br>
        </div>

    </section>



    <section id="contact">
        <div class="d-flex flex-column h-100">
            <div class="hero text-dark py-2 flex-grow-1">
                <div class="container-fluid">
                    <div class="row my-5">
                        <div class="col-md-12 team-head-ad">
                            <h1><i class="fa fa-home"></i> Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="w-100 py-4 flex-shrink-0">
                <div class="container py-4">
                    <div class="row gy-4 gx-5">
                        <div class="col-lg-4 col-md-4">
                            <h5 class="text-dark mb-3"><i class="fa fa-map-marker"></i> Address</h5>
                            <p>Main Campus <br>
                                Indian Institute of Technology Ropar <br>
                                Rupnagar <br>
                                Punjab, INDIA 140001
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <h5 class="text-dark mb-3"><i class="fa fa-phone"></i> Call</h5>
                            <ul class="list-unstyled text-muted">
                                <li> Prachi +91-8527-997951 </li>
                                <li> Himanshu +91-8109-669687</li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <h5 class="text-dark mb-3"><i class="fa fa-envelope"></i> Mail</h5>
                            <p class="small text-dark">leadership.summit@iitrpr.ac.in</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
-->
<body style="background-color:#eee">
	<?php //include("elem/navbar.php"); ?>
	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="navbar-example2">
        <div class="container-fluid">
            <a class="nav-brand-layout" href="./index.php">Leadership Summit 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav mx-3 nav-tabs" role="tablist" id="mainNav">
                    <li class="nav-item my-3">
                        <a href="index.php#home" class="gradient-box-outline">Home</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#prelude" class="gradient-box-outline">Prelude</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#agendas" class="gradient-box-outline">Agendas</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="index.php#agendas" class="gradient-box-outline">Schedule</a>
                    </li>
                    <li class="nav-item my-3">
                        <a aria-current="page" href="#team" class="gradient-box-outline gradient-box">Team</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="#contact" class="gradient-box-outline">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	<!-- Faculty -->
	<!--
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				FACULTY
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-12">
					<div class="our-team">
						<div class="pic">
							<img src='images/arnav-kharbanda.png' alt="">
								<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>$mail<br>
								<i class="fa fa-whatsapp" aria-hidden='true'></i><br>$wapp
								<i class="fa fa-phone" aria-hidden='true'></i><br>$phone
								</div>	
						</div>
					<div class='detail'>
						<div class='title'>$name</div>
						<div class='post'>$post</div>
						<div class='contact'>
						<a href='https://api.whatsapp.com/send?phone=+91$wapp' target='_blank' rel='noopener noreferrer'><i class='fa fa-whatsapp' aria-hidden='true'></i></a>
						<a href='$fb' target='_blank' rel='noopener noreferrer'><i class='fa fa-instagram' aria-hidden='true'></i></a>
						<a href='mailto:$mail' target='_blank' rel='noopener noreferrer'><i class='fa fa-envelope' aria-hidden='true'></i></a>
						<a href='tel:$phone' target='_blank' rel='noopener noreferrer'><i class='fa fa-phone' aria-hidden='true'></i></a>
					</div>
				</div>
			</div>
		</div>
				<div class="col-md-8 desc_text">
					<b>Dr. Pardeep Duhan</b>, Assistant Professor in the Department of Electrical Engineering, IIT Ropar is the faculty incharge of this programme and has taken special interest to help and encourage the students to form this Mentorship Programme. He has made a special effort in order to prepare the events for counselling of the 2022 Batch. With his mentorship we ensure that we will counsel the freshers to the best extent possible.
				</div>
			</div>
		</div>
	</div>
	-->
	<!-- Core Team -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				MENTORS
			</div>
		</div>
		<div class="container" style="margin-top:110px;">
			<div class="row">
				<div class="col-md-3 col-1">
				</div>
				<div class="col-md-3 col-5">
					<div class="our-team">
						<div class="pic">
							<img src='./images/Dr-Pushpendra-P-Singh.jpeg' alt="">
							<div class='hidden-contact' style="margin-left:22%;">
								<i class="fa fa-envelope" aria-hidden='true'></i><br>pps@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Dr. Pushpendra P. Singh</div>
							<div class='post'>Associate Dean (Research and Development)</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-5">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sc-martha.jpg' alt="">
							<div class='hidden-contact' style="margin-left:16%;">
								<i class="fa fa-envelope" aria-hidden='true'></i><br>deansa@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Dr. Subash Chandra Martha</div>
							<div class='post'>Associate Dean (Student Affairs)</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-1">
				</div>
			</div>
		</div>
	</div>

	<!-- TORCH BEARERS -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				TORCH BEARERS
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/diksha-mittal.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2019mcb1216@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Diksha Mittal</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/raghav-verma.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2019meb1284@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Raghav Verma</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/suvansh.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2018ceb1032@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Suvansh Bhargava</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/piyush-pratap-singh.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2017chz0004@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Piyush Pratap Singh</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CORE TEAM -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				CORE TEAM
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/diksha-mittal.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1219@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Vedant Sati</div>
							<div class='post'>Sponsorship Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/prachi.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1048@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Prachi</div>
							<div class='post'>Overall Convener</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sneha.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021mcb1368@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Sneha Shah</div>
							<div class='post'>Website and Design Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/tiya.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1213@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Tiya Jain</div>
							<div class='post'>Content Team Head</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/himanshu.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020mmb1346@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Himanshu Parganiha</div>
							<div class='post'>Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/jashandeep.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1286@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Jashandeep Singh</div>
							<div class='post'>Hospitality Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/yatin.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020meb1335@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Yatin</div>
							<div class='post'>Photography Team Head</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/rahul.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020mcb1244@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Rahul</div>
							<div class='post'>Video Editing Head</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- WEB DEVELOPERS -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				WEB DEVELOPERS
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-0">
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/arnav-kharbanda.jpeg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021csb1072@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Arnav Kharbanda</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/arpit.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021eeb1156@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Arpit Kumar Verma</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-12">
					<div class="our-team">
						<div class="pic">
							<img src='./images/yashasav.jpg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021csb1143@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Yashasv Prajapati</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
				</div>
			</div>
		</div>
	</div>
	
	<!-- ORGANIZING TEAM -->
	<div>
		<div class="page-sticky-head-holder">
			<div class="page-sticky-head">
				ORGAINIZING TEAM
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/chitrankar.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020mmb1343@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Chitrankar</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/navneet.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>$mail<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Navneet</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/rohan.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021eeb1313@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Rohan Nijhawan</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/manan.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021eeb1186@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Manan Dangwal</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/simarpreet.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020bmz0002@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Simarpreet Kaur</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sagarika.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>sagarika.20mmz0006@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Sagarika Bhattacharjee</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/ayushi.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020csb1080@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Ayushi Patel</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/chinmay.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020ceb1008@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Chinmay Agrawal</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/armaan.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020csb1039@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Armaan Sharma</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/harshdeep.jpeg' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2021mcb1044@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Harshdeep</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/yashasav.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1257@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Abhishek Samyal</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="our-team">
						<div class="pic">
							<img src='./images/sacchidanad.png' alt="">
							<div class='hidden-contact'>
								<i class="fa fa-envelope" aria-hidden='true'></i><br>2020eeb1257@iitrpr.ac.in<br>
							</div>	
						</div>
						<div class='detail'>
							<div class='title'>Sacchidanad Kushwaha</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
    <section id="contact" style="margin-top:50px;">
        <div class="d-flex flex-column h-100">
            <div class="hero text-dark py-2 flex-grow-1">
                <div class="container-fluid">
                    <div class="row my-5">
                        <div class="col-md-12 team-head-ad">
                            <h1><i class="fa fa-home"></i> Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            
            <footer class="w-100 py-4 flex-shrink-0">
                <div class="container py-4">
                    <div class="row gy-4 gx-5">
                        <div class="col-lg-4 col-md-4">
                            <h5 class="text-dark mb-3"><i class="fa fa-map-marker"></i> Address</h5>
                            <p>Main Campus <br>
                                Indian Institute of Technology Ropar <br>
                                Rupnagar <br>
                                Punjab, INDIA 140001
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <h5 class="text-dark mb-3"><i class="fa fa-phone"></i> Call</h5>
                            <ul class="list-unstyled text-muted">
                                
                                <li> Prachi <a href="tel:+918527997951"
                                        style="text-decoration:none;">+91-8527-997951</a></li>
                                        <li> Himanshu <a style="text-decoration:none;"
                                        href="tel:+918109669687">+91-8109-669687</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <h5 class="text-dark mb-3"><i class="fa fa-envelope"></i> Mail</h5>
                            <p class="small text-dark"> <a style="text-decoration:none;"
                                    href="mailto:leadership.summit@iitrpr.ac.in"> leadership.summit@iitrpr.ac.in</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

</body>

</html>
