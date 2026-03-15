<?php

/** @var yii\web\View $this */

?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Адреса</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 mb-3">
                <?php foreach ($addresses as $address): ?>
                    <p><?= $address ?></p>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
