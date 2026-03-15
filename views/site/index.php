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
                        <th>Скорость загрузки страницы</th>
                        <th>Результат оптимизации</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="<?= Url::to(['site/main']) ?>">
                                Базовая страница (без оптимизации)</td>
                            </a>
                        <td>
                            ~39,000ms
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <a href="<?= Url::to(['site/with-mysql-indexes']) ?>">
                                Добавлены индексы в MySQL
                            </a>
                        </td>
                        <td>
                            ~40ms
                        </td>
                        <td>
                            <p>39000 / 40 = 975</p>
                            <p>Скорость сайта увеличилась в 975 раз</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
