<p>Clients / <?= $infosClient->getNom() . " " . $infosClient->getPrenom(); ?> / Informations</p>
<div class="block-block-profile">
    <h2 class="titre-top">Données générales</h2>
    <div class="block-profile">
        <div class="top-profile">
            <div>
                <h3>Nom</h3>
                <p><?= $infosClient->getNom(); ?></p>
            </div>
            <div>
                <h3>Prenom</h3>
                <p><?= $infosClient->getPrenom(); ?></p>
            </div>
        </div>
        <div class="bottom-profile">
            <div>
                <h3>Téléphone</h3>
                <p><?= $infosClient->getTelephone(); ?></p>
            </div>
            <div>
                <h3>Email</h3>
                <p><?= $infosClient->getEmail(); ?></p>
            </div>
        </div>
    </div>
    <div class="block-block-produits">
        <h3 class="titre-top">Les produits</h3>
        <div class="block-produits">
            <div class="liste-colonne-produits">
                <h4>ID</h4>
                <h4>Nom</h4>
                <h4>Description</h4>
                <h4>Prix</h4>
                <h4>+Commander</h4>
            </div>
            <div class="liste-tuple-produits">
                <?php
                foreach ($produitsClient as $produit) {
                    ?>
                    <p><?= $produit->getId(); ?></p>
                    <p><?= $produit->getNom(); ?></p>
                    <p><?= $produit->getDescription(); ?></p>
                    <p><?= $produit->getPrix(); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>