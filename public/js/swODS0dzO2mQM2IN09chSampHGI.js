$(document).ready(function(){
 
 var consulta_user = "";
 $("#buscar_friend").keyup(function(event) {
  
   consulta_user = $("#buscar_friend").val();
   var token = $("#token").val();

      $.ajax({
   	  url: 'http://socialnetwork.div/addFriend/friends',
   	  headers: {'X-CSRF-TOKEN': token},
   	  type: 'POST',
   	  dataType: 'html',
   	  data: {friendRequest: consulta_user},
   	  beforeSend: function()
   	  {
         $("#resultado2").html("<p align='center'><img height='100px' width='100px' src='/storage/ajax-loader.gif'></img> </p>");
   	  },
   	  error: function()
   	  {
         console.log("No hay datos");
   	  },
   	  success: function(data)
   	  {
             $("#resultado2").empty();
             $("#resultado2").append(data);



      }
      });

  });
   




































});