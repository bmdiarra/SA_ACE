

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=ExmkL1nQaawIQuwkP9JT0NiREbK228SvkHkNmRn4faKosix5UmplcKs1_fFQ1MV_VeCTJWAEbOT3EeH760r-0nzSPsv5mOyByKGafkCBHE0" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="<?=BASE_URL?>/public/css/listeretudiant.css" rel="stylesheet">

  
<div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title bg-primary">
        <div class="row">
          <div class="col-sm-6">
            <h2>Liste <b>Etudiant</b></h2>
          </div>
          <div row="col-sm-6">
            <div class="row">
              <div class="col">
                <select type="text" class="form-control" name="first_name" placeholder="Profile" required="required">
                  <option value="">Type Bourse</option>
                  <option value="">Boursier</option>
                  <option value="">Non Boursier</option>
                </select>
                
              </div>
              <div class="col">
                <select type="text" class="form-control" name="first_name" placeholder="Profile" required="required">
                    <option value="">Logement</option>
                    <option value="">Loger</option>
                    <option value="">Non Loger</option>
                  </select>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
              <span class="custom-checkbox">
                <input type="checkbox" id="selectAll">
                <label for="selectAll"></label>
              </span>
            </th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Naissance</th>
            <th>Profil</th>
            <th>Type bourse</th>
            <th>Chambre</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
              </span>
            </td>
            <td>Moussa</td>
            <td>Ba</td>
            <td>896888868</td>
            <td>ba10@mail.com</td>
            <td>24-12-2006</td>
            <td>Boursier</td>
            <td>Entiere</td>
            <td>55-2222</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
              </span>
            </td>
            <td>Moussa</td>
            <td>Ba</td>
            <td>896888868</td>
            <td>ba10@mail.com</td>
            <td>24-12-2006</td>
            <td>Boursier</td>
            <td>Entiere</td>
            <td>55-2222</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
              </span>
            </td>
            <td>Moussa</td>
            <td>Ba</td>
            <td>896888868</td>
            <td>ba10@mail.com</td>
            <td>24-12-2006</td>
            <td>Boursier</td>
            <td>Entiere</td>
            <td>55-2222</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
              </span>
            </td>
            <td>Moussa</td>
            <td>Ba</td>
            <td>896888868</td>
            <td>ba10@mail.com</td>
            <td>24-12-2006</td>
            <td>Boursier</td>
            <td>Entiere</td>
            <td>55-2222</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
              </span>
            </td>
            <td>Moussa</td>
            <td>Ba</td>
            <td>896888868</td>
            <td>ba10@mail.com</td>
            <td>24-12-2006</td>
            <td>Boursier</td>
            <td>Entiere</td>
            <td>55-2222</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          
        </tbody>
      </table>
      <div class="clearfix">
        <div class="hint-text"> <b></b>  <b></b> </div>
        <ul class="pagination">
          <li class="page-item disabled"><a href="#">Previous</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item active"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </div>
    </div>
  </div>        
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>