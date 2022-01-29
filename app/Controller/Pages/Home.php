<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home{

    /**
     * Método responsavel por retornar o conteúdo (view da home)
     * @return string
    */
    public static function getHome(){
        return View::render('pages/home');
    }
}