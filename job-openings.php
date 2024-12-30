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

  <title>Sneha Career Development - Job Openings</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->

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

  <!-- ***** Header Area Start ***** -->
  <?php require_once 'header.php'; ?>
  <!-- ***** Header Area End ***** -->
  <div class="row">
    
        <div class="col-md-2 pe-0 " style="height:; overflow-y:scroll;">
        <section class="section  courses" id="courses" style=" ">
<div class="container-fluid">
          <div class="sidebar">
            <h3>Job Categories</h3>
            <hr>
            <ul class="event_filter">
            <li style="position:relative;">
            <input type="search" name="" id="" placeholder="Search for jobs...">
            <i style="position:absolute; right:3%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></i>
            </li>
        <li>
          <input type="checkbox" name="" id="">
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <input type="checkbox" name="" id="">
          <a href="#!" data-filter=".design">Webdesign</a>
        </li>
        <li>
          <input type="checkbox" name="" id="">
          <a href="#!" data-filter=".development">Development</a>
        </li>
        <li>
          <input type="checkbox" name="" id="">
          <a href="#!" data-filter=".wordpress">Wordpress</a>
        </li>
      </ul>
          </div>
          </div>
          </section>

        </div>

        <div class="col-md-10 " style="height:100vh; overflow-y:scroll;">

  <section class="section courses" id="courses">

    <div class="container-fluid">
      
          <div class="row">
            <div class="col-lg-12 text-center" >
              <div class="section-heading">
                <h6>Latest Job Openings</h6>
                <h2>Jobs For You !!</h2>
              </div>
            </div>
          </div>
         
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
                  <h5 class="mb-1 fw-semibold"><span>
                      <?php echo $row_job[$i]['job_title'];?>
                    </span></h5>
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
                  <div class="author overflow-hidden" style="height:50px;"><b>Basic Requirement</b> : <span>
                      <?php echo $row_job[$i]['job_description'];?>
                    </span></div>
                  <div class="author mb-3"><b>Salary</b> : <span>
                      <?php echo $row_job[$i]['salary'];?>
                    </span></div>
                  <small class="my-3" id="btnOpenForm2"><a
                      href=""
                      data-id="" style="background:var(--main2);"
                      class="text-light rounded-4 py-1 px-3"><i class="fa-solid fa-circle-info fa-xs"></i> Task
                      Details</a>
                  </small>
                </div>
              </div>
            </div>

            <?php
            }
        ?>
          
            <div class="form-popup-bg">
              <div class="form-container">
                <button id="btnCloseForm" class="close-button">X</button>
                <h3 class="popup_head">title</h3>
                <hr class="text-dark">
                <div class="bg-light p-3 rounded-3">
                  <div>
                    <strong class="text-dark"><u>Basic Requirement</u> : </strong><span
                      class="text-dark basic_requirement">18+ Age, Computer
                      knowledge, Laptop with Good Internet Connectivity & Good Communication...</span>

                  </div>
                  <div class="mb-1"><span class="text-secondary text-small work_type">Work Type : <span
                        class=" text-dark p-0 px-2 alert rounded-3 alert-primary">Work From Home</span> </span><span
                      class="text-secondary text-small">Status : <span
                        class=" text-dark p-0 px-2 alert rounded-3 alert-primary available_status">Available</span></span>
                  </div>


                  <hr class="text-dark">

                  <div>
                    <strong class="text-dark"><u>Scope of Work</u> : </strong><span class="text-dark scope_ofwork">
                      Agents will be shared the
                      input files of the data details from which they have to copy and paste the data in the appropriate
                      field
                      in Flipkart product details link shared. It is a simple copy & paste work. Agent will be provided
                      with
                      7
                      days training directly by the company & then the agent can go live.</span>
                    <hr class="text-dark">
                    <strong class="text-dark"><u>Salary</u> : </strong><span class="text-dark job_salary">
                      ₹ 10,000 - ₹ 20,000 per month
                    </span>
                  </div>
                </div>
                <div class="p-5 text-center">
                  <span class="text-danger">** Kindly read the complete details of the Tasks & eligibility criteria
                    before
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
      $('#btnOpenForm2').on('click', function (event) {
        event.preventDefault();

        $('.form-popup-bg').addClass('is-visible');
        let job = $(this).data(id);
        $.ajax({
          type:"post",
          data:{job:job},
          url:"home.php",
          dataType:"text",
          success:function(response){
            $
          }
        })
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