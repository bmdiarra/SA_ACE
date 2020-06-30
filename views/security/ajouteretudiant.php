
        

        <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
    <h2>Enregistrer Etudiant</h2>
        <div class="form-group">
      <div class="row">
        <div class="col"><input type="text" class="form-control" id="prenom_etu" name="prenom_etu" placeholder="Prenom" required="required"></div>
        <div class="col"><input type="text" class="form-control" id="nom_etu" name="nom_etu" placeholder="Nom" required="required"></div>
      </div>          
        </div>
        <div class="form-group">
      <div class="row">
        <div class="col"><input type="text" class="form-control" id="telephone_etu" name="telephone_etu" placeholder="Telephone" required="required"></div>
        <div class="col"><input type="text" class="form-control" id="email_etu" name="email_etu" placeholder="Email" required="required"></div>
      </div>          
        </div>
        <div class="row">
        <div class="col"><input type="date" class="form-control" id="datenaiss_etu" name="datenaiss_etu" placeholder="Naissance" required="required"></div>
        <div class="col">
          <select type="text" class="form-control" name="type_bourse1" id="type_bourse1" placeholder="Type_bourse" required="required">
              <option value="">Etat de Bourse</option>
              <option value="boursier">Boursier</option>
              <option value="nonboursier">Non Boursier</option>
            </select>
        </div>
      </div> 
      <br/>
      <div class="row">
        <div class="col" id="type_bourse">
          
          
        </div>
        <div class="col" id="type_logement">
          
        </div>
      </div>  

      <br/>
      <div class="row">
        <div class="col" id="">
          
          
        </div>

        <div class="col" id="numero_chambre">
          
          
        </div>
        
      </div>  

        </div>
        <br/>
          
    <div class="form-group">
    <div class="row">
            <div class="col">
            <button type="submit" class="btn btn-primary btn-lg btn-block .btn_enregistrer">Enregistrer</button>
            </div>
            <div class="col">
            <button type="submit" class="btn btn-danger btn-lg btn-block">Annuler</button>
            </div>
          
          </div>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>

$(function(){
 $("#type_bourse1").change(function(){
   $etat_bourse = $("#type_bourse1").val();
   if($etat_bourse == "boursier"){
    $( "#type_bourse" ).html( `` );
    $( "#type_logement" ).html( `` );
    $( "#type_bourse" ).html( `
    <select type="text" class="form-control" name="valeur_bourse" id="valeur_bourse" placeholder="Profile" required="required">
              <option value="">Valeur de la bourse</option>
              <option value="boursier">Bourse entiere</option>
              <option value="nonboursier">Demi bourse</option>
            </select>
    ` );

    $( "#type_logement" ).html( `
    <select type="text" class="form-control" name="loger" id="loger" placeholder="Profile" required="required">
              <option value="">Choisissez le type de logement</option>
              <option value="loger">Loger</option>
              <option value="nonloger">Non loger</option>
            </select>
    ` );
   }
   if($etat_bourse == "nonboursier"){
    $( "#type_bourse" ).html( `` );
    $( "#type_logement" ).html( `` );
    $( "#numero_chambre" ).html( ``);
    $( "#type_bourse" ).html( `
    <div class="col"><input type="text" class="form-control" name="adresse_etu" id="adresse_etu" placeholder="Adresse" required="required"></div>
    ` );
   }


   
 $("#loger").change(function(){
  $choisir_logement = $("#loger").val();
  if($choisir_logement == "loger"){
    $( "#numero_chambre" ).html( `
          <div class="col"><input type="text" class="form-control" name="id_chambre" id="id_chambre" placeholder="Adresse" required="required"></div>
          ` );
  }
  if($choisir_logement == "nonloger"){
    $( "#numero_chambre" ).html( ``);
  }
        

  })
   
 })


 $(".btn_enregistrer").submit(function(){
  alert("cool");

    $prenom_etu = "";
    $nom_etu = "";
    $email_etu = "";
    $telephone_etu = "";
    $adresse_etu = "";
    $datenaiss_etu = "";
    $type_bourse1 = "";
    $valeur_bourse = "";
    $loger = "";
    $adresse_etu = "";


    $prenom_etu = $("#prenom_etu").val();
    $nom_etu = $("#nom_etu").val();
    $email_etu = $("#email_etu").val();
    $telephone_etu = $("#telephone_etu").val();
    $adresse_etu = $("#adresse_etu").val();
    $datenaiss_etu = $("#datenaiss_etu").val();
    $type_bourse1 = $("#type_bourse1").val();
    $valeur_bourse = $("#valeur_bourse").val();
    $loger = $("#loger").val();
    $adresse_etu = $("#adresse_etu").val();

    $.ajax({

      type: "POST",
      url: "venregistreretudiant",
      //data: $('form').serialize(),
      data: {prenom_etu:$prenom_etu,nom_etu:$nom_etu,email_etu:$email_etu,telephone_etu:$telephone_etu,adresse_etu:$adresse_etu,datenaiss_etu:$datenaiss_etu,type_bourse1:$type_bourse1,valeur_bourse:$valeur_bourse,loger:$loger,adresse_etu:$adresse_etu},
      dataType: "text",
      success: function (data) {
        alert(data);
      }


})



 })


});

</script>

