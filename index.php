<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
   $_SERVER['HTTPS'] == 1) ||  
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="description" content="MathRix has always been a fascinating fest, testing the tech cum math abilities of students from various colleges.">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>MathRix'19 | DEPARTMENT OF MATHEMATICS</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/meta.png">
    <link rel="shortcut icon" type="image/ico" href="images/meta.png" />
    
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/popup-form.css">
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
          <img class="loader-img" src="images/loader.svg" alt="loader">
        </div>
    </div>



    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="https://www.mathrix.in" class="navbar-brand logo">
                    <img src="images/mathrix -logo.png" alt="logo">
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#events-page">Events</a></li>
                    <li><a href="#workshop-page">Workshop</a></li>
                    <li><a href="#team-page">Team</a></li>
                    <li><a href="#registration-page">Register</a></li>
                    <li><a href="#contact-page">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <!-- <div id="particles-js"><canvas class="particles-js-canvas-el" width="1087" height="866" style="width: 100%; height: 100%;"></canvas></div> -->
        <div class="container">
            <div class="row v-center">
                    <canvas id="scene"></canvas>
                    <input id="copy" type="hidden" value="MathRix'19 " />
                <div class="col-xs-12 col-md-12 header-text">
                    <h2>Colloquium - Department of Mathematics</h2>
                    <p>MathRix has always been a fascinating fest, testing the tech cum math abilities of students from various colleges. Events serves as a rostrum for the participants to exhibit their skills and talents to win prizes.</p>
                    <!-- <a href="#" class="button white">Watch video</a> -->

                    <div class="timer-box timer" id="timer">
                        <div class="row v-center">
                            <div class="col-xs-12 col-sm-8">
                                <div>
                                    <h5 style="letter-spacing: 1px;">Marching towards March'18 2k19</h5>
                                </div>
                                <div class="timer time" id="days"></div>
                                <div class="timer colon">:</div>
                                <div class="timer time" id="hours"></div>
                                <div class="timer colon">:</div>
                                <div class="timer time" id="minutes"></div>
                                <div class="timer colon">:</div>
                                <div class="timer time" id="seconds"></div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="home-button" data-animation="animated fadeInUp">
                                    <a href="#popup" class="pay">REGISTER NOW</a>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>

                                <!-- payment modal -->
                                <div class="payment_modal">
                                    <div class="modal_background">
                                    </div>
                                    <div class="container">
                                    <div class="row">
                                    <div class="modalbox success col-xs-10 col-sm-8 col-md-6 col-lg-5 center animate">
                                      <div class="icon">
                                        <span class="glyphicon glyphicon-ok"></span>
                                      </div>
                                      <!--/.icon-->
                                      <h1>Transaction Success!</h1>
                                      <p> Get ready to explore VR
                                        </p>
                                      <button type="button" class="redo btn">Ok</button>
                                    </div>
                                    <!--/.success-->
                                    </div>
                                    <!--/.row-->
                                    <div class="row">
                                    <div class="modalbox error col-xs-10 col-sm-8 col-md-6 col-lg-5 center animate" style="display: none;">
                                      <div class="icon">
                                        <span class="glyphicon glyphicon-thumbs-down"></span>
                                      </div>
                                      <!--/.icon-->
                                      <h1>Oh no!</h1>
                                      <p>Oops! Something went wrong,
                                        <br> you should try again.</p>
                                      <button type="button" class="redo btn">Try again</button>
                                    </div>
                                    <!--/.success-->
                                    </div>
                                    <!--/.row-->
                                    </div>
                                  </div>
                              <!-- payment modal ends here -->


                <div id="popup" class="overlay-popup-form ScrollStyle">
              		<div class="popup">
              			<a class="close" href="#">&times;</a>
              			<div class="content">
              				<div class="form-v7">
              					<div class="page-content">
              						<div class="form-v7-content">
              							<div class="form-left">
              								<img src="images/graph.png" alt="form">
              								<!-- <p class="text-1">Register</p> -->
              								<p class="text-2">Mathrix'19</p>
              							</div>
                            <form class="form-detail" action="#" method="post" id="myform">
              								<div class="form-row">
              									<label for="username">NAME</label>
              									<input type="text" name="username" id="username" class="input-text popup-input1" autocomplete="off" required>
              								</div>
              								<div class="form-row">
              									<div class="form-group col-md-8 no--padding-left no--margin-bottom">
              										<label for="collge_id">COLLEGE NAME</label>
              										<input type="text" name="college_name" id="college_name" class="input-text popup-input2" autocomplete="off" required>
              									</div>
              								<!-- </div> -->
              								<!-- <div class="form-row"> -->
              									<div class="form-group col-md-4 no--padding-x-dir no--margin-bottom">
              										<label for="student_reg_name">STUDENT REG. NO.</label>
              										<input type="text" name="college_reg_id" id="college_reg_id" class="input-text popup-input3" autocomplete="off" required>
              									</div>
              								</div>
              								<div class="form-row">
              									<div class="form-group col-md-8 no--padding-left no--margin-bottom" style="height: 60px;">
              										<label for="cousre_name">COURSE </label>
              										<input type="text" name="course_name" id="course_name" class="input-text popup-input4" autocomplete="off" required>
              									</div>
              								<!-- </div> -->
              								<!-- <div class="form-row"> -->
              									<div class="form-group col-md-4 no--padding-x-dir no--margin-bottom">
              										<label for="year">YEAR</label>
              										<!-- <input type="text" name="year" id="year" class="input-text" autocomplete="off" required> -->
                                  <select class="form-control popup-input5" id="year-dropdown">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
              									</div>
              								</div>
              								<div class="form-row">
              									<label for="gender" class="pb-3">GENDER</label>
              								</div>
                              <div class="form-row radio-alignment">
                                <div class="form-group col-md-6">
                                  <label class="radio-container">Male
                                    <input style="width:unset;" type="radio" checked="checked" name="gender-radio">
                                    <span class="radio-checkmark"></span>
                                  </label>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="radio-container">Female
                                    <input style="width:unset;" type="radio" name="gender-radio">
                                    <span class="radio-checkmark"></span>
                                  </label>
                                </div>
                              </div>
              								<div class="form-row">
              									<label for="your_email">E-MAIL</label>
                                <input type="email" name="your_email" id="email" class="input-text popup-input6" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" autocomplete="off" required>
                                <span class="popup-msg">Not a valid email address </span>
              								</div>
              								<div class="form-row">
              									<label for="mobile-id">MOBILE NO.</label>
              									<input type="text" name="mobile-id" id="mobile-no" class="input-text popup-input7" autocomplete="off" required>
              								</div>
              								<div class="form-row">
                                
              									<input type="button" id="popup-register-btn" name="register" class="register" value="Register" onclick="send_request()">
                             
                              </div>
                              <div class="form-row">
                                <div class="form-group no__padding-left">
                                  <div class="alert-message notice notice-danger">
                                    <strong>  </strong>
                                  </div>
                                </div>
                              </div>
              							</form>
              						</div>
              					</div>
              			</div>
              		</div>
              	</div>
              </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->


    <section class="gray-bg section-padding" id="events-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Events</h2>
                    </div>
                </div>
            </div>
            <div class="row row-flex">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
                        <div class="m-portlet__head m-portlet__head--fit-">
                          <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                              <h3 class="m-portlet__head-text m--font-light">
                                Code Relay
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="m-portlet__body">
                          <div class="m-widget27 m-portlet-fit--sides">
                            <div class="m-widget27__pic">
                              <img src="images/Code Relay.png" alt="">
                              <h3 class="m-widget27__title m--font-light">
                                <span>
                                  <span>
                                    <!-- $ -->
                                  </span>
                                  <!-- Code Relay -->
                                </span>
                              </h3>
                              <div class="m-widget27__btn">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                  Code Relay
                                </button>
                              </div>
                            </div>
                            <div class="m-widget27__container">
                              <!-- begin::Nav pills -->
                              <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                <li class="m-widget27__nav-item nav-item active">
                                  <a class="nav-link" data-toggle="pill" href="#description_event_one">
                                    Description
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#format_event_one">
                                    Format
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#rule_event_one">
                                    Rule
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#contact_event_one">
                                    Contact
                                  </a>
                                </li>
                              </ul>
                              <!-- end::Nav pills -->
                    <!-- begin::Tab Content -->
                              <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                <div id="description_event_one" class="tab-pane active">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                      <div class="m-widget27__legends">
                                        <div class="m-widget27__legend">
                                          <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          <span class="m-widget27__legend-text">
                                            Attention geeks out there! Wanna code with a pinch of fun? Then get ready to solve our questions in a relay and try to cope with the flow. Come as a team of three, we'll set  you on the track.
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="format_event_one" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Coding will be done in system
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Participants will be given a programming question
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                All three members of the team can view the question.  The first team member starts to type the code followed by the remaining team members similar to a relay race
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="rule_event_one" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Programming languages  allowed C,CPP, Java
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Three members per team
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Any form of malpractice will lead to immediate disqualification
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Decisions taken by organizers are final
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="contact_event_one" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Manimala - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Meera - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end::Tab Content -->
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
                        <div class="m-portlet__head m-portlet__head--fit-">
                          <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                              <h3 class="m-portlet__head-text m--font-light">
                                Tricksters
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="m-portlet__body">
                          <div class="m-widget27 m-portlet-fit--sides">
                            <div class="m-widget27__pic">
                              <img src="images/Tricksters.png" alt="">
                              <h3 class="m-widget27__title m--font-light">
                                <span>
                                  <span>
                                    <!-- $ -->
                                  </span>
                                  <!-- Code Relay -->
                                </span>
                              </h3>
                              <div class="m-widget27__btn">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                  Tricksters
                                </button>
                              </div>
                            </div>
                            <div class="m-widget27__container">
                              <!-- begin::Nav pills -->
                              <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                <li class="m-widget27__nav-item nav-item active">
                                  <a class="nav-link" data-toggle="pill" href="#description_event_two">
                                    Description
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#format_event_two">
                                    Format
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#rule_event_two">
                                    Rule
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#contact_event_two">
                                    Contact
                                  </a>
                                </li>
                              </ul>
                              <!-- end::Nav pills -->
                    <!-- begin::Tab Content -->
                              <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                <div id="description_event_two" class="tab-pane active">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                      <div class="m-widget27__legends">
                                        <div class="m-widget27__legend">
                                          <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          <span class="m-widget27__legend-text">
                                          A brain exercise it is! We quench people with high dose of quirky quiz who is passionate in solving logical problems. Get your eyes sharp and ears right. You're being tricked!.
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="format_event_two" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Pen and Paper
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Participants will be given a set of tricky questions which include logical reasoning, puzzles , brain teasers to test  their thinking capability
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Star questions has high weightage, “so catch your stars to bright your future”
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="rule_event_two" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Two members per team
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Use of internet not allowed
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Use of any electronic gadget not allowed
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Any form of malpractice will lead to immediate disqualification
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Decisions taken by organizers are final
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="contact_event_two" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Mashuka - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Ramani - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end::Tab Content -->
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
                        <div class="m-portlet__head m-portlet__head--fit-">
                          <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                              <h3 class="m-portlet__head-text m--font-light">
                                Connections
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="m-portlet__body">
                          <div class="m-widget27 m-portlet-fit--sides">
                            <div class="m-widget27__pic">
                              <img src="images/Connections.png" alt="">
                              <h3 class="m-widget27__title m--font-light">
                                <span>
                                  <span>
                                    <!-- $ -->
                                  </span>
                                  <!-- Code Relay -->
                                </span>
                              </h3>
                              <div class="m-widget27__btn">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                  Connections
                                </button>
                              </div>
                            </div>
                            <div class="m-widget27__container">
                              <!-- begin::Nav pills -->
                              <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                <li class="m-widget27__nav-item nav-item active">
                                  <a class="nav-link" data-toggle="pill" href="#description_event_three">
                                    Description
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#format_event_three">
                                    Format
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#rule_event_three">
                                    Rule
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#contact_event_three">
                                    Contact
                                  </a>
                                </li>
                              </ul>
                              <!-- end::Nav pills -->
                    <!-- begin::Tab Content -->
                              <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                <div id="description_event_three" class="tab-pane active">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                      <div class="m-widget27__legends">
                                        <div class="m-widget27__legend">
                                          <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          <span class="m-widget27__legend-text">
                                            Are you ardent in connecting the dots? This one's for you. A fun filled event that let your minds rope up on the pictures in a different perspective. Come! Answer! Have fun answering!
