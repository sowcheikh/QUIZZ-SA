
    <div class="container">
	<div class="col"><h3 class="text-info text-center">Liste des Joueurs</h3></div>
   <div id="result" class="table-responsive" style="overflow:scroll; height: 350px;"> <!-- Data will load under this tag!-->

   </div>
  </div>

<!-- This is Customer Modal. It will be use for Create new Records and Update Existing Records!-->
<div id="customerModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Ajouter un nouveau joueur</h4>
   </div>
   <div class="modal-body">
    <label>Entrer le Nom</label>
    <input type="text" name="name" id="name" class="form-control" />
    <br />
    <label>Entrer le Score</label>
    <input type="text" name="score" id="score" class="form-control" />
    <br />
   </div>
   <div class="modal-footer">
    <input type="hidden" name="customer_id" id="customer_id" />
    <input type="submit" name="action" id="action" class="btn btn-success"/>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
   </div>
  </div>
 </div>
    </div>



<script src="public/js/liste_player.js"></script>