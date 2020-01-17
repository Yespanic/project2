<?php

use yii\helpers\Html;
use yii\web\UploadedFile;

/* @var $this yii\web\View */

$this->title = 'Project2';
?>

<?=(isset($string) ? $string : '')?>

<div class="">
    <form action="<?=\yii\helpers\Url::toRoute(['site/form'])?>">
        <input type="text" name="string">
        <input type="submit" value="submit">
    </form>

</div>






