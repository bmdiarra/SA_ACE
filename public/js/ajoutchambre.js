const URL_ROOT="http://localhost/live_poo";
$create_chambre=$("#form_ajout_chambre");
$create_chambre.on('submit', function(){
   // alert("Ok");
    const num_batiment = $("#num_batiment").val();
    const type_chambre = $("#type_chambre").val();
    var error = false;
  
        if ($("#type_chambre").val().length===0) {
            $("#type_chambre").after("<span>Merci de remplir</span>");  
            error = true;
            event.preventDefault();   
        }
         if ($("#num_batiment").val().length===0) {
            $("#num_batiment").after("<span>Merci de remplir</span>");  
            error = true;
            event.preventDefault();  
        }
      
if(!error){
    $.ajax({
      url:`${URL_ROOT}/security/enregistrerchambre`,
      data: $create_chambre.serialize(),
      method:"POST",
       success: function(data){
        
        $("#modalchambre").modal("toggle");
          setTimeout(function() => {
    
            $("#modalchambre").modal("hide");
          },3000);
          
      }
    });
  }
});