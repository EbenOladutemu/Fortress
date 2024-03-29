  
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">We are training, equipping and mobilising men to discover, develop and deploy their graces to fulfil God’s agenda for their lives. We are committed to the teaching and practice of God’s present truth in its progressive state. Our ultimate dream is to make ready a people prepared for the Lord.<br>

          
          </p>
          <p><a href="#" class="btn btn-primary px-4 py-3">Join The Workforce</a></p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Elixir of Life</h3>
          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <a href=""><img src="img/Random/20190609114434__MG_9583.jpg" alt="" class="img-fluid"></a>
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">God's Love</a></h3>
              <div class="meta">
                <div><span class="icon-calendar"></span> Today. 
                  <?php date_default_timezone_set("Africa/Lagos"); echo date('l, M jS Y'); ?>
                </div>
                <!-- <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <a href=""><img src="img/Pst-Jumoke/20180805114949_IMG_7457.jpg" alt="" class="img-fluid"></a>
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Patience</a></h3>
              <div class="meta">
                <div><span class="icon-calendar"></span> 
                  <?php date_default_timezone_set("Africa/Lagos"); echo date('l, M jS Y', strtotime("-1 day")); ?>
                </div>
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <a href=""><img src="img/Pst-Desmond/IMG_20190522_191301.jpg" alt="" class="img-fluid"></a>
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Self-Control</a></h3>
              <div class="meta">
                <div><span class="icon-calendar"></span> 
                  <?php date_default_timezone_set("Africa/Lagos"); echo date('l, M jS Y', strtotime("-2 days")); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span>
                  <span class="text">51, Ikorodu Road, Beside Iyare Motors, By Total Filling Station Fadeyi, Lagos, Nigeria
                  </span>
                </li>
                <li>
                  <a href="tel:"><span class="icon icon-phone"></span>
                    <span class="text"></span>
                  </a>
                </li>
                <li>
                  <a href="mailto:enquiries@thefortresschurch.com"><span class="icon icon-envelope"></span>
                    <span class="text">enquiries@thefortresschurch.com</span>
                  </a>
                </li>
                <li><i class="icon icon-clock-o"></i>
                  <span class="text">Sundays: 9am – 11:30am<br>Wednesdays: 6pm – 7:30pm</span>
                </li>
                <li style="display: inline-flex;">
                  <a href=""><i class="fab fa-facebook-f fa-2x ml-5"></i></a>
                  <a href=""><i class="fab fa-twitter fa-2x ml-4"></i></a>
                  <a href=""><i class="fab fa-instagram fa-2x ml-4"></i></a>
                </li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p>
            The Fortress Int'l Church &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved. | Developed with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://eben.com.ng" target="_blank" class="text-primary" title="Ebenezer Oladutemu">Eben</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#6cbd4e"/>
    </svg>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNyzBbwa4Rf3rdTkihYMSxLePJDePGo_c&callback=initMap"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

  <script src="js/vuescripts.js"></script>
  <script type="text/javascript">
    var owl = $('.owl-theme');
      owl.owlCarousel({
      loop:true,
      items:1,
      autoplay:true,
      animateOut: 'fadeOut',
      autoplayTimeout:10000
      });
  </script>

  <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 6.616865, lng: 3.508072},
          zoom: 8
        });
        var marker = new google.maps.Marker({
          position: {lat: 6.616865, lng: 3.508072},
          map: map,
          title: 'Hello World!'
        });  
      }
    </script>
    
  </body>
</html>