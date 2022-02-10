$(document).ready(function () {
  // getUser();
      $("#formulaire").submit(function (event) {
        event.preventDefault();
          var email = $("#email").val();
          var name = $("#name").val();
          var type = $("#type").val();
          $.ajax({
              url: "Public/script/adduser.php",
              method: "POST",
              data: {
                      email: email,
                      name : name,
                      type:type
              },
              success: function (donnees) {
                  $('#message').html(donnees).slideDown();
                  $("#formulaire")[0].reset();
                  $("#ajoutuser").modal("hide");
                  // getUser();
              }
          });
      });
          
    

  

//   
//view client view befor edit
$('.view_data').click(function(){  
  var Id = $(this).attr("id");  
$.ajax({  
  url:"public/script/viewuserbeforedit.php",  
  method:"post",  
  data:{Id:Id},  
  success:function(data){  
 $('#user_detail').html(data);  
 $('#dataModal').modal("show");  
//  getUser();
}  
});  
});
  //formB
  $(document).on('click','.submitb',function(){
    $.ajax({
            url:"Public/script/edituser.php",
            type:"post",
            data:$("#formedit").serialize(),
            success:function(data){
            $("#messages").html(data).slideDown();
            $("#dataModal").modal('hide');
            // getUser();
            }
   
    });
    return false;
}); 

function getUser(){
  $.post('Public/script/getuser.php',function(data){
      $("#getusers").html(data);
  }); //
}


$(document).on("click", ".desactiver", function (event) {
  event.preventDefault();
    //  getUser();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous desactiver cet utilisateur ? ")) {
      $.ajax({
        url: "public/script/deactivuser.php",
        method: "POST",
        data: {
          id: id
        },
        success: function (data) {
          // getUser();
        }
      });
    } else {
      return false;
    }
  });
 
  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
    // getUser();
      var id = $(this).attr("id");
      if (confirm("Voulez-vous activer cet utilisateur ? ")) {
        $.ajax({
          url: "public/script/activuser.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
          //  getUser();
          }
        });
      } else {
        return false;
      }
    });

});