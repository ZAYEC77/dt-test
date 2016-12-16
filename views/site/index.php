<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-md-12">
                <div id="datatab">
                    <?= \nullref\datatable\DataTable::widget([
                                                     'data' => $categoryTab->getModels(),
                                                     'columns' => [
                                                     'id',
                                                     'title',
                                                     ],
                                                     ]) ?>
                </div>
            </div>
        </div>

    </div>
</div>
