<?php

namespace App\controller\pages;

use App\utils\View;
use App\model\entity\Organization;

class Home extends Page{
    //metodo responsavel por retornar o conteudo view da nossa home
    //return string
    public static function getHome(){
        $obOrganization = new Organization;
        
        //view da home
        $content = View::render('pages/home', [
            'name' => $obOrganization->name
        ]);
        //retorna a view da pagina
        return parent::getPage('home-work-project', $content);
    }

}