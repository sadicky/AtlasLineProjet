$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    getCategories();
    $("#formulaire").submit(function (event) {
      event.preventDefault();
      var cat = $("#cat").val();
      var dateins = $("#dateins").val();
      var statut = 1;
      $.ajax({
        url: "Public/script/addcat.php",
        method: "POST",
        data: {
          cat: cat,
          dateins: dateins,
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
      getCategories();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous activer cet utilisateur ? ")) {
        $.ajax({
          url: "public/script/activcat.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
            getCategories();
          }
        });
      } else {
        return false;
      }
    });

    function getCategories() {
      $.post("Public/script/affcat.php", function (data) {
        $("#categorie").html(data);
      });
    }
    //recharger cette fonction toute les secondes
    setInterval(getCategories, 1000);

    $(document).on("click", ".update", function () {
      var id = $(this).attr("id");
      $.ajax({
        url: "public/script/affcatid.php",
        method: "POST",
        data: {
          id: id
        },
        dataType: "json",
        success: function (data) {
          $("#article").val(data.ARTICLE);
          $("#Modifier").modal("show");
          $(".modal-title").text("Modifier Admin");
          $("#id").val(id);
        }
      });
    });


    $(document).on("click", ".desactiver", function (event) {
      event.preventDefault();
      getCategories();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous desactiver cette catégorie ? ")) {
        $.ajax({
          url: "public/script/deactivcat.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
            getCategories();
          }
        });
      } else {
        return false;
      }
    });




  });