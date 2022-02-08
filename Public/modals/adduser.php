<div id="ajoutuser" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter un utilisateur</h4>
      </div>
      <div class="modal-body">	
      <form method="post" id="formulaire"  enctype="multipart/form-data">
      	<div class="row">
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>Noms : </label> <span class="text-danger">*</span></b>
      				<input type="text" class="form-control" placeholder="noms" name="name" id="name" required>
      			</div>
      			<div class="form-group">      				
      				<b><label>Type : </label> <span class="text-danger"></span></b>
                      <select name="type" class="form-control" id="type" required>
                        <option value="admin">Admin</option>
                        <option value="simple">Simple</option>
                      </select>
					 </div>
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>Email : </label> <span class="text-danger">*</span></b>
      				<input type="text" class="form-control" placeholder="Email" name="email" id="email" required>
      			</div> 
      			<div class="form-group">      				
      				<b><label>Statut : </label> <span class="text-danger"></span></b>
                      <select name="type" class="form-control" id="type" required>
                        <option value="0">Désactivé</option>
                        <option value="1">Activé</option>
                      </select>
					 </div>
					 
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>Mot de Passe</label> <span class="text-danger">*</span></b>
      				<input type="password" class="form-control" placeholder="Mot de passe" name="prix" id="prix" required>
      			</div> 
      				<b><label>#</label></b>
                  <button class="btn btn-primary btn-block btn-sm" type="submit"><i class="fa fa-plus fa-fw"></i> Ajouter</button>
			 
      		</div>	
			  	
      	</div>
      </form>
      </div>
    </div>
  </div>
</div> 