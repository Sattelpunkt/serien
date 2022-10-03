<?php

namespace App\Controllers;

use Core\MainController;

class ErrorController extends MainController
{

    public function notFound($params = [])
    {
        $this->view->setContentTemplate('error');
        $this->view->setOutput(['errormsg' => "Die angeforderte Seite wurde nicht gefunden"]);
        $this->view->render();
    }

}
