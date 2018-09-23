<?php

/* @var $this yii\web\View */

$this->title = 'Countries of the World';

?>
<div class="row">

    <div class=" col-md-13">
        <div class="col-md-3 bhoechie-tab-menu">
            <h4><?= "Countries" ?></h4>
        </div>
        <div class="col-md-9 bhoechie-tab">
            <h4><?= "Cities" ?></h4>
        </div>
    </div>
    <div class="col-md-13 bhoechie-tab-container">
        <div class="col-md-3 bhoechie-tab-menu">
            <div class="list-group">
                <?php foreach ($countries as $country): ?>
                <a href="#" data-id="<?= $country->id?>" class="list-group-item <?= ($country->id==1)?"active":""?> ">
                    <h4><?= $country->title?></h4><p><?= $country->text?></p>
                </a>
                <?php endforeach; ?>

            </div>
        </div>

        <div  class="city-list col-md-9 bhoechie-tab">

            <div id = "cities"></div>

        </div>
    </div>
</div>