Think out of the box win exciting prizes.
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="format_event_three" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Answers to be written in paper
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Questions will be displayed
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Participants has to connect the images and find out the answers and write it down in the paper
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="rule_event_three" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Two members per team
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Do not Say the answers just write it down in the paper
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Use of internet not allowed
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Decisions taken by organizers are final
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="contact_event_three" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Priya - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Vairavan - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end::Tab Content -->
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
                        <div class="m-portlet__head m-portlet__head--fit-">
                          <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                              <h3 class="m-portlet__head-text m--font-light">
                                Math Quiz
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="m-portlet__body">
                          <div class="m-widget27 m-portlet-fit--sides">
                            <div class="m-widget27__pic">
                              <img src="images/Math Quiz.png" alt="">
                              <h3 class="m-widget27__title m--font-light">
                                <span>
                                  <span>
                                    <!-- $ -->
                                  </span>
                                  <!-- Code Relay -->
                                </span>
                              </h3>
                              <div class="m-widget27__btn">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                  Math Quiz
                                </button>
                              </div>
                            </div>
                            <div class="m-widget27__container">
                              <!-- begin::Nav pills -->
                              <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                <li class="m-widget27__nav-item nav-item active">
                                  <a class="nav-link" data-toggle="pill" href="#description_event_four">
                                    Description
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#format_event_four">
                                    Format
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#rule_event_four">
                                    Rule
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#contact_event_four">
                                    Contact
                                  </a>
                                </li>
                              </ul>
                              <!-- end::Nav pills -->
                    <!-- begin::Tab Content -->
                              <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                <div id="description_event_four" class="tab-pane active">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                      <div class="m-widget27__legends">
                                        <div class="m-widget27__legend">
                                          <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          <span class="m-widget27__legend-text">
                                            We quench people with high dose of quirky quiz who is passionated in solving logical problems. Gonna be an unconventional quiz show! Excited?
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="format_event_four" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Prelims : Pen and Paper
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                            Final : Question will be asked from various mathematical concepts
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="rule_event_four" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Maximum  3 per team
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Use of calculator not allowed
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Any form of malpractice will lead to immediate disqualification.
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Decisions taken by organizers are final.
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="contact_event_four" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Mahalingam - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                S.R Hansica - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end::Tab Content -->
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
                        <div class="m-portlet__head m-portlet__head--fit-">
                          <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                              <h3 class="m-portlet__head-text m--font-light">
                                Creative Math
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="m-portlet__body">
                          <div class="m-widget27 m-portlet-fit--sides">
                            <div class="m-widget27__pic">
                              <img src="images/Kalakal Kanitham.png" alt="">
                              <h3 class="m-widget27__title m--font-light">
                                <span>
                                  <span>
                                    <!-- $ -->
                                  </span>
                                  <!-- Code Relay -->
                                </span>
                              </h3>
                              <div class="m-widget27__btn">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                  Creative Math
                                </button>
                              </div>
                            </div>
                            <div class="m-widget27__container">
                              <!-- begin::Nav pills -->
                              <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                <li class="m-widget27__nav-item nav-item active">
                                  <a class="nav-link" data-toggle="pill" href="#description_event_five">
                                    Description
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#format_event_five">
                                    Format
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#rule_event_five">
                                    Rule
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#contact_event_five">
                                    Contact
                                  </a>
                                </li>
                              </ul>
                              <!-- end::Nav pills -->
                    <!-- begin::Tab Content -->
                              <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                <div id="description_event_five" class="tab-pane active">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                      <div class="m-widget27__legends">
                                        <div class="m-widget27__legend">
                                          <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          <span class="m-widget27__legend-text">
                                            “The essence of mathematics is not to make simple things complicated, but to make complicated things look simpler”- Stan Gudder. So come and explore the fun side of Mathematics.
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="format_event_five" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Round 1 : Connect the given pictures to find out a mathematical term
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Round 2 : A mathematical term will have to be found out using the three clues given by their teammate
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Round 3 : An object described by a member only through mathematical terms to be drawn and found out by the other two!
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Round 4 : A series of mathematical operations to be calculated in the given time!
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="rule_event_five" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                A team of three participants
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Maximum of two teams per college
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                ID card or bonafide is compulsory
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Obscenity in language and action will lead to disqualification
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Organizers decision will be final
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="contact_event_five" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              S.R Hansica - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Vijay Kumar - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end::Tab Content -->
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
                        <div class="m-portlet__head m-portlet__head--fit-">
                          <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                              <h3 class="m-portlet__head-text m--font-light">
                                Adzap
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="m-portlet__body">
                          <div class="m-widget27 m-portlet-fit--sides">
                            <div class="m-widget27__pic">
                              <img src="images/AdZap.svg" alt="">
                              <h3 class="m-widget27__title m--font-light">
                                <span>
                                  <span>
                                    <!-- $ -->
                                  </span>
                                  <!-- Code Relay -->
                                </span>
                              </h3>
                              <div class="m-widget27__btn">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                  Adzap
                                </button>
                              </div>
                            </div>
                            <div class="m-widget27__container">
                              <!-- begin::Nav pills -->
                              <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                <li class="m-widget27__nav-item nav-item active">
                                  <a class="nav-link" data-toggle="pill" href="#description_event_six">
                                    Description
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#format_event_six">
                                    Format
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#rule_event_six">
                                    Rule
                                  </a>
                                </li>
                                <li class="m-widget27__nav-item nav-item">
                                  <a class="nav-link" data-toggle="pill" href="#contact_event_six">
                                    Contact
                                  </a>
                                </li>
                              </ul>
                              <!-- end::Nav pills -->
                    <!-- begin::Tab Content -->
                              <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                <div id="description_event_six" class="tab-pane active">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                      <div class="m-widget27__legends">
                                        <div class="m-widget27__legend">
                                          <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          <span class="m-widget27__legend-text">
                                            We all would have been actors atleast once during our college days. Advertise a product/thing given to you in a short period of time and try to impress the crowd. Your spontaneous humour is appreciated. Usage of mathematical concepts kicks up the score. Showcase your talent here on stage and be the Adzap title winner of mathrix'19!                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="format_event_six" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Topic will be given ten minutes before the slot
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                On Stage event
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Usage of mathematical terms and concepts is mandatory
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="rule_event_six" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Time limit four minutes
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                5 - 7 members per team
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Vulgarity and Obscenity in language will lead to disqualification
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Decisions taken by organizers are final
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="contact_event_six" class="tab-pane fade">
                                  <div class="row  align-items-center">
                                    <div class="col">
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-success"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                              Mohan P - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                        <div class="m-widget27__legend legend-div-align">
                                          <div class="legend">
                                            <span class="m-widget27__legend-bullet m--bg-info"></span>
                                          </div>
                                              <div class="legend-text">
                                              <span class="m-widget27__legend-text">
                                                Sowndarya M - <a href="#">###</a>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end::Tab Content -->
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="angle-bg sky-bg section-padding" id="workshop-page">
        <div class="container">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Workshop</h2>
                        </div>
                    </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-interval="false" data-ride="carousel" data-pause="hover">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Virtual Reality</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p class="workshop-p">Ever wondered how a 3D film is shot? Or do you want to know how battlefield game is built? These environments are designed to fool our senses by substituting a digital world, that is why we tend to move hands while gaming or watching movies in 3D. It is just one application of VR. Want to know where it all began? Here at Mathrix, we offer a full one day workshop on virtual reality and its application with hands-on session powered by Nutpam, a leading enterprise in AR-VR technologies. </p>
                                        </div>
                                          <div class="bttn">
                                            <div class="btn-back">
                                                <a class="close no">&times;</a>
                                              <form style="padding-top:30px">
                                                <label class="workshop">
                                                  <input type="text" id="mathrix-id" required />
                                                  <div class="label-text">MathRix ID</div>
                                                </label>
                                                <span id="pay-error-alert"></span>
                                                <input type="button" class="pay workshop-pay" id="pay-cash" value="Pay Onspot" onclick="payment_gateway('no')" required></input>
                                                <input type="button" class="pay workshop-pay" id="pay-online" value="Pay Online" onclick="payment_gateway('yes')" required ></input>
                                                <a class="pay" id="check-pay" href="" hidden>Site</a>
                                              </form>
                                              <p><a href="#popup">Register</a> now to get MathRix ID</p>
                                            </div>
                                            <div class="btn-front">Register</div>
                                          </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/VR.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>About Nutpam</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p class="workshop-p">Nutpam is an enterprise specialized in holography, 3D animation, simulation games, stereoscopic imaging by executing AR, VR and mixed reality strategies. 
                                              They operate across various sectors such as automation, gaming, health and have business centres in more than 5 countries.<br />
                                              Mr. Royce Melwin, Technical Head, Nutpam <br />Mr. Praveen, Functional Lead, Nutpam
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/nutpam.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                              <div class="v-center">
                                  <div class="col-xs-12 col-md-6">
                                      <div class="caption-title" data-animation="animated fadeInUp">
                                          <h2>Register! Participate Learn and Explore!</h2>
                                      </div>
                                      <div class="caption-desc" data-animation="animated fadeInUp">
                                          <p class="text-center">Do register right away. This session helps you in building your career in the field of virtual reality, one of the high paying jobs in the world. 
                                            Hurry! Limited seats only.<br /><br/>
                                            <strong>
                                             *Bring Laptop with Unity tool as installed</strong><br/>(! Doesn't need any prior knowledge about Unity tool)<br/><strong>
                                            *Earn a valuable certificate. </strong><br/><br/>
                                            
                                            Date: 16 March<br />
                                            Fee: Rs 450 per head<br />
                                            Time: 10:00 am <br />
                                            Venue: Srinivasa Ramanujan Hall, Department of Mathematics.</p>
                                      </div>

                                  </div>
                                  <div class="col-xs-12 col-md-6">
                                      <div class="caption-photo one" data-animation="animated fadeInRight">
                                          <img src="images/VR-time.png" alt="">
                                      </div>
                                  </div>
                              </div>
                          </div>
                         </div>
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>Virtual Reality </strong>Stepping towards next generation
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                              <strong>About Nutpam</strong>Instructor of the workshop
                          </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>Time & Venue </strong>Get to know the details
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding" style="padding-bottom: unset;" id="team-page">
      <div class="container">
      <div class="row">
              <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                  <div class="page-title">
                      <h2>Special team</h2>
                  </div>
              </div>
          </div>
          <div class="row text-center">
              <div class="col-xs-12">
                  <div class="clients" >
                      <div class="single-team col-xs-12 col-sm-6 col-md-3">
                          <div class="team-photo">
                              <img src="images/hod.jpg" alt="">
                          </div>
                          <h5>Dr.G.Sethuraman</h5>
                          <p>Patron</p>
                      </div>
                      <div class="single-team col-xs-12 col-sm-6 col-md-3">
                          <div class="team-photo">
                              <img src="images/staff2.jpg" alt="">
                          </div>
                          <h5>Dr.A.Rathinasamy</h5>
                          <p>President</p>
                      </div>
                      <div class="single-team col-xs-12 col-sm-6 col-md-3">
                          <div class="team-photo">
                              <img src="images/staff3.jpeg" alt="">
                          </div>
                          <h5>Mr.M.Chinnadurai</h5>
                          <p>Student Advisor</p>
                      </div>
                      <div class="single-team col-xs-12 col-sm-6 col-md-3">
                          <div class="team-photo">
                              <img src="images/staff1.jpeg" alt="">
                          </div>
                          <h5>Dr.M.S.Kasiviswanathan</h5>
                          <p>Treasurer</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>



<section class="testimonial-area section-padding gray-bg overlay" id="team-page">
<div class="container">
        <!-- <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>Team</h2>
                </div>
            </div> -->
    <div class="row">
        <div class="col-xs-12">
            <div id="team_slide" class="carousel slide caption-slider" data-ride="carousel" data-pause="hover">
                <div class="carousel-inner" role="listbox">
                    <div class="item active row text-center">
                        <div class="v-center">
                            <div class="col-xs-12">
                                <div class="caption-title" data-animation="animated fadeInUp">
                                    <h2>Secretary & coordinator</h2>
                                </div>
                                <div class="group-photo one" data-animation="animated fadeInRight">
                                    <img src="images/secretary.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item row text-center">
                        <div class="v-center">
                            <div class="col-xs-12">
                                <div class="caption-title" data-animation="animated fadeInUp">
                                    <h2>Workshop Team</h2>
                                </div>
                                <div class="group-photo one" data-animation="animated fadeInRight">
                                    <img src="images/workshop-team.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item row text-center">
                        <div class="v-center">
                            <div class="col-xs-12">
                                <div class="caption-title" data-animation="animated fadeInUp">
                                    <h2>Events Team</h2>
                                </div>
                                <div class="group-photo one" data-animation="animated fadeInRight">
                                    <img src="images/events-team.jpg"  alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item row text-center">
                      <div class="v-center">
                          <div class="col-xs-12">
                              <div class="caption-title" data-animation="animated fadeInUp">
                                  <h2>Tech Team</h2>
                              </div>
                              <div class="group-photo one" data-animation="animated fadeInRight">
                                  <img src="images/tech-team.jpg"  alt="">
                              </div>
                          </div>
                      </div>
                  </div>
                    <div class="item row text-center">
                      <div class="v-center">
                          <div class="col-xs-12">
                              <div class="caption-title" data-animation="animated fadeInUp">
                                  <h2>Hospitality Team</h2>
                              </div>
                              <div class="group-photo one" data-animation="animated fadeInRight">
                                  <img src="images/hospi-team.jpg"  alt="">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item row text-center">
                    <div class="v-center">
                        <div class="col-xs-12">
                            <div class="caption-title" data-animation="animated fadeInUp">
                                <h2>Content Team</h2>
                            </div>
                            <div class="group-photo one" data-animation="animated fadeInRight">
                                <img src="images/content-team.jpg"  alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item row text-center">
                  <div class="v-center">
                      <div class="col-xs-12">
                          <div class="caption-title" data-animation="animated fadeInUp">
                              <h2>Design Team</h2>
                          </div>
                          <div class="group-photo one" data-animation="animated fadeInRight">
                              <img src="images/design-team.jpg"  alt="">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="item row text-center">
                <div class="v-center">
                    <div class="col-xs-12">
                        <div class="caption-title" data-animation="animated fadeInUp">
                            <h2>QAC Team</h2>
                        </div>
                        <div class="group-photo one" data-animation="animated fadeInRight">
                            <img src="images/qac-team.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item row text-center">
              <div class="v-center">
                  <div class="col-xs-12">
                      <div class="caption-title" data-animation="animated fadeInUp">
                          <h2>Sponsor Team</h2>
                      </div>
                      <div class="group-photo one" data-animation="animated fadeInRight">
                          <img src="images/sponsor-team.jpg" alt="">
                      </div>
                  </div>
              </div>
          </div>
            <div class="item row text-center">
              <div class="v-center">
                  <div class="col-xs-12">
                      <div class="caption-title" data-animation="animated fadeInUp">
                          <h2>Logistics Team</h2>
                      </div>
                      <div class="group-photo one" data-animation="animated fadeInRight">
                          <img src="images/logistics-team.jpg" alt="">
                      </div>
                  </div>
              </div>
          </div>
                    <div class="item row text-center">
                        <div class="v-center">
                            <div class="col-xs-12">
                                <div class="caption-title" data-animation="animated fadeInUp">
                                    <h2>Marketing Team</h2>
                                </div>
                                <div class="group-photo one" data-animation="animated fadeInRight">
                                    <img src="images/marketing-team.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
                <!-- Indicators -->
                <a class="left carousel-control" href="#team_slide" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#team_slide" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
        </div>
    </div>
</div>
</section>
</section>

    <section class="section-padding gray-bg" id="registration-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Registration</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                  <img src="images/graph.png" alt="form">
              </div>
              <div class="col-md-8">
                  <div class="demo">
                      <form class="form form-animate-fields" action="#" id=section-myform>
                        <div class="form-field col-md-12">
                          <input class="form-input target1" type="text" name="firstname" id="section-name" required>
                          <label for="firstname" class="form-label">
                            <span class="form-label-content">NAME</span>
                          </label>
                        </div>
                        <div class="form-row">
                        <div class="form-field form-group col-md-6">
                          <input class="form-input target2" type="text" name="lastname" id="section-col-name" required>
                          <label for="lastname" class="form-label">
                            <span class="form-label-content">COLLEGE NAME</span>
                          </label>
                        </div>
                        <div class="form-field form-group col-md-6">
                          <input class="form-input target3" type="text" name="lastname" id="section-col-reg-no" required>
                          <label for="lastname" class="form-label">
                            <span class="form-label-content">STUDENT REG. NO.</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-field form-group col-md-6">
                          <input class="form-input target4" type="text" name="lastname" id="section-course" required>
                          <label for="lastname" class="form-label">
                            <span class="form-label-content">COURSE</span>
                          </label>
                        </div>
                        <div class="form-field form-group col-md-6">
                          <input class="form-input target5" type="text" name="lastname" id="section-year" required>
                          <label for="lastname" class="form-label">
                            <span class="form-label-content">YEAR</span>
                          </label>
                        </div>
                        </div>
                        <div class="form-row col-xs-12" style="margin-unset;">
                          <label for="gender" class="pb-3 gender-text">GENDER</label>
                        </div>
                        <div class="form-row" style="margin-unset;">
                          <div class="form-group col-xs-6 no__margin-bottom">
                            <label class="section-radio-container">Male
                              <input type="radio" checked="checked" name="section-radio">
                              <span class="section-radio-checkmark"></span>
                            </label>
                          </div>
                          <div class="form-group col-xs-6 no__margin-bottom">
                            <label class="section-radio-container">Female
                              <input type="radio" name="section-radio">
                              <span class="section-radio-checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                        <div class="form-field form-group col-md-6">
                          <input class="form-input target6" type="email" name="email" id="section-email" required>
                          <label for="email" class="form-label">
                            <span class="form-label-content">E-MAIL</span>
                          </label>
                          <span class="msg">Not a valid email address</span>
                        </div>
                        <div class="form-field form-group col-md-6">
                          <input class="form-input target7" type="text" name="lastname" id="section-mob-no" required>
                          <label for="lastname" class="form-label">
                            <span class="form-label-content">MOBILE NO.</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                        <input type="button" name="register" id="section-register-btn" class="register" value="Register" onclick="section_form_request()">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group no__padding-left">
                          <div class="section-alert-message notice notice-danger">
                            <strong>  </strong>
                          </div>
                        </div>
                      </div>
                      </form>
                      </div>
              </div>
            </div>
        </div>
    </section>


    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class=" footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location.png" alt="">
                                </div>
                                <p><strong>Address: </strong> Dept of Mathematics, CEG <br />Anna University</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/call.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:+919500525112">+919500525112</a> <br />
                                    <a href="callto:+917401688157">+917401688157</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:contact@mathrix.in">contact@mathrix.in</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.381482822085!2d80.23329731477102!3d13.011361690829814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52679f723db9b1%3A0xc21402f114b44a69!2sDepartment+of+Mathematics!5e0!3m2!1sen!2sin!4v1551704390291" width="800" height="400" frameborder="0" style="border:0;width: -webkit-fill-available;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 pull-right">
                    <ul class="social-menu text-right x-left">
                        <li><a href="https://facebook.com/MATHRIXAU"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://instagram.com/mathrix2k19"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>We are sure that MathRix 2k19 will be a great success.</p>
                </div>
                </div>
            </div>
        </div>
    </footer>




    
    <!--Vendor-JS-->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>




  <script type="text/javascript">

        function makeTimer() {
    //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
        var endTime = new Date("18 March 2019 09:00:00 UTC+05:30");
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;
            if(!(timeLeft < 0)){
                
                var days = Math.floor(timeLeft / 86400);
                var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
                var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
                var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
    
                if (hours < "10") { hours = "0" + hours; }
                if (minutes < "10") { minutes = "0" + minutes; }
                if (seconds < "10") { seconds = "0" + seconds; }
    
                if (days == 0 && hours ==0 && minutes ==0 && seconds ==0) {
                  $("#days").html(days + "<span>Days</span>");
                  $("#hours").html(hours + "<span>Hours</span>");
                  $("#minutes").html(minutes + "<span>Minutes</span>");
                  $("#seconds").html(seconds + "<span>Seconds</span>");
                  stopTimer();
                }
                else{
                  $("#days").html(days + "<span>Days</span>");
                  $("#hours").html(hours + "<span>Hours</span>");
                  $("#minutes").html(minutes + "<span>Minutes</span>");
                  $("#seconds").html(seconds + "<span>Seconds</span>");
                }
            }
            else{
                $("#days").html("0" + "<span>Days</span>");
                $("#hours").html("00" + "<span>Hours</span>");
                $("#minutes").html("00" + "<span>Minutes</span>");
                $("#seconds").html("00" + "<span>Seconds</span>");
                stopTimer();
            }
    }
    
    function stopTimer(){
        clearInterval(timevar);
    }

    var timevar = setInterval(function() { makeTimer(); }, 1000);

  </script>

  <script type="text/javascript">

    var canvas = document.querySelector("#scene"),
      ctx = canvas.getContext("2d"),
      particles = [],
      amount = 0,
      mouse = {x:0,y:0},
      radius = 1;

    var colors = ["#fff"];

    var copy = document.querySelector("#copy");

    var ww = canvas.width = window.innerWidth;
    var wh = canvas.height = window.innerHeight;

    function Particle(x,y){
      this.x =  Math.random()*ww;
      this.y =  Math.random()*wh;
      this.dest = {
        x : x,
        y: y
      };
      this.r =  Math.random()*1.5 + 1;
      this.vx = (Math.random()-0.5)*20;
      this.vy = (Math.random()-0.5)*20;
      this.accX = 0;
      this.accY = 0;
      this.friction = Math.random()*0.05 + 0.94;

      this.color = colors[Math.floor(Math.random()*6)];
    }

    Particle.prototype.render = function() {


      this.accX = (this.dest.x - this.x)/1000;
      this.accY = (this.dest.y - this.y)/1000;
      this.vx += this.accX;
      this.vy += this.accY;
      this.vx *= this.friction;
      this.vy *= this.friction;

      this.x += this.vx;
      this.y +=  this.vy;

      ctx.fillStyle = this.color;
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.r, Math.PI * 2, false);
      ctx.fill();

      var a = this.x - mouse.x;
      var b = this.y - mouse.y;

      var distance = Math.sqrt( a*a + b*b );
      if(distance<(radius*70)){
        this.accX = (this.x - mouse.x)/100;
        this.accY = (this.y - mouse.y)/100;
        this.vx += this.accX;
        this.vy += this.accY;
      }

    }

    function onMouseMove(e){
      mouse.x = e.clientX;
      mouse.y = e.clientY;
    }

    function onTouchMove(e){
      if(e.touches.length > 0 ){
        mouse.x = e.touches[0].clientX;
        mouse.y = e.touches[0].clientY;
      }
    }

  function onTouchEnd(e){
    mouse.x = -9999;
    mouse.y = -9999;
  }

    function initScene(){
      ww = canvas.width = window.innerWidth;
      wh = canvas.height = window.innerHeight;

      ctx.clearRect(0, 0, canvas.width, canvas.height);

      ctx.font = "bold "+(ww/7)+"px sans-serif";
      ctx.textAlign = "center";
      ctx.fillText(copy.value, ww/2, wh/2);

      var data  = ctx.getImageData(0, 0, ww, wh).data;
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.globalCompositeOperation = "screen";
      if (screen && screen.width < 650) {
        var cnt= "200";
      }else if (screen  && screen.width > 650 && screen.width < 900) {
        var cnt= "280";
      }else{
        var cnt= "350";
      }
      particles = [];
      for(var i=0;i<ww;i+=Math.round(ww/cnt)){
        for(var j=0;j<wh;j+=Math.round(ww/cnt)){
          if(data[ ((i + j*ww)*4) + 3] > 200){
            particles.push(new Particle(i,j));
          }
        }
      }
      amount = particles.length;

    }

    function onMouseClick(){
      radius++;
      if(radius ===5){
        radius = 0;
      }
    }

    function render(a) {
      requestAnimationFrame(render);
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      for (var i = 0; i < amount; i++) {
        particles[i].render();
      }
    };

    copy.addEventListener("keyup", initScene);
    window.addEventListener("resize", initScene);
    window.addEventListener("mousemove", onMouseMove);
    window.addEventListener("touchmove", onTouchMove);
    window.addEventListener("click", onMouseClick);
    window.addEventListener("touchend", onTouchEnd);
    initScene();
    requestAnimationFrame(render);


  </script>

  <script type="text/javascript">
                $(document).ready(function () {
        var btn = document.querySelector( '.bttn' );

        var btnFront = btn.querySelector( '.btn-front' ),
          btnYes = btn.querySelector( '.btn-back .yes' ),
          btnNo = btn.querySelector( '.btn-back .no' );

        if(btnFront) {
          btnFront.addEventListener( 'click', function( event ) {
          var mx = event.clientX - btn.offsetLeft,
            my = event.clientY - btn.offsetTop;

          var w = btn.offsetWidth,
            h = btn.offsetHeight;

          var directions = [
            { id: 'top', x: w/2, y: 0 },
            { id: 'right', x: w, y: h/2 },
            { id: 'bottom', x: w/2, y: h },
            { id: 'left', x: 0, y: h/2 }
          ];

          directions.sort( function( a, b ) {
            return distance( mx, my, a.x, a.y ) - distance( mx, my, b.x, b.y );
          } );

          btn.setAttribute( 'data-direction', directions.shift().id );
          btn.classList.add( 'is-open' );
        } );
    }
        if(btnYes) {
        btnYes.addEventListener( 'click', function( event ) {
          btn.classList.remove( 'is-open' );
        } );
        }

        if(btnNo) {
        btnNo.addEventListener( 'click', function( event ) {
          btn.classList.remove( 'is-open' );
        } );
        }

        function distance( x1, y1, x2, y2 ) {
          var dx = x1-x2;
          var dy = y1-y2;
          return Math.sqrt( dx*dx + dy*dy );
        }

        });
  </script>

