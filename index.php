<?php include 'header.php';


include ("connection.php");
include_once ("functions.php");


?>

<div class="">

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2>Welcome to XTATE House and Property Listing</a></h2>
              <blockquote>              
             
             
              
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2>This Website provide the users to Buy or Sell various Property from around Batam and Tanjungpinang</a></h2>
              <blockquote>              
              
              
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2>Get your discount once every month on this Website </h2>
              <blockquote>              
              
              
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2>Customer Service available for 24/7  </h2>
              <blockquote>              
              
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2>This Website is User-Friendly! </h2>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <?php
    if(!isset($_SESSION['userid']))
    { ?>
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-8 col-sm-6" style="padding:0px 55px">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"  onclick="window.location.href='login.php'"  data-toggle="modal" >Login</button>        
        </div> 
        <div class ="col-lg-4  col-sm-6 ">
          <p>Or Register now to create your Account.</p>
          <button class="btn btn-info"  onclick="window.location.href='register.php'" data-toggle="modal" >Register</button> </a>      
        </div>      
         </div>
      </div>
      <?php } else { ?>
        <div style="height:5vh">
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a class="pull-right viewall"></a>
    
    <div id="owl-example" class="owl-carousel">
     

    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2.2 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p style="font-size:16px;">In this digital era, everything is possible. XTATE started with the mission of ensuring every people in the community is accessible to explore the marvelous world of property. Through out the years, property huntings are being done in the traditional way, which is searching, contacting, and visiting. With XTATE, these steps can be easily done just by few simple clicks on our platform.<br><a href="about.php">Learn More</a></p>
        

          
   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>