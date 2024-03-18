<?php require APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<table class="table table-hover">
    <thead>
        <th>Naam</th>
        <th>NettoWaarde (Miljoen)</th>
        <th>Land</th>
        <th>Mobiel</th>
        <th>Leeftijd</th>
    </thead>
    <tbody>
        <?= $data['dataRows']; ?>
    </tbody>
</table>

<br>
<a href="<?= URLROOT; ?>/Homepages/index">Homepage</a>

<?php require APPROOT . '/views/includes/footer.php'; ?>

