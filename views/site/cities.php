<?php foreach ($cities as $city): ?>
    <div class="bhoechie-tab-content active city-div">
        <h4><?= $city->title?></h4>
        <p><?= $city->desc?></p>

    </div>
<?php endforeach; ?>
