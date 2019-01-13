<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Book;

class BookController extends Controller
{
    public function actionIndex()
    {
        $query = Book::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $booklist = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'booklist' => $booklist,
            'pagination' => $pagination,
        ]);
    }
}