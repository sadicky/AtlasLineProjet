<div id="approv" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter un Article</h4>
      </div>
      <div class="modal-body">	
      <form method="post" id="formulaire"  enctype="multipart/form-data">
      	<div class="row">
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>Article : </label> <span class="text-danger">*</span></b>
      				<input type="text" class="form-control" placeholder="article" name="article" id="article" required>
      			</div>
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>Article : </label> <span class="text-danger">*</span></b>
      				<input type="text" class="form-control" placeholder="article" name="article" id="article" required><br>
					  <button class="btn btn-primary pull-right btn-sm btn-block" type="submit"><i class="fa fa-plus fa-fw"></i> Ajouter</button>
			  </div>
      		</div>
      		<div class="col-sm-4">
      			<div class="form-group">      				
      				<b><label>Coût d'achat : </label> <span class="text-danger">*</span></b>
      				<input type="number" class="form-control" placeholder="prix d'achat + transport" name="prix" id="prix" required>
      			</div>
		</div>		
			  	
      	</div>
      </form>
      </div>
    </div>
  </div>
</div> 