<?php  
$path= $_SERVER['REQUEST_URI'];

$path=explode('/',$path);
$path=end($path);
// echo print_r($path);

?>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                   
                   
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input w-75">
                      <!-- <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form> -->
                      <a href="home.php" class="logo">
                        
                        
                        <h2 class="text-white text-normal"><img src="assets/images/sneha-logo-2.png" style="width:50px;" alt="image-logo" class=" d-inline">Sneha <br> <h6 class="h-6 text-white">career Development</h6></h2>
                    </a>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a <?php if($path == 'home.php') {echo "class='active'";} ?> href="home.php">Home</a></li>
                      <li class="scroll-to-section"><a <?php if($path=='about.php') {echo "class='active'";} ?> href="#services">About</a></li>
                      <li class="scroll-to-section"><a href="#courses">FAQ</a></li>
                      <li class="scroll-to-section"><a href="#events">Job Openings</a></li>
                      <li class="scroll-to-section"><a <?php if($path=='contact.php'){echo "class='active'";} ?> href="contact.php">Contact Us</a></li>
                      <li class="scroll-to-section"><a href="#contact">Register Now!</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
