<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
 ?>

 <h1>国家</h1>

 <ul>
     <?php foreach ($booklist as $book):?>
    <li>
            <?= Html::encode($book->id) ?>
            <?= Html::encode("{$book->name}({$book->author})") ?>:
            <?= $book->price ?>


                
    </li>
    <?php endforeach; ?>
 </ul>

 <?= LinkPager::widget(['pagination'=>$pagination]) ?>


