<?php

namespace app\controllers;

use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;

class ProductController extends AppController{

    public function indexAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $product = \R::findAll('product');

        View::setMeta('Список');
        $this->set(compact('product'));
    }

    public function addAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        if (!empty($_POST)) {
            $product = \R::dispense('product');

            $product['title'] = $_POST['title'];
            $product['text'] = $_POST['text'];
            $id = \R::store($product);


            redirect(ROOT_URL);
        }

        View::setMeta('Добавить');
    }
    
    public function changeAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $product = \R::findOne('product', 'id = ?', [$_GET['id']]);

        if (!empty($_POST)) {
            $product['title'] = $_POST['title'];
            $product['text'] = $_POST['text'];
            $id = \R::store($product);
        }

        View::setMeta('Изменить');
        $this->set(compact('product'));
    }

    public function deleteAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $product = \R::findOne('product', 'id = ?', [$_GET['id']]);

        \R::trash($product);

        redirect();
    }
}
