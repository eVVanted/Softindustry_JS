<?php

?>
<div id="add-city">
    <button type="button" id="btn-add-city" class="btn btn-primary">Add City <i class="glyphicon glyphicon-plus"></i></button>
</div>
<?php foreach ($cities as $city): ?>
    <div id="<?= $city->id?>" class="row vertical-align bhoechie-tab-content active city-div">
        <div class="col-sm-11">
            <h4><?= $city->title?></h4>
            <p><?= $city->desc?></p>
        </div>
        <div class="col-sm-1" >
            <span  data-id="<?= $city->id?>"  class="glyphicon glyphicon-remove " aria-hidden="true"></span>
            <span  data-id="<?= $city->id?>"  class="glyphicon glyphicon-pencil " aria-hidden="true"></span>
        </div>



    </div>
    <div>

    </div>

<?php endforeach; ?>
