$(document).ready(function () {
      $("#formulaire").submit(function (event) {
        event.preventDefault();
          var name = $("#name").val();
          var pwd = $("#pwd").val();
          var email = $("#email").val();
          var type = $("#type").val();
          var statut = 1;
          $.ajax({
              url: "Public/script/adduser.php",
              method: "POST",
              data: {
                      name : name,
                      pwd:pwd,
                      email: email,
                      type: type,
                      statut: statut
              },
              success: function (donnees) {
                  $('#message').html(donnees).slideDown();
                  $("#formulaire")[0].reset();
                  $("#ajoutuser").modal("hide");
              }
          });
      });
          
    

  });