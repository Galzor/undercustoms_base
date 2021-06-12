jQuery(document).ready(function( $ ) { //noconflicts
  console.log('plugins initilized.');

  //Smooth scrolling with links v2
  // $('a.inner-link, .menu-item a[href*=\\#]').on('click', function (event) {
  //   if(this.pathname === window.location.pathname){
  //     event.preventDefault();
  //     $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
  //     // $('#menuModal').modal('hide');
  //   } else {
  //     // $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
  //   }
  // });

  //smooth scroll
  $(document).on('click', 'a.inner-link', function (event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: $($.attr(this, 'href')).offset().top - 200 }, 500);
  });

  // Simple Parallax
  var parallax_img = document.getElementsByClassName('parallax-img');
  // new simpleParallax(parallax_img);
  new simpleParallax(parallax_img, {
    scale: 1.2
  });

  //destroy on phones
  if( getMobileOS() ){
    // parallax_img.destroy();
    console.log('destroyed');
  }

  //check if phones
  function getMobileOS() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    // console.log('user agent: '+userAgent);
    if (/windows phone/i.test(userAgent)) {
      return true;
    }
    if (/android/i.test(userAgent)) {
      return true;
    }
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return true;
    }
    return false;
  }


  //back to top
  backToTop();
  function backToTop(){
    $(".back-to-top").css("display","none");
    $(window).scroll(function(){
      if($(window).scrollTop() > 0 ){
        $(".back-to-top").fadeIn(300);
      } else {
        $(".back-to-top").fadeOut(300);
      }
    });
    $(".back-to-top").click(function(){
      $("html, body").animate({
        scrollTop: 0
      }, 500);
    });
  };


});