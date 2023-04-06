<?php

namespace app\controllers;

use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;

class ServiceController extends AppController{

    public function indexAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $services = \R::findAll('service');

        View::setMeta('Список');
        $this->set(compact('services'));
    }

    public function addAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        if (!empty($_POST)) {
            $service = \R::dispense('service');

            $service['title'] = $_POST['title'];
            $service['text'] = $_POST['text'];
            $service['photo_url'] = $_POST['photo_url'];
            $id = \R::store($service);


            redirect(ROOT_URL);
        }

        View::setMeta('Добавить');
    }
    
    public function changeAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $service = \R::findOne('service', 'id = ?', [$_GET['id']]);

        if (!empty($_POST)) {
            $service['title'] = $_POST['title'];
            $service['text'] = $_POST['text'];
            $service['photo_url'] = $_POST['photo_url'];
            $id = \R::store($service);
        }

        View::setMeta('Изменить');
        $this->set(compact('service'));
    }

    public function deleteAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $service = \R::findOne('service', 'id = ?', [$_GET['id']]);

        \R::trash($service);

        redirect();
    }
}
