<?php
/**
 * Created by PhpStorm.
 * User: oleg-d
 * Date: 13.05.18
 * Time: 17:16
 */

namespace app\controllers;

use app\models\Blog;
use app\models\Category;
use app\models\Product;
use app\models\Cart;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\widgets\Breadcrumbs;

class BlogController extends Controller
{

    public function actionIndex()
    {

        $this->view->title = 'Matrasovish.com.ua | Блог';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Блог. Новости. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Новости, блог, Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'index,follow']);

        $data = [];

        $sortOrder = 'date_added DESC';
        $blogsQuery = Blog::getBlogs();
        $pages = new Pagination(['totalCount' => $blogsQuery->count(), 'pageSize' => 12]);
        $pages->pageSizeParam = false;

        $data['blogs'] = $blogsQuery->offset($pages->offset)->orderBy($sortOrder)->limit($pages->limit)->all();
        $data['pages'] = $pages;

        return $this->render('index', $data);
    }

    public function actionBlog()
    {

        $data = [];

        $get = Yii::$app->request->get();

        $blogQuery = Blog::getBlogQueryBySeoUrl($get['blog']);
        $data['blog'] = $blogQuery->one();

        $this->view->title = $data['blog']->blogDescriptions->title;
        $this->view->registerMetaTag(['name' => 'description', 'content' => $data['blog']->blogDescriptions->description . ' - Блог. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => $data['blog']->blogDescriptions->keywords]);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'index,follow']);

        $links = [];
        $links[] = ['label' => 'Блог', 'url' => ['blog/index']];
        $links[] = $data['blog']->blogDescriptions->name;

        $data['breadcrumbs'] = Breadcrumbs::widget([
            'options' => ['class' => 'breadcrumb'],
            'itemTemplate' => "<li>{link}</li>\n",
            'links' => $links,
        ]);

        $data['images'] = $data['blog']->getImages();
        $data['imagesCount'] = count($data['images']);

        return $this->render('blog', $data);
    }

}