<?php

namespace app\controllers;

use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;

class AboutController extends AppController{

    public function indexAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $about = \R::findAll('about');

        View::setMeta('Список');
        $this->set(compact('about'));
    }

    public function addAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        if (!empty($_POST)) {
            $about = \R::dispense('about');

            $about['title'] = $_POST['title'];
            $about['text'] = $_POST['text'];
            $id = \R::store($about);


            redirect(ROOT_URL);
        }

        View::setMeta('Добавить');
    }
    
    public function changeAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $about = \R::findOne('about', 'id = ?', [$_GET['id']]);

        if (!empty($_POST)) {
            $about['title'] = $_POST['title'];
            $about['text'] = $_POST['text'];
            $id = \R::store($about);
        }

        View::setMeta('Изменить');
        $this->set(compact('about'));
    }

    public function deleteAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $about = \R::findOne('about', 'id = ?', [$_GET['id']]);

        \R::trash($about);

        redirect();
    }
}
