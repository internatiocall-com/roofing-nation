<?php include 'inc/head.php';?>
<body>
<?php include 'inc/header.php'; ?>


  
  <main id="main" class ="home">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style ="pointer-events: none;">
       <style>
          .video-background iframe,
            .video-background object,
            .video-background embed {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 125%;
              z-index:0;
              object-fit: cover;
            }
         </style>
         
<div class="video-background" style=" pointer-events: none; overflow: hidden;object-fit: cover;">
  <div class="video-foreground" style="object-fit: cover;">  
     <div id="ytplayer"></div>


<script>

  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
	//Parametros del video
	 playerVars: { 'playlist':'EpwHM3x_atc' ,'controls':0 ,'autoplay':1,'mute':1, 'loop':1, 'showinfo': 0,'rel':0},
      height: '100%',
      width: '100%',
	  //Id del video
	   origin: 'https://dev.roofing-nation.com/' ,
      videoId: 'EpwHM3x_atc',
	  events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
	  }
    });
  }
  
      
function onPlayerReady(event) {
    event.target.setPlaybackQuality('hd720');
        event.target.playVideo();

}

  var done = false;

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
      setTimeout(stopVideo, 6000000);
      done = true;
    }
    if (event.data == YT.PlayerState.BUFFERING) {
       event.target.setPlaybackQuality('hd720');
    }
}

 function stopVideo() {
    player.stopVideo();
  }
</script>
    <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/EpwHM3x_atc?playlist=EpwHM3x_atc&controls=0&autoplay=1&mute=1&loop=1&showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
  </div>
</div>


 
  </section>
<!--   End Hero Section  -->
     <!-- ======= Call To Action Section ======= -->
     <section id="call-to-action2" class="call-to-action2">
      <div class="container" data-aos="zoom-out">
      <div class="number-container">
        <div class="row justify-content-center">
            <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3 text-left">
            <h3>+726,120</h3>
            <p>Square feet of commercial roof covered</p>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-2 text-left">
            <h3>+1,284,202</h3>
            <p>Square feet of residential roof covered</p>
          </div>
            <div class=" col-xs-12 col-sm-12 col-md-1 col-lg-1 text-left">
            <h3>+22</h3>
            <p>years of experience</p>
          </div>
            <div class=" col-xs-12 col-sm-12 col-md-2 col-lg-2 text-left">
            <h3>20 - 50</h3>
            <p>years of warranty</p>
          </div>
        </div>
        </div>
       <hr>
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Wholesale Roofing Products & Services | Quality Guaranteed</h3>
            <p> At Roofing Nation LLC, we provide quality roofing products and services in wholesale form for roofing suppliers across the nation. Our commitment to excellence ensures that our customers are always satisfied with the products and services we provide. Learn more about our roofing products by calling our sales manager at <b>(800) 959-1799</b>.</p>
          </div>
        </div>

      </div>
    </section>
 <!-- End Call To Action Section -->  
 <section class="product-grid text-center">
    <div class="container">
      <div class="items-container">
      <div class="items">
            <div class="photo"><img src="./assets/img/product_01.png"/></div>
            <div class="title"><span>Roofing Tin Caps</span></div>
           
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/roofing-tin-caps" class="btn btn-primary">MORE<br>
    INFO <i class="bi bi-arrow-right"></i></a>

          </div>
          <div class="items">
            <div class="photo"><img src="./assets/img/product_02.png"/></div>
            <div class="title"><span>1-1/4” Electrogalvanized Ring Shank Coil Nails</span></div>
         
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/1-1-4-electrogalvanized-ring-shank-coil-nails" class="btn btn-primary">MORE<br>
    INFO <i class="bi bi-arrow-right"></i></a>

          </div>
          <div class="items">
            <div class="photo"><img src="./assets/img/product_03.png"/></div>
            <div class="title"><span>2-1/2” Electrogalvanized Ring Shank Coil Nails</span></div>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/2-1-2-electrogalvanized-ring-shank-coil-nails" class="btn btn-primary">MORE<br>
    INFO<i class="bi bi-arrow-right"></i></a>

          </div>
          <div class="items">
            <div class="photo"><img src="./assets/img/product_04.png"/></div>
            <div class="title"><span>Heavy-Duty Roofing Tarp</span></div>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/heavy-duty-roofing-tarp" class="btn btn-primary">MORE<br>
    INFO<i class="bi bi-arrow-right"></i></a>
          </div>   

      </div>
          
    </div>
  </section>

  

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="">

        <div class="features-item " data-aos="fade-up">
              <div class="container">
                  <div class="row gy-4 align-items-center" data-aos="fade-up">
                        <div class="col-md-6">
                          <img src="assets/img/banner-3.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                          <h3>Trustworthy Commercial Roof Installation and Manufacturing</h3>
                          <p >
                          At Roofing Nation LLC, we provide top-notch roofing services for both residential and commercial properties. We use the latest technologies, materials, and techniques to ensure that your roof is strong, durable, and long-lasting. No matter the size or complexity of the job, we are confident that we can provide you with the best roofing services available.
                          </p>    
                          <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/contact" class="btn btn-primary">Want more information <i class="bi bi-arrow-right"></i></a>
 
                        </div>
                  </div>        
              </div>   
        </div>
        
        <!-- Features Item -->

        <div class="features-item feature-one" data-aos="fade-up">
          <div class="container">
            <div class="row gy-4 align-items-center" data-aos="fade-up">        
                <div class="col-md-6 order-1 order-md-2">
                  <img src="assets/img/banner-ritgh.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 order-2 order-md-1 text-right" style="text-align: right;">
                  <h3>Professional Roofing <br> Contractors Near You</h3>
                  <p>
                  At Roofing Nation LLC, we provide superior roofing services with commitment to quality and customer satisfaction. Our certified professionals handle any roofing project and are available for questions. Our in-house manufactured products are licensed in Florida, and our experienced team has completed millions of sq. ft. of residential and commercial projects. We specialize in Flat, Shingle, Tile, Metal, and Galvanized Roofing Systems, committed to delivering quality services and products.
                  </p>
                </div>
            </div>
          </div>
        </div><!-- Features Item -->

        <div class="features-item feature-two" data-aos="fade-up">

        <div class="container">
            <div class="row gy-4 align-items-center" data-aos="fade-up">   

          <div class="col-md-6">
            <img src="assets/img/banner-left.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-6">
            <h3>Are you looking for a reliable Commercial Roofing Contractor in Hialeah Gardens?</h3>
            <p>Look no further than Roofing Nation LLC! Our experienced superintendents are committed to providing you with a quality installation from start to finish. From preventive repair to complete roof replacement, we guarantee a detail-oriented job and state-of-the-art roof system. Let us work with you to understand your financial goals and the specific needs of your structure, so you can have peace of mind that your roof is in the right hands.</p>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/contact" class="btn btn-primary">Want more information <i class="bi bi-arrow-right"></i></a>
          </div>
          </div>
          </div>
        </div><!-- Features Item -->
 
      </div>
    </section><!-- End Features Section -->



    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action-container">
      
     <div class="container call-to-action" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Roofing Comercial Experts your smart contract.</h3>
            <p> Roofing Nation LLC operates as a licensed and insured commercial roofing contractor throughout the State of Florida.</p>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/contact" class="btn btn-primary">Contact us <i class="bi bi-arrow-right"></i></a>

          </div>
        </div>
      </div>
    </section>
    <!-- End Call To Action Section -->


     <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="testimonials">
      <div class="container text-center">
      <h2>Client’s review for work satisfaction</h2>

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
              <h3>Saul Goodman</h3>
              <img src="./assets/img/google2.png" class="testimonial-img" alt="">
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
              <h3>Saul Goodman</h3>
              <img src="./assets/img/google2.png" class="testimonial-img" alt="">
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
              <h3>Saul Goodman</h3>
                <img src="./assets/img/google2.png" class="testimonial-img" alt="">
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
<section class="brands">

 <div class="container">
  <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-6  col-lg-6">
    <h3>Approved by</h3>
    <div class="items-container">
        <div class="img-items"><img src="./assets/img/Logo-home-depot-color.png" /></div>
        <div class="img-items"><img src="./assets/img/Logo-miami-dade-color.png" /></div>
        <div class="img-items"><img src="./assets/img/logo-broward-county-color.png" /></div>
        <div class="img-items"><img src="./assets/img/logo-palm-beach-county-color.png" /></div>
    </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6  col-lg-6">
   <h3>We are in</h3>
    <div class="items-container">
        <div class="img-items"> <img src="./assets/img/Amazon-logo-color.png" /> </div>
        <div class="img-items"> <img src="./assets/img/Ebay-logo-color.png" /></div>
        <div class="img-items"><img src="./assets/img/Logo-home-depot-color.png" /></div>
    </div>

   </div>
  </div>
 </div>
