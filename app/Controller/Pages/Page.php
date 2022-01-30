<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page{

    /**
     * Método responsavel por renderizar o conteúdo (view) do header da página
     * @return string
    */
    public static function getHeader(){
        return View::render('pages/header');
    }

    /**
     * Método responsavel por renderizar o conteúdo (view) do footer da página
     * @return string
    */
    public static function getFooter(){
        return View::render('pages/footer');
    }


    /**
     * Método responsavel por retornar o conteúdo (view) da página generica
     * @return string
    */
    public static function getPage($title, $content){
        return View::render('pages/page',[
            "title"     => $title,
            "header"    =>self::getHeader(),
            "content"   => $content,
            "footer"    =>self::getFooter('pages/footer')
        ]);
    }
}