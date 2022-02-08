$(document).ready(function () {
    // getCategories();
      $("#formulaire").submit(function (event) {
        event.preventDefault();
        var statut = 1;
        var article = $("#article").val();;
        var prix  = $("#prix").val();;
        var qte=0;
        var montant=0;
        var idu = 13;
        var stock=0;
          var cat = $("#cat").val();
          var dateins = $("#dateins").val();
          var cond = $("#cond").val();
          var statut = 1;
          $.ajax({
              url: "Public/script/addart.php",
              method: "POST",
              data: {
                      idu : idu,
                      qte: qte,
                      cat : cat,
                      dateins:dateins,
                      statut: statut,
                      article: article,
                      prix: prix,
                      cond: cond,                      
              },
              success: function (donnees) {
                  $('#message').html(donnees).slideDown();
                  $("#formulaire")[0].reset();
                  $("#ajoutart").modal("hide");                  
              }
          });
      });


  });