<div id="ajoutcat" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Ajouter une Catégorie</h4>
      </div>
      <div class="modal-body">			
      <form  method="post" id='formulaire' enctype="multipart/form-data">
			<div class="form-group">
				<label>Catégorie</label>	
        	<input class="form-control" type="hidden" name="dateins" id="dateins"required />
			<input class="form-control" type="text" name="cat" id="cat" placeholder='Libellé de la catégorie' autocomplete="off" required />
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Ajouter </button>
      </form>
      </div>
    </div>
  </div>
</div> 