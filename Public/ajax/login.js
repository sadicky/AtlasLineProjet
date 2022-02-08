$(document).ready(function () {
    $("#formulaire").submit(function (event) {
      event.preventDefault();
        var pwd = $("#pwd").val();
        var email = $("#email").val();
        $.ajax({
            url: "Public/script/login.php",
            method: "POST",
            data: {
                    pwd:pwd,
                    email: email,
            },
            success: function (donnees) {
                $('#message').html(donnees).slideDown();
                $("#formulaire")[0].reset();
            }
        });
    });
        
  

});