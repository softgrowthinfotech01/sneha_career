<?php  
require_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Sneha Career </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="assets/css/templatemo-scholar.php">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->


  <style>
    .main-banner .item-1 {
  background-image: url(assets/images/job/job.jpg) !important ;
  box-shadow: 5px 4px 8px 3px #fff;
}
.header-area
{
  background-color:var(--main) !important;
}
.main-banner
{
  background-color:white !important;
}
    .form-popup-bg {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: flex;
      flex-direction: column;
      align-content: center;
      justify-content: center;
    }

    .form-popup-bg {
      position: fixed;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(94, 110, 141, 0.9);
      opacity: 0;
      visibility: hidden;
      -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
      -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
      transition: opacity 0.3s 0s, visibility 0s 0.3s;
      overflow-y: auto;
      z-index: 10000;
    }

    .form-popup-bg.is-visible {
      opacity: 1;
      visibility: visible;
      -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
      -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
      transition: opacity 0.3s 0s, visibility 0s 0s;
    }

    .form-container {
      background-color: rgb(255, 255, 255);
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
      display: flex;
      flex-direction: column;
      width: 100%;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      position: relative;
      padding: 40px;
      color: #fff;
    }

    .close-button {
      background: none;
      color: #000;
      width: 40px;
      height: 40px;
      position: absolute;
      top: 0;
      right: 0;
      border: solid 1px #fff;
      border-radius:25%;
    }

    .form-popup-bg:before {
      content: '';
      background-color: #fff;
      opacity: .25;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    @font-face {

font-family: 'unna'; /* Choose a name for your font */

src: url('assets/Unna/Unna-regular.ttf') format('ttf'); /* Path to your font file */

font-weight: normal; /* Optional: Set font weight if needed */

font-style: normal; /* Optional: Set font style if needed */ 

}

body {

font-family: 'unna'; /* Use the new font family, with a fallback if not supported */

}
  </style>


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <?php require_once 'header.php'; ?>

  <div class="main-banner pb-0" style="border-radius:0 0 200px 0;" id="top">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item pt-2 m-0" style="border-radius:25px 25px 250px 25px;">
              <div class="row">
                <div class="col-md-6">
                  <div class="header-text">
                    <span class="category" id="jobs1">Job Openings</span>
                    <h2 class="w-100">Connecting Talent with Opportunity</h2>

                    <div class="buttons">
                      <div class="main-button w-100 text-center mx-5">
                        <a href="#" class="d-block"><i class="fa fa-search"></i> Search for Job Openings !!</a>
                      </div>
                      <!-- <div class="icon-button">
                        <a href="#"><i class="fa fa-search"></i>Search for Job Openings !!</a>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6 item item-1 m-0 "></div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Where shall we begin?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor
                  incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do we work together?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor
                  incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why SCHOLAR is the best?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  There are more than one hundred responsive HTML templates to choose from <strong>Template</strong>Mo
                  website. You can browse by different tags or categories.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do we get the best support?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  You can also search on Google with specific keywords such as
                  <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, etc.</code>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>What make us the best academy online?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Quis ipsum suspendisse ultrices gravid risus commodo.</p>
            <div class="main-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="section courses" id="courses">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Latest Job Openings</h6>
            <h2>Latest Job Openings</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Webdesign</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Development</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Wordpress</a>
        </li>
      </ul>
      <div class="row event_box">
      <?php
            $stmt_job = $conn->prepare("SELECT * FROM job  ORDER BY job_id ASC");
            $stmt_job->execute();
            $row_job= $stmt_job-> fetchAll(PDO::FETCH_ASSOC);
            for($i=0;$i<count($row_job);$i++)
            {
            ?>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item job-opening-box">
            <div class="thumb  ps-3 pe-2 pt-3 h6">
              <h5 class="mb-1 fw-semibold"><span> <?php echo $row_job[$i]['job_title'];?></span></h5>
              <div class="mb-1 ">
                <span class="h6  text-secondary text-small me-2">Work Type : <small
                    class="p-0 px-1  alert rounded-3 alert-primary me-2"><i class="fa-solid fa-house fa-xs"></i> 
                      <?php 
                            if($row_job[$i]['work_type']=='1')
                            {
                                echo "Full Time";
                            }
                            elseif($row_job[$i]['work_type']=='2')
                            {
                                echo "Part Time";
                            }
                            elseif($row_job[$i]['work_type']=='3')
                            {
                                echo "Work From Home";
                            }
                            ?>
                            </small>
                </span><span class="h6  text-secondary text-small me-2">Status : <small
                    class="p-0 px-1  alert rounded-3 alert-primary me-2">
                    <?php 
                            if($row_job[$i]['job_status']=='1')
                            {
                                echo "Available";
                            }
                            else
                            {
                                echo "Closed";
                            }
                            ?>
                            </small></span>
              </div>
            </div>
            <hr class="m-1">
            <div class="down-content pt-2 lh-md">
              <div class="author overflow-hidden" style="height:50px;"><u>Basic Requirement</u> : <span><?php echo $row_job[$i]['job_description'];?></span></div>
              <div class="author mb-3"><u>Salary</u> : <span><?php echo $row_job[$i]['salary'];?></span></div>
              <small class="my-3" id="btnOpenForm"><a href="" style="background:var(--main2);"
                  class="text-light rounded-4 py-1 px-3"><i class="fa-solid fa-circle-info fa-xs"></i> Task Details</a>
              </small>
            </div>
          </div>
        </div>
        <?php 
        }
         ?>
        <!--  -->
        <div class="form-popup-bg">
          <div class="form-container">
            <button id="btnCloseForm" class="close-button">X</button>
            <h3>Contact Us</h3>
            <hr class="text-dark">
            <div class="bg-light p-3 rounded-3">
              <div>
                <strong class="text-dark"><u>Basic Requirement</u> : </strong><span class="text-dark">18+ Age, Computer
                  knowledge, Laptop with Good Internet Connectivity & Good Communication...</span>

              </div>
              <div class="mb-1"><span class="text-secondary text-small">Work Type : <span
                    class=" text-dark p-0 px-2 alert rounded-3 alert-primary">Work From Home</span> </span><span
                  class="text-secondary text-small">Status : <span
                    class=" text-dark p-0 px-2 alert rounded-3 alert-primary">Available</span></span></div>


              <hr class="text-dark">

              <div>
                <strong class="text-dark"><u>Scope of Work</u> : </strong><span class="text-dark"> Agents will be shared the
                  input files of the data details from which they have to copy and paste the data in the appropriate
                  field
                  in Flipkart product details link shared. It is a simple copy & paste work. Agent will be provided with
                  7
                  days training directly by the company & then the agent can go live.</span>
                <hr class="text-dark">
                <strong class="text-dark"><u>Salary</u> : </strong><span class="text-dark">150000$</span>
              </div>
            </div>
            <div class="p-5 text-center">
              <span class="text-danger">** Kindly read the complete details of the Tasks & eligibility criteria before
                clicking ‘Apply’.</span>

            </div>

            <div class=" text-center">
              <button class="rounded-3 p-2 text-white" style="background-color:var(--main2);"><i
                  class="fa-solid fa-paper-plane"></i> Quick Apply</button>
            </div>
          </div>
        </div>


        <!--  -->
       
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                  <p class="count-text ">Happy Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                  <p class="count-text ">Course Hours</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                  <p class="count-text ">Employed Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Years Experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>Thank you for choosing our templates. We provide you best CSS templates at absolutely 100% free of
              charge. You may support us by sharing our website to your friends.</p>
            <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..."
                      required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once 'footer.php'; ?>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>


  <script>
    function closeForm() {
      $('.form-popup-bg').removeClass('is-visible');
    }

    $(document).ready(function ($) {

      /* Contact Form Interactions */
      $('#btnOpenForm').on('click', function (event) {
        event.preventDefault();

        $('.form-popup-bg').addClass('is-visible');
      });

      //close popup when clicking x or off popup
      $('.form-popup-bg').on('click', function (event) {
        if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
          event.preventDefault();
          $(this).removeClass('is-visible');
        }
      });



    });

  </script>

</body>

</html>