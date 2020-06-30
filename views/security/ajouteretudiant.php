
        

        <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
    <h2>Enregistrer Etudiant</h2>
        <div class="form-group">
      <div class="row">
        <div class="col"><input type="text" class="form-control" name="prenom" placeholder="Prenom" required="required"></div>
        <div class="col"><input type="text" class="form-control" name="nom" placeholder="Nom" required="required"></div>
      </div>          
        </div>
        <div class="form-group">
      <div class="row">
        <div class="col"><input type="text" class="form-control" name="" placeholder="Telephone" required="required"></div>
        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Email" required="required"></div>
      </div>          
        </div>
        <div class="row">
        <div class="col"><input type="text" class="form-control" name="first_name" placeholder="Naissance" required="required"></div>
        <div class="col">
          <select type="text" class="form-control" name="first_name" id="etat_bourse" placeholder="Profile" required="required">
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
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enregistrer</button>
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

 $("#etat_bourse").change(function(){
   $etat_bourse = $("#etat_bourse").val();
   if($etat_bourse == "boursier"){
    $( "#type_bourse" ).html( `` );
    $( "#type_logement" ).html( `` );
    $( "#type_bourse" ).html( `
    <select type="text" class="form-control" name="first_name" id="" placeholder="Profile" required="required">
              <option value="">Valeur de la bourse</option>
              <option value="boursier">Bourse entiere</option>
              <option value="nonboursier">Demi bourse</option>
            </select>
    ` );

    $( "#type_logement" ).html( `
    <select type="text" class="form-control" name="first_name" id="choisir_logement" placeholder="Profile" required="required">
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
    <div class="col"><input type="text" class="form-control" name="" placeholder="Adresse" required="required"></div>
    ` );
   }


   
 $("#choisir_logement").change(function(){
  $choisir_logement = $("#choisir_logement").val();
  if($choisir_logement == "loger"){
    $( "#numero_chambre" ).html( `
          <div class="col"><input type="text" class="form-control" name="" placeholder="Numero Chambre" required="required"></div>
          ` );
  }
  if($choisir_logement == "nonloger"){
    $( "#numero_chambre" ).html( ``);
  }
        

  })
   
 })


});

</script>

