<?php

namespace  App\Utils;

class View{


    /**
     * Método responsável por retornar oconteudo de uma view
     * @param string $view
     * @return string
    */
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar oconteudo renderizado de uma view
     * @param string $view
     * @return string
    */
    public static function render($view){
        //CONTEUDO DA VIEW
        $contentView = self::getContentView($view);

        //RETORNA O CONTEUDO DA VIEW RENDERIZADO
        return $contentView;

    }
}