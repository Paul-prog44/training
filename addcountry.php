<h1>Ajoutez un pays</h1>

<form action="post_addcountry.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nom du pays</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="Nom du pays">
            </div>
            <div class="mb-3">
                <label for="population" class="form-label">Population du pays</label>
                <textarea class="form-control" placeholder="Nombre d'habitant" id="population" name="population"></textarea>
            </div>
            <div>
                <label for="frontiere_maritime" class="form-label">Frontière maritime</label>
                <textarea class="form-control" placeholder="0 = non, 1 = oui" id="frontiere_maritime" name="frontiere_maritime"></textarea>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>