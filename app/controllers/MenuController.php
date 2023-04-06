<?php

namespace app\controllers;

use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;

class MenuController extends AppController{

    public function indexAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $menu = \R::findAll('menu');

        View::setMeta('Список');
        $this->set(compact('menu'));
    }

    public function addAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        if (!empty($_POST)) {
            $menu = \R::dispense('menu');

            $menu['title'] = $_POST['title'];
            $menu['url'] = $_POST['url'];
            $id = \R::store($menu);


            redirect(ROOT_URL);
        }

        View::setMeta('Добавить');
    }
    
    public function changeAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $menu = \R::findOne('menu', 'id = ?', [$_GET['id']]);

        if (!empty($_POST)) {
            $menu['title'] = $_POST['title'];
            $menu['url'] = $_POST['url'];
            $id = \R::store($menu);
        }

        View::setMeta('Изменить');
        $this->set(compact('menu'));
    }

    public function deleteAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $menu = \R::findOne('menu', 'id = ?', [$_GET['id']]);

        \R::trash($menu);

        redirect();
    }
}
