<?php

namespace app\controllers;

use app\models\User;
use fw\core\base\View;

class UserController extends AppController {

    public function indexAction() {
        if (!isset($_SESSION['user'])) {
            redirect('/user/login');
        } else {
            redirect('/about/');
        }
    }

    public function signupAction() {
        $this->layout = 'auth';

        if(!empty($_POST)){
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || !$user->checkUnique()){
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);

            if ($user->save('user')) {
                $_SESSION['success'] = 'Вы успешно зарегистрированы';

                if (isset($_GET['url'])) {
                    redirect(ROOT_URL . '/user/login/?url=' . $_GET['url']);
                }
            } else {
                $_SESSION['error'] = 'Ошибка! Попробуйте позже';
            }

            redirect(ROOT_URL . '/user');
        }

        View::setMeta('Регистрация');
    }

    public function loginAction() {
        $this->layout = 'auth';

        if(!empty($_POST)){
            $user = new User();
            if ($user->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';

                if (isset($_GET['url'])) {
                    redirect($_GET['url']);
                }
            } else {
                $_SESSION['error'] = 'Логин/пароль введены неверно';
            }

            redirect(ROOT_URL . '/user');
        }
        View::setMeta('Вход');
    }

    public function logoutAction() {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect(ROOT_URL . '/user/login');
    }

    public function updateAction() {
        if (isset($_SESSION['user'])) {
            if (!empty($_POST)) {
                $user = \R::load('user', $_SESSION['user']['id']);
                $user['first_name'] = $_POST['first_name'];
                $user['last_name'] = $_POST['last_name'];
                \R::store($user);

                $_SESSION['success'] = 'Сохранено';
            }
        }

        redirect(ROOT_URL . '/user');
    }

    public function passwordAction() {
        if (isset($_SESSION['user'])) {
            if (!empty($_POST)) {
                $user = \R::load('user', $_SESSION['user']['id']);

                $password = \R::findOne('user', 'id = ?', [$_SESSION['user']['id']])['password'];

                if (password_verify($_POST['current_password'], $password)) {
                    if ($_POST['new_password'] == $_POST['verify_new_password']) {
                        if (strlen($_POST['new_password']) >= 6) {
                            $userObj = \R::load('user', $_SESSION['user']['id']);
                            $userObj['password'] = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
                            \R::store($userObj);

                            $_SESSION['success'] = 'Пароль сохранен';
                        } else {
                            $_SESSION['error'] = 'Пароль должен содержать не менее 6 символов';
                        }
                    } else {
                        $_SESSION['error'] = 'Пароли не совпадают';
                    }
                } else {
                    $_SESSION['error'] = 'Пароль введен не верно';
                }


                redirect(ROOT_URL . '/user');
            }
        }
    }

}