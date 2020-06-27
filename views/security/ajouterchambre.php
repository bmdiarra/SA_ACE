
        <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
    <h2>Enregistrer Chambre</h2>
        <div class="form-group">
      <div class="row">
        <div class="col"><input type="text" class="form-control" name="nom" placeholder="Numero Batiment" required="required"></div>
      </div>          
        </div>
         
      <div class="row">
        <div class="col">
          <select type="text" class="form-control" name="first_name" placeholder="Profile" required="required">
            <option value="">Type Chambre</option>
            <option value="">Individuel</option>
            <option value="">Collectif</option>
          </select>
          
        </div>
        <div class="col">

          <input type="text" class="form-control" name="last_name" placeholder=" " required="required">
          
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

