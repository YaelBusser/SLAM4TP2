<?php

namespace routes;

use controllers\Account;
use controllers\ProduitsController;
use controllers\SampleWebController;
use controllers\VideoWeb;
use controllers\Test;
use controllers\ClientController;
use models\ProduitsModele;
use routes\base\Route;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $test = new Test();
        $clients = new ClientController();

        Route::Add("/", [$main, "home"]);
        Route::Add("/home", [$main, "home"]);
        Route::Add("/clients/page/{idpage}", [$clients, "liste"]);
        Route::Add("/test/{id}",[$test, "test"]);
        Route::Add("/clients/{clientId}/informations",[$clients, "info"]);
        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

