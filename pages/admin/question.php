<div class="container">
    <div class="row">
        <div class="col shadow-sm bg-light rounded overflow-auto" style="height: 400px;">
        <form action="" method="post" id="form">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Question</label>
    <textarea class="form-control" id="textarea" name="libelle" rows="3"></textarea>
    <span class="form_error"></span><br />
  </div>
  <div class="form-group form-inline">
    <label class="my-1 mr-2" for="number">Nombre de points</label>
    <input type="number" class="form-control mr-2" id="number" name="nbr_points" placeholder="Nombre de points">
    <span class="form_error"></span><br />
</div>
<div class="form-group form-inline">
    <label class="my-1 mr-2" for="number">Type de réponses</label>
    <select class="custom-select" id="typeRep" name="type" onChange="choixRep()">
    <option value="">Choisir votre type de réponse</option>
    <option value="texte">Texte</option>
    <option value="simple">Simple</option>
    <option value="multiple">Multiple</option>
    </select>
    <span class="form_error"></span><br />
    <div class="col-auto my-1">
      <button type="button" class="btn btn-info font-weight-bold" onclick="add()">+</button>
    </div>
</div>
<div class="form-group form-inline" id="reponse">
</div>
<div class="row">
    <div class="col">
    <button class="btn btn-primary float-right" name="enregistrer" id="enregistrer" type="submit">Enregistrer</button>
    </div>
</div>
</form>
        </div>
    </div>
</div>
<script src="public/js/question.js"></script>