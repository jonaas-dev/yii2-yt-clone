<?php

/** @var $model \common\models\Comment */

use common\models\Video;
use yii\helpers\Url;

?>
<div class="media mb-3">
    <img class="mr-3 comment-avatar" src="/img/avatar.svg" alt="">
    <div class="media-body">
        <h6 class="mt-0">
            <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
            <small class="text-muted"><?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></small>
        </h6>
        <div class="comment-text">
            <?php echo $model->comment ?>
        </div>
        <div class="comment-actions mt-2">
            <button class="btn btn-sm btn-light">
                REPLY
            </button>
        </div>
    </div>
</div>