(function($) {
  
  "use strict";  

  $(window).on('load', function() {

  /*Page Loader active
    ========================================================*/
    $('#preloader').fadeOut();

  // Sticky Nav
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('.scrolling-navbar').addClass('top-nav-collapse');
        } else {
            $('.scrolling-navbar').removeClass('top-nav-collapse');
        }
    });

    /* ==========================================================================
       countdown timer
       ========================================================================== */
     jQuery('#clock').countdown('2018/06/21',function(event){
      var $this=jQuery(this).html(event.strftime(''
      +'<div class="time-entry days"><span>%-D</span> Days</div> '
      +'<div class="time-entry hours"><span>%H</span> Hours</div> '
      +'<div class="time-entry minutes"><span>%M</span> Minutes</div> '
      +'<div class="time-entry seconds"><span>%S</span> Seconds</div> '));
    });

    /* slicknav mobile menu active  */
    $('.mobile-menu').slicknav({
        prependTo: '.navbar-header',
        parentTag: 'liner',
        allowParentLinks: true,
        duplicate: true,
        label: '',
      });

      /* WOW Scroll Spy
    ========================================================*/
     var wow = new WOW({
      //disabled for mobile
        mobile: false
    });
    wow.init();

    /* Nivo Lightbox 
    ========================================================*/
    $('.lightbox').nivoLightbox({
        effect: 'fadeScale',
        keyboardNav: true,
      });

    // one page navigation 
    $('.navbar-nav').onePageNav({
            currentClass: 'active'
    }); 

    /* Back Top Link active
    ========================================================*/
      var offset = 200;
      var duration = 500;
      $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
          $('.back-to-top').fadeIn(400);
        } else {
          $('.back-to-top').fadeOut(400);
        }
      });

      $('.back-to-top').on('click',function(event) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: 0
        }, 600);
        return false;
      });

  });      

}(jQuery));
update_amounts();
$('select').change(update_amounts);

function update_amounts() {
    var sum = 0.0;
    $('#tickets > tbody  > tr').each(function() {
        var qty = $(this).find('option:selected').val();
        var price = $(this).find('.price').text().replace(/[^\d.]/, '');
        var amount = (qty * price);
        sum += amount;
        $(this).find('.subtotal').text(amount + ' tk');
    });
    $('#total').val(sum);
    $('#tickets > tbody  > tr').change(function() {
        var tot = $('#total').val();
        $('#cost').val(tot);
    });
    $('#adults').change(function() {

        var qan = $('#adults').val();
        $('#quantity').val(qan);
    });
    $('#children').change(function() {

        var qan = $('#children').val();
        $('#chQuantity').val(qan);
    });
    $('#infant').change(function() {
        var qan = $('#infant').val();
        $('#inQuantity').val(qan);
    });
}


var quantitiy=0;
$('.quantity-right-plus').click(function(e){
    
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity = parseInt($('#quantity').val());
    
    // If is not undefined
        
        $('#quantity').val(quantity + 1);

      
        // Increment
    
});
  
$('.quantity-left-minus').click(function(e){
  // Stop acting like a button
  e.preventDefault();
  // Get the field name
  var quantity = parseInt($('#quantity').val());
  
  // If is not undefined

      // Increment
      if(quantity>0){
      $('#quantity').val(quantity - 1);
      }
});

$(".payment").click(function() {
  if($("#rocket").is(':checked')){
    $(".rocket").css("display", "inline");
    $(".bKash").css("display", "none");
  }else if($("#bKash").is(':checked')){
    $(".bKash").css("display", "inline");
    $(".rocket").css("display", "none");
  }
});
function selectPaymentMethod() {
  if($("#rocket").is(':checked') || $("#bKash").is(':checked')){
  }
  else{
  alert("Select Payment Method First")
      return false;
  }
   
}
$("#new_pwd").click(function(){
  var current_pwd = $("#current_pwd").val();
  $.ajax({
      type:'get',
      url: '/home/check_pwd',
      data:{current_pwd:current_pwd},
      success:function(resp){
          if (resp=="false") {
              $("#current_pwd").removeClass("is-valid");
              $("#current_pwd").addClass("is-invalid");
              $("#chkPWD").html("<font color='red'>Current Password is Incorrect</font>");
              $("#sub").css('display','none');
              return false;
          }
          else if (resp=="true") {
              $("#current_pwd").removeClass("is-invalid");
              $("#current_pwd").addClass("is-valid");
              $("#chkPWD").html("<font color='green' border='1px solid green'>Current Password is Correct</font>");
              $("#sub").css('display','inline');
          }
      },error:function(){
          alert("Error");
      }
  });
});