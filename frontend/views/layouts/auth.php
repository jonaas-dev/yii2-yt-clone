<?php

/* @var $this View */

/* @var $content string */

use common\widgets\Alert;
use yii\web\View;

$this->beginContent('@frontend/views/layouts/base.php')
?>
<main class="d-flex">
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent() ?>
