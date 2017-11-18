<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php foreach ($agents as $agent): ?>
            <div class="col-lg-12">
                <h4 style="color:#3f459f"><?= Html::encode("{$agent->city}") ?></h4>
                <div class="row">
                    <div class="col-lg-2">
                        <h4 class="text-center">3</h4>
                        <h4 class="text-center">Sourced</h4>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-center">3</h4>
                        <h4 class="text-center">Applied</h4>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-center">3</h4>
                        <h4 class="text-center">Phone Screen</h4>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-center">3</h4>
                        <h4 class="text-center">Interview</h4>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-center">3</h4>
                        <h4 class="text-center">Offer</h4>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-center">3</h4>
                        <h4 class="text-center">Hired</h4>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
