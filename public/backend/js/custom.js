$('.pending').hide();
$("#complete").click(function () {
    $('.complete').show();
    $('.pending').hide();
      
});
$("#pending").click(function () {
    $('.complete').hide();
    $('.pending').show();
      
});