<script type="text/javascript">
  $(function() {
    var formAnimatedInput = $('.form-animate-fields .form-input');

    formAnimatedInput.each(function() {
      var $this = $(this);

      $this.on('focus', function() {
        $this.addClass('is-filled');
      });

      $this.on('blur', function() {
        if($this.val().length == 0) {
          $this.removeClass('is-filled');
        }
      });
    });
  });

  function send_request()
    {
      var name = document.getElementById("username").value
      var college_id = document.getElementById('college_reg_id').value
      var college_name = document.getElementById('college_name').value
      var course = document.getElementById('course_name').value
      var year = document.getElementById('year-dropdown').value

      $("#popup-register-btn").prop("disabled", true);
        $("#popup-register-btn").val("Please wait...");

      if ($('input[name=gender-radio]:checked'))
      {
        var gender = true
      }
      else
      {
        var gender = false
      }
      var email = document.getElementById('email').value
      var mobile = document.getElementById('mobile-no').value

      var url = 'https://mathrix19.herokuapp.com/api/v1/users.json';
      var data = {name: name, college_name: college_name, roll_no: college_id, email: email, mobile: mobile, course: course, year: year, gender: gender};
      jQuery.ajax({
            url: url,
            type: 'POST',
            data: data,
            dataType: "json",
            beforeSend: function(x) {
              if (x && x.overrideMimeType) {
                x.overrideMimeType("application/j-son;charset=UTF-8");
              }
            },
            success: function(result) {
                $("#popup-register-btn").val("Register");
              if (result["is_already_reg"] == true) {
                document.getElementsByClassName('alert-message')[0].style.display = "block";
  					         $('.alert-message strong').empty();
                     $('.alert-message strong').append(result["message"])
                     $('.alert-message').delay(9000).fadeOut('slow');
                     $("#popup-register-btn").prop("disabled", false);
              }
              if (result["is_reg"] == true) {
                document.getElementsByClassName('alert-message')[0].style.display = "block";
                    document.getElementById("myform").reset();
                    document.getElementsByClassName('notice-danger')[0].style.borderColor = "#459046";
                    document.getElementsByTagName('strong')[0].style.color = "#459046";
                     $('.alert-message strong').empty();
                     $('.alert-message strong').append("You Successfully registered for Mathrix'19 ID")
                     $('.alert-message').delay(9000).fadeOut('slow');
              }
            }
      });

    }


