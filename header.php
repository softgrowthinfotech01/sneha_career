<?php  
$path= $_SERVER['REQUEST_URI'];

$path=explode('/',$path);
$path=end($path);
// echo print_r($path);

?>
<style>  @font-face {

font-family: 'unna'; /* Choose a name for your font */

src: url('assets/Unna/Unna-regular.ttf') format('ttf'); /* Path to your font file */

font-weight: normal; /* Optional: Set font weight if needed */

font-style: normal; /* Optional: Set font style if needed */ 

}

body {

font-family: 'unna'; /* Use the new font family, with a fallback if not supported */

}</style>
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
                        
                        
                        <h2 class="text-white text-normal"><img src="assets/images/sneha-logo-2.png" style="width:50px;" alt="image-logo" class=" d-inline">Sneha <br> <h6 class="h-6 text-white">Career Development</h6></h2>
                    </a>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a <?php if($path == 'home') {echo "class='active'";} ?> href="home">Home</a></li>
                      <li class="scroll-to-section"><a <?php if($path=='AboutUs') {echo "class='active'";} ?> href="AboutUs">About</a></li>
                      <li class="scroll-to-section"><a href="#courses">FAQ</a></li>
                      <li class="scroll-to-section"><a href="job-openings">Job Openings</a></li>
                      <li class="scroll-to-section"><a <?php if($path=='contact'){echo "class='active'";} ?> href="contact">Contact Us</a></li>
                      <li class="scroll-to-section"><a href="register">Register Now!</a></li>
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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
  <!-- ***** Header Area End ***** -->
