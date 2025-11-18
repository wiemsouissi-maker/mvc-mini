<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use Core\BaseController;

class ArticleController extends BaseController
{
    public function index()
    {
        $articles = new ArticleModel();

        $data = [
            "title" => "Mes articles DWM",
            "article" => $articles->all()
        ];
        $this->render("article/index", $data);
    }
}