// Section form script
function section_form_request()
  {
    var name = document.getElementById("section-name").value
    var college_id = document.getElementById('section-col-reg-no').value
    var college_name = document.getElementById('section-col-name').value
    var course = document.getElementById('section-course').value
    var year = document.getElementById('section-year').value

    $("#section-register-btn").prop("disabled", true);
    $("#section-register-btn").val("Please wait...");

    if ($('input[name=section-radio]:checked'))
    {
      var gender = true
    }
    else
    {
      var gender = false
    }
    var email = document.getElementById('section-email').value
    var mobile = document.getElementById('section-mob-no').value

    var url = 'https://mathrix19.herokuapp.com/api/v1/users.json';
    var data = {name: name, college_name: college_name, roll_no: college_id, email: email, mobile: mobile, course: course, year: year, gender: gender};
    jQuery.ajax({
          url: url,
          type: 'POST',
          data: data,
          dataType: "json",
          beforeSend: function(x) {
            if (x && x.overrideMimeType) {
              x.overrideMimeType("application/j-son;charset=UTF-8");
            }
          },
          success: function(result) {
             $("#section-register-btn").val("Register");
            if (result["is_already_reg"] == true) {
              document.getElementsByClassName('section-alert-message')[0].style.display = "block";
                   $('.section-alert-message strong').empty();
                   $('.section-alert-message strong').append(result["message"])
                   $('.section-alert-message').delay(9000).fadeOut('slow');
                   $("#section-register-btn").prop("disabled", false);

            }
            if (result["is_reg"] == true) {
              document.getElementsByClassName('section-alert-message')[0].style.display = "block";
                  document.getElementById("section-myform").reset();
                  document.getElementsByClassName('notice-danger')[1].style.borderColor = "#459046";
                  document.getElementsByTagName('strong')[4].style.color = "#459046";
                   $('.section-alert-message strong').empty();
                   $('.section-alert-message strong').append("You Successfully registered for Mathrix'19 ID")
                   $('.section-alert-message').delay(9000).fadeOut('slow');
            }
          }
    });

  }


