$('.pending').hide();
$("#complete").click(function () {
    $('.complete').show();
    $('.pending').hide();
      
});
$("#pending").click(function () {
    $('.complete').hide();
    $('.pending').show();
      
});
$("#new_pwd").click(function(){
    var current_pwd = $("#current_pwd").val();
    // alert(current_pwd);
    $.ajax({
        type:'get',
        url: '/admin/check_pwd',
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