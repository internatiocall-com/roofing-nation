<?php include 'inc/head.php';?>
<body>
<?php include 'inc/header.php'; ?> 
  
  <main id="main" class="products">    

    <!-- ======= Contact Section ======= -->
    
    <section id="contact" class="contact" style="background-color:#fff;">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 mt-4">

          <div class="col-lg-6">
          <h3>Reach out to us</h3>         
            <p>
            We are here to provide you with quality roofing products and services to meet all of your roofing needs. Our team of experienced and knowledgeable professionals are here to help you get the job done right the first time. If you have any questions or would like to talk to us about our products and services, please feel free to contact us. You can reach us by phone at (800) 959-1799, or by filling out our contact form. Will contact you right away.
           </p>
          <h4>Contact us:</h4>

          <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <p><a href="tel:+18009591799">Call Us: (800) 959-1799</a></p>
              </div>
            </div><!-- End Info Item -->
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <p>10830 NW 138th St #1, Hialeah Gardens, FL 33018<br>
(Monday - Sunday)</p>
              </div>
            </div><!-- End Info Item -->      
          </div>

          <div class="col-lg-6">

     
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

          <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14062.540428395134!2d-82.25381!3d28.2183968!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2b3def8fb134d%3A0xf86a48a9b01f2d9d!2sRoof%20Nation%2C%20Inc!5e0!3m2!1ses-419!2sve!4v1679436966981!5m2!1ses-419!2sve" width="90%" height="497px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php include 'inc/footer.php';?>
</body>
</html>