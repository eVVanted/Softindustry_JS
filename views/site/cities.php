<?php

?>
<div id="add-city">
    <button type="button" id="btn-add-city" class="btn btn-primary">Add City <i class="glyphicon glyphicon-plus"></i></button>
</div>
<?php foreach ($cities as $city): ?>
    <div class="bhoechie-tab-content active city-div">
        <h4><?= $city->title?></h4>
        <p><?= $city->desc?></p>

    </div>
<?php endforeach; ?>
