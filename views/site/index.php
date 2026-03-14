<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Адреса</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 mb-3">
<!--                --><?php //foreach ($addresses as $address): ?>
<!--                    <p>--><?php //= $address ?><!--</p>-->
<!--                --><?php //endforeach; ?>


                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Наименование</th>
                        <th>URL</th>
                        <th>Скорость загрузки страницы</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Базовая страница (без оптимизации)</td>
                        <td>
                            <a href="<?= Url::to(['site/main']) ?>">
                                Ссылка
                            </a>
                        </td>
                        <td>
                            ~47ms
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Добавлены индексы в MySQL</td>
                        <td>
                            <a href="<?= Url::to(['site/with-mysql-indexes']) ?>">
                                Ссылка
                            </a>
                        </td>
                        <td>

                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
