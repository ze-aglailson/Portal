<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page{

    /**
     * Método responsavel por retornar o conteúdo (view da home)
     * @return string
    */
    public static function getHome(){
        //ORGANIZAÇÃO 
        $obOrganization = new Organization;

        //VIEW DA PÁGINA HOME
        $content = View::render('pages/home',[
            "name"          => $obOrganization->name,
            "description"   => $obOrganization->description,
            "site"          =>$obOrganization->site
        ]);

        //RETORNA AVIEW DA PÁGINA
        return parent::getPage("Portal - Home", $content);
    }
}