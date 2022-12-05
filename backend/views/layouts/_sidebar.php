<?php
?>
<aside class="shadow">
    <?php echo \yii\bootstrap4\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => '<i class="fas fa-chart-line"></i> Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => '<i class="fas fa-video"></i> Videos',
                'url' => ['/video/index']
            ],
        ]
    ])
    ?>
</aside>
