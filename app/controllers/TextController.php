<?php

namespace app\controllers;

use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;

class TextController extends AppController{

    public function indexAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $text = \R::findAll('text');

        View::setMeta('Список');
        $this->set(compact('text'));
    }
    
    public function changeAction() {
        $this->layout = 'dashboard';

        if (!isset($_SESSION['user'])) {
            redirect('/user');
        }

        $text = \R::findOne('text', 'id = ?', [$_GET['id']]);

        if (!empty($_POST)) {
            $text['text'] = $_POST['text'];
            $id = \R::store($text);
        }

        View::setMeta('Изменить');
        $this->set(compact('text'));
    }
}
