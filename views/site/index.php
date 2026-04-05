<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Адреса</h1>

    </div>

    <h2>2 Оптимизация на уровне фреймворка Yii2</h2>

    <h3>Минификация и объединение CSS/JS через Asset Bundle</h3>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 mb-3">
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
                            <a href="<?= Url::to(['site/index-full-dev']) ?>">
                                Исходная страница (без минификации и объединения CSS/JS через Asset Bundle)
                            </a>
                        </td>
                        <td>~290 мс</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <a href="<?= Url::to(['site/index-min-prod']) ?>">
                                Страница с минификацией и объединением CSS/JS через Asset Bundle
                            </a>
                        </td>
                        <td>~92 мс</td>
                        <td>
                            <p>290 / 92 = 3,15</p>
                            <p>Скорость сайта увеличилась примерно в три раза</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <h2>3 Оптимизация на уровне MySQL</h2>

    <h3>Создание индексов</h3>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 mb-3">
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
                                Базовая страница (без оптимизации)
                            </a>
                        </td>
                        <td>
                            ~39,000 мс
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
                            ~40 мс
                        </td>
                        <td>
                            <p>39000 / 40 = 975</p>
                            <p>Скорость сайта увеличилась примерно в 975 раз</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <h2>4 Оптимизация на уровне фронтенда</h2>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 mb-3">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Наименование</th>
                        <th>Скорость загрузки страницы</th>
                        <th>Результат оптимизации</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <h2>5 Инфраструктурные методы оптимизации</h2>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 mb-3">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Наименование</th>
                        <th>Скорость загрузки страницы</th>
                        <th>Результат оптимизации</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
