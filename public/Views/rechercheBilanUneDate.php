<div class="container">
    <h3>Rechercher bilan d'une date</h3>
    <form id="form">
        <div class="row mt-3">
            <div class="col-md-8">
                <label for="date">Entrer la date</label>
                <input type="date" name="date-bilan" id="date-bilan" class="form-control">
            </div>
            <div class="col-md-4">
                <button name="search" class="btn btn-warning" type="submit">Recherche</button>
            </div>
        </div>
    </form>
    <main id="result"></main>
</div>

<script src="./js/rechercheBilan.js"></script>