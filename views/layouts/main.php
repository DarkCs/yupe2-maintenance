<?php
use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo \Yii::$app->language; ?>">
    <head>
        <meta charset="<?php echo \Yii::$app->charset; ?>">
        <title>
            <?= Html::encode($this->title) ?>
        </title>
        <style>
            .content {
                top: 50%;
                left: 50%;
                position: absolute;
                transform: translate(-50%, -50%);
            }
        </style>
        <?php $this->head(); ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="content">
            <?php echo $content; ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
