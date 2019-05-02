<section id="contact" class="contact" >
  <div class="container">
    <div class="col-md-12">
      <h1 class="text-center">İLETİŞİM</h1>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-form">
          <p>Bize mesaj gönderin...</p>
          <form>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <input type="text" class="form-item" placeholder="Adınız soyadınız..." required>
                </div>
                <div class="col-md-12">
                  <input type="Email" class="form-item" placeholder="Mail adresiniz..." required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-item" placeholder="Konu..." required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-item" aria-label="With textarea" placeholder="Mesajınız..." required ></textarea>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <input class="btn btn-success" type="submit" name="" value="Gönder">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">

          <div class="col-md-1">

          </div>
          <div class="col-md-10">
            <div class="contact-box">
              <div class="row">
                <div class="col-md-2">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="col-md-10">
                  <p><b>Phone</b></p>
                  <p>222333444</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-10">
            <div class="contact-box">
              <div class="row">
                <div class="col-md-2">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-md-10">
                  <p><b>Adres</b></p>
                  <p>Flower Street</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">

          </div>

          <div class="col-md-1">

          </div>
          <div class="col-md-10">
            <div class="contact-box">
              <div class="row">
                <div class="col-md-2">
                  <i class="far fa-envelope"></i>
                </div>
                <div class="col-md-10">
                  <p><b>E-mail</b></p>
                  <p type="email">info.mail@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">

          </div>


        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center social-media">
        <a href="https://twitter.com/baibu_iha" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/baibu_iha/?hl=tr" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/baibuiha/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f"></i></a>
      </div>
      <div class="col-md-12 d-flex justify-content-center copyright">
        <p>@Copyright Tüm Hakları Saklıdır <b>BAİBÜ KIRAT İHA</b> </p>
      </div>
    </div>
  </div>
</section>

<a id="link" href="#menu-start"><div class="button1"><i class="fas fa-fighter-jet"></i></div></a>

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/animated-slider.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/main.js"></script>






<script>



$(function() { $.scrollIt(); });

$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});




$('[data-fancybox]').fancybox({
  buttons : [
    'slideShow',
    'download',
    'share',
    'zoom',
    'close'
  ],
  thumbs : {
    autoStart : true
  }



});




$(document).ready(function(){
  $('.ct-slick-homepage').on('init', function(event, slick){
    $('.animated').addClass('activate fadeInUp');
  });

  $('.ct-slick-homepage').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: false,
  });

  $('.ct-slick-homepage').on('afterChange', function(event, slick, currentSlide) {
    $('.animated').removeClass('off');
    $('.animated').addClass('activate fadeInUp');
  });

  $('.ct-slick-homepage').on('beforeChange', function(event, slick, currentSlide) {
    $('.animated').removeClass('activate fadeInUp');
    $('.animated').addClass('off');
  });
});






$(document).ready(function(){

  // Variables
  var clickedTab = $(".tabs > .active");
  var tabWrapper = $(".tab__content");
  var activeTab = tabWrapper.find(".active");
  var activeTabHeight = activeTab.outerHeight();

  // Show tab on page load
  activeTab.show();

  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);

  $(".tabs > li").on("click", function() {

    // Remove class from active tab
    $(".tabs > li").removeClass("active");

    // Add class active to clicked tab
    $(this).addClass("active");

    // Update clickedTab variable
    clickedTab = $(".tabs .active");

    // fade out active tab
    activeTab.fadeOut(250, function() {

      // Remove active class all tabs
      $(".tab__content > li").removeClass("active");

      // Get index of clicked tab
      var clickedTabIndex = clickedTab.index();

      // Add class active to corresponding tab
      $(".tab__content > li").eq(clickedTabIndex).addClass("active");

      // update new active tab
      activeTab = $(".tab__content > .active");

      // Update variable
      activeTabHeight = activeTab.outerHeight();

      // Animate height of wrapper to new tab height
      tabWrapper.stop().delay(50).animate({
        height: activeTabHeight
      }, 500, function() {

        // Fade in active tab
        activeTab.delay(50).fadeIn(250);

      });
    });
  });

  // Variables
  var colorButton = $(".colors li");

  colorButton.on("click", function(){

    // Remove class from currently active button
    $(".colors > li").removeClass("active-color");

    // Add class active to clicked button
    $(this).addClass("active-color");

    // Get background color of clicked
    var newColor = $(this).attr("data-color");

    // Change background of everything with class .bg-color
    $(".bg-color").css("background-color", newColor);

    // Change color of everything with class .text-color
    $(".text-color").css("color", newColor);
  });
});


</script>

</html>
