<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
    Ajouter un element
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="create.php" method="post">
                    <div class="form-outline mt-2">
                        <input type="text" id="nom" class="form-control" name='nom' />
                        <label class="form-label" for="nom">Nom</label>
                    </div>
                    <div class="form-outline mt-2">
                        <input type="text" id="prenom" name='prenom' class="form-control" />
                        <label class="form-label" for="prnom">Prenom</label>
                    </div>
                    <div class="form-outline mt-2">
                        <input type="text" id="tel" name="tel" class="form-control" />
                        <label class="form-label" for="tel">Telephone</label>
                    </div>
                    <div class="form-outline mt-2">
                        <input type="mail" id="mail" name="mail" class="form-control" />
                        <label class="form-label" for="mail">Email</label>
                    </div>
                    <div class="form-outline mt-2">
                        <input type="text" id="pays" name="pays" class="form-control" />
                        <label class="form-label" for="pays">Pays</label>
                    </div>
                    <input type="submit" class="btn mt-2 btn-success" value="Envoyer">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>