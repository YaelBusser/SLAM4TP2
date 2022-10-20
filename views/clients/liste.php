<div class="blockListeClient">
    <form method="GET" action="/clients/page/0" class="formListeClient">
        <div class="block-icon-search">
            <i class="bi bi-search"></i>
        </div>
        <input type="search" placeholder="Rechercher un client..." name="search" class="searchClient">
    </form>
    <h2>Les clients</h2>
    <div class="listeBlock">
        <div class="liste-colonne">
            <h3>ID</h3>
            <h3>Nom Prénom</h3>
            <h3>Téléphone</h3>
            <h3>Email</h3>
            <div class="btn-ajouter">Ajouter</div>
        </div>
        <div class="liste-tuple">
            <?php
            foreach ($lesClients as $leClient) {
                ?>
                <p><?= $leClient->getId(); ?></p>
                <p><a href="/clients/<?= $leClient->getId(); ?>/informations"><?= $leClient->getNom(); ?> <?= $leClient->getPrenom(); ?></a></p>
                <p><?= $leClient->getTelephone(); ?></p>
                <p><?= $leClient->getEmail(); ?></p>
            <?php } ?>
        </div>
        <div class="block-arrows">
            <?php if ($idpage != 0) {
                ?>
                <a href="/clients/page/<?= $idpage - 1; ?>?search=<?= $search; ?>" class="idpage"><?= $idpage - 1; ?></a>
            <?php } ?>

            <a href="/clients/page/<?= $idpage; ?>?search=<?= $search; ?>" class="idpage"><?= $idpage; ?></a>
            <a href="/clients/page/<?= $idpage + 1; ?>?search=<?= $search; ?>" class="idpage"><?= $idpage + 1; ?></a>
        </div>
    </div>
</div>
