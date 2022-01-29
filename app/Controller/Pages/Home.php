<?php

namespace App\Controller\Pages;


class Home{

    /**
     * Método responsavel por retornar o conteúdo (view da home)
     * @return string
    */
    public static function getHome(){
        return "Olá mundo";
    }
}