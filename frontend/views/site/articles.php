<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 14.11.2015
 * Time: 14:39
 */

use yii\helpers\Html;

$this->title = 'Статьи';
$this->params['breadcrums'][] = $this->title;
?>

<div class="site-articles">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the articles page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