function payment_gateway(online){
  var m_id = document.getElementById("mathrix-id").value;
  var url = 'https://mathrix19.herokuapp.com/api/v1/workshops/pay?m_id='+m_id+'&online='+online;
  // var data = {name: name, college_name: college_name, roll_no: college_id, email: email, mobile: mobile, course: course, year: year, gender: gender};
  if(online == "yes"){
      $(".workshop-pay").prop("disabled",true);
      $("#pay-online").val("Please wait...");
  }
  else{
      $(".workshop-pay").prop("disabled",true);
      $("#pay-cash").val("Please wait...");
  }
  jQuery.ajax({
        url: url,
        type: 'GET',
        // data: data,
        dataType: "json",
        beforeSend: function(x) {
          if (x && x.overrideMimeType) {
            x.overrideMimeType("application/j-son;charset=UTF-8");
          }
        },
        success: function(result) {
          // var $result1 = result

          if (result["online"]==true) {
            $("#pay-online").val("Pay Online");

          if (result["status"] == false) {
            document.getElementById('pay-error-alert').style.display = "block";
            // $('#paid-alert').empty()
            $('#pay-error-alert').empty();
            $('#pay-error-alert').append(result["message"]);
            $('#pay-error-alert').delay(9000).fadeOut('slow');
          }
          else{
          if (result["is_paid"] == true) {
            document.getElementById('pay-error-alert').style.display = "block";
            // $('#paid-alert').empty()
            $('#pay-error-alert').empty()
            $('#pay-error-alert').append(result["message"])
            $('#pay-error-alert').delay(9000).fadeOut('slow');
          }
          else{
            $('#check-pay').attr('href',result["long_url"])
            jQuery('#check-pay')[0].click();
          }
          }
        }
        else{
            $(".workshop-pay").prop("disabled",false);
            $("#pay-cash").val("Pay Onspot");
          if (result["status"] == false) {
            document.getElementById('pay-error-alert').style.display = "block";
            // $('#paid-alert').empty()
            $('#pay-error-alert').empty()
            $('#pay-error-alert').append(result["message"])
            $('#pay-error-alert').delay(9000).fadeOut('slow');
          }
          else{
            document.getElementById('pay-error-alert').style.display = "block";
            // $('#paid-alert').empty()
            $('#pay-error-alert').empty()
            $('#pay-error-alert').append("Workshop registered on cash mode.")
            $('#pay-error-alert').delay(9000).fadeOut('slow');
          }
        }
      }
    });
}

$( document ).ready(function() {

$(".redo").click(function(){
  $(".payment_modal")[0].style.display = "none";
});

var url_name = document.location.href
var key_word = new URL(url_name)
var status = key_word.searchParams.get("payment_status")
if (status == "Credit") {
  $(".payment_modal")[0].style.display = "block";
  $(".success").view();
  $(".error").hide();
}
else if (status == "Failed") {
  $(".payment_modal")[0].style.display = "block";
  $(".success").hide();
  $(".error").show();
}
});

</script>



</body>

</html>
