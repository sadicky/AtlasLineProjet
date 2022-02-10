$(document).ready(function () {
$("#formulaire").submit(function (event) {
        event.preventDefault();
          var cat = $("#cat").val();
          var dateins = $("#dateins").val();
          var statut = 1;
          $.ajax({
              url: "Public/script/addcat.php",
              method: "POST",
              data: {
                      cat : cat,
                      dateins:dateins,
                      statut: statut
              },
              success: function (donnees) {
                  $('#message').html(donnees).slideDown();
                  $("#formulaire")[0].reset();
                  $("#ajoutcat").modal("hide");
                  
              }
          });
});

    
  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
      // afterDel();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous activer cet utilisateur ? ")) {
        $.ajax({
          url: "public/script/activcat.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
            getAdmin();
          }
        });
      } else {
        return false;
      }
    });
    
    $(document).on("click", ".desactiver", function (event) {
    event.preventDefault();
      afterDel();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous desactiver cet utilisateur ? ")) {
        $.ajax({
          url: "public/script/desactivcat.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
            getAdmin();
          }
        });
      } else {
        return false;
      }
    });


   
    
    
  });