</section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">


        <div class="row gy-4 mt-4">

          <div class="col-lg-6">
          <h4>Contact us:</h4>

          <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <p><a href="tel:+18009591799">Call Us: (800) 959-1799</a></p>
              </div>
            </div><!-- End Info Item -->


            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14062.540428395134!2d-82.25381!3d28.2183968!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2b3def8fb134d%3A0xf86a48a9b01f2d9d!2sRoof%20Nation%2C%20Inc!5e0!3m2!1ses-419!2sve!4v1679436966981!5m2!1ses-419!2sve" width="474px" height="318px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <p>10830 NW 138th St #1, Hialeah Gardens, FL 33018<br>
(Monday - Sunday)</p>
              </div>
            </div><!-- End Info Item -->

         

          
          </div>

          <div class="col-lg-6">

          <h3>Reach out to us</h3>
          <p>Fill out our form<br>
Consult any of our services free of charge.
</p>
            <form action="emails.php" method="post" role="form" class="php-email-form">
             
               <div class="form-group mt-3">
                  <label>Name </label> 
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your first and last name" required>
                </div>                  
               <div class="form-group mt-3">
                <label>Email </label> 
                  <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>                   
                <div class="form-group mt-3">
                  <label>Phone </label> 
                  <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                </div>
              <div class="form-group mt-3"> 
                <label>Service </label> 
                  <select class="form-control" name="service" id="service" required> 
                      <option value="Roof Repair">Roof Repair</option> 
                      <option value="Roof Replacement">Roof Replacement</option> 
                      <option value="Roof inspections" >Roof inspections</option> 
                      <option value="Roof tune-up">Roof tune-up</option> 
                  </select> 
              </div>
              <div class="form-group mt-3">
              <label>Message</label> 
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>         
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php include 'inc/footer.php';?>
</body>
</html>