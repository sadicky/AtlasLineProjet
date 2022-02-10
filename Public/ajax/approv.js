$(document).ready(function () {
    // getCategories();
    $("#formulaire").submit(function (event) {
        event.preventDefault();
        var article = $("#article").val();
        var qte =  $("#qte").val();
        var fab = $("#fab").val();
        var id = $("#id").val();
        var expired = $("#expired").val();
        $.ajax({
            url: "Public/script/approv.php",
            method: "POST",
            data: {
                idu: idu,
                id:idu,
                qte: qte,
                article: article,
                fab: fab,
                expired: expired
            },
            success: function (donnees) {
                $('#message').html(donnees).slideDown();
                $("#formulaire")[0].reset();
            }
        });
    });

});