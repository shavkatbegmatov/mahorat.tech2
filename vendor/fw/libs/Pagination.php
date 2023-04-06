<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 24.03.2018
 * Time: 11:46
 */

namespace fw\libs;


class Pagination
{

    public $currentPage;
    public $perpage;
    public $total;
    public $countPages;
    public $uri;

    public function __construct($page, $perpage, $total){
        $this->perpage = $perpage;
        $this->total = $total;
        $this->countPages = $this->getCountPages();
        $this->currentPage = $this->getCurrentPage($page);
        $this->uri = $this->getParams();
    }

    public function __toString(){
        return $this->getHtml();
    }

    public function getHtml(){
        $back = null; // ссылка НАЗАД
        $forward = null; // ссылка ВПЕРЕД
        $startpage = null; // ссылка В НАЧАЛО
        $endpage = null; // ссылка В КОНЕЦ
        $page2left = null; // вторая страница слева
        $page1left = null; // первая страница слева
        $page2right = null; // вторая страница справа
        $page1right = null; // первая страница справа

        if( $this->currentPage > 1 ){
            $back = "<a class='button' href='{$this->uri}page=" .($this->currentPage - 1). "'><i class='fa-solid fa-angle-left'></i></a>";
        }

        if( $this->currentPage < $this->countPages ){
            $forward = "<a class='button' href='{$this->uri}page=" .($this->currentPage + 1). "'><i class='fa-solid fa-angle-right'></i></a>";
        }

        if( $this->currentPage > 3 ){
            $startpage = "<a class='button' href='{$this->uri}page=1'><i class='fa-solid fa-angles-left'></i></a>";
        }
        if( $this->currentPage < ($this->countPages - 2) ){
            $endpage = "<a class='button' href='{$this->uri}page={$this->countPages}'><i class='fa-solid fa-angles-right'></i></a>";
        }
        if( $this->currentPage - 2 > 0 ){
            $page2left = "<a class='button' href='{$this->uri}page=" .($this->currentPage-2). "'>" .($this->currentPage - 2). "</a>";
        }
        if( $this->currentPage - 1 > 0 ){
            $page1left = "<a class='button' href='{$this->uri}page=" .($this->currentPage-1). "'>" .($this->currentPage-1). "</a>";
        }
        if( $this->currentPage + 1 <= $this->countPages ){
            $page1right = "<a class='button' href='{$this->uri}page=" .($this->currentPage + 1). "'>" .($this->currentPage+1). "</a>";
        }
        if( $this->currentPage + 2 <= $this->countPages ){
            $page2right = "<a class='button' href='{$this->uri}page=" .($this->currentPage + 2). "'>" .($this->currentPage + 2). "</a>";
        }

        return '<div style="text-align: center;">' . $startpage . ' ' . $back . ' ' . $page2left . ' ' . $page1left . ' <a class="button blue"> ' . $this->currentPage . '</a>' . ' ' . $page1right . ' ' . $page2right . ' ' .$forward . ' '. $endpage . '</div>';
    }

    public function getCountPages(){
        return ceil($this->total / $this->perpage) ?: 1;
    }

    public function getCurrentPage($page){
        if(!$page || $page < 1) $page = 1;
        if($page > $this->countPages) $page = $this->countPages;
        return $page;
    }

    public function getStart(){
        return ($this->currentPage - 1) * $this->perpage;
    }

    public function getParams(){
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $uri = $url[0] . '?';
        if(isset($url[1]) && $url[1] != ''){
            $params = explode('&', $url[1]);
            foreach($params as $param){
                if(!preg_match("#page=#", $param)) $uri .= "{$param}&amp;";
            }
        }
        return $uri;
    }
}