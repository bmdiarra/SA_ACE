
        

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
        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Chambre" required="required">
        </div>
      </div> 
      <br/>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="last_name" placeholder="A generer selon le type" required="required">
          
        </div>
        <div class="col">
          <select type="text" class="form-control" name="first_name" placeholder="Profile" required="required">
            <option value="">Demi bourse</option>
            <option value="">Bourse Entiere</option>
          </select>
        </div>
      </div>          
        </div>
        <br/>
          
    <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enregistrer</button>
        </div>
    </form>
</div>

