$(document).ready(function () {
    // getCategories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        var statut = 1;
        var article = $("#article").val();
        var prix = $("#prix").val();;
        var qte = 0;
        var montant = 0;
        var idu = 13;
        var stock = 0;
        var cat = $("#cat").val();
        var fab = $("#fab").val();
        var dateins = $("#dateins").val();
        var expired = $("#expired").val();
        var cond = $("#cond").val();
        var statut = 1;
        $.ajax({
            url: "Public/script/addart.php",
            method: "POST",
            data: {
                idu: idu,
                qte: qte,
                cat: cat,
                dateins: dateins,
                statut: statut,
                article: article,
                prix: prix,
                cond: cond,
                fab: fab,
                expired: expired
            },
            success: function (donnees) {
                $('#message').html(donnees).slideDown();
                $("#formulaire")[0].reset();
                $("#ajoutart").modal("hide");
            }
        });
    });
    $(document).on("click", ".desactiver", function (event) {
        event.preventDefault();
        //   getArticles();
          var id = $(this).attr("id");
          if (confirm("Voulez-vous desactiver cet article ? ")) {
            $.ajax({
              url: "public/script/deactivart.php",
              method: "POST",
              data: {
                id: id
              },
              success: function (data) {
                // getArticles();
              }
            });
          } else {
            return false;
          }
        });
       
        $(document).on("click", ".activer", function (event) {
          event.preventDefault();
        //   getArticles();
            var id = $(this).attr("id");
            if (confirm("Voulez-vous activer cet article? ")) {
              $.ajax({
                url: "public/script/activart.php",
                method: "POST",
                data: {
                  id: id
                },
                success: function (data) {
                //  getArticles();
                }
              });
            } else {
              return false;
            }
          });
    

});