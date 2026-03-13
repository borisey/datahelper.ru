<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Адреса</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 mb-3">
                <?php foreach ($addrObjs as $addrObj): ?>
                    <p><?= $addrObj->NAME ?></p>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
