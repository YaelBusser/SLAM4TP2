<?php

namespace controllers;

use utils\Template;

class Test
{
    function Test($id)
    {

        return Template::render("views/test.php", array("id" => $id));
    }
}

?>
