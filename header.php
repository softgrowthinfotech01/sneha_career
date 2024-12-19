<?php  
$path= $_SERVER['REQUEST_URI'];
$path=explode('/',$path);
$path=end($path);

?>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="home.php" class="logo">
                        
                        
                        <h2 class="text-white text-normal"><img src="assets/images/sneha-logo-2.png" style="width:50px;" alt="image-logo" class=" d-inline">Sneha career</h2>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a <?php if($path == 'home') {echo "class='active'";} ?> href="home.php">Home</a></li>
                      <li class="scroll-to-section"><a <?php if($path=='about') {echo "class='active'";} ?> href="#services">About</a></li>
                      <li class="scroll-to-section"><a href="#courses">FAQ</a></li>
                      <li class="scroll-to-section"><a <?php if($path=='contact'){echo "class='active'";} ?> href="contact.php">Contact Us</a></li>
                      <li class="scroll-to-section"><a href="#events">Jobs</a></li>
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
