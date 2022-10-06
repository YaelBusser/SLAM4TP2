<?php
namespace controllers;

use controllers\base\WebController;
use utils\Template;

class ClientController extends WebController
{
    public function liste(){
        return Template::render("views/liste/liste.php");
    }
}