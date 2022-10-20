<?php

namespace App\Controllers;

use Core\MainController;
use Core\Helpers;
use Core\Security;
use Core\Router;
use Core\Session;


class GenreController extends MainController
{

    public function settings($params = [])
    {
        $genreData['genre'] = $this->model->getGenreByUserID();
        $this->view->setContentTemplate('genreSettings');
        $this->view->setOutput($genreData);
        $this->view->render();

    }

    public function newGenre($params = [])
    {
        $this->view->setContentTemplate('genreNew');
        $this->view->render();
    }

    public function insertGenre($params = [])
    {
        if($this->model->insertGenre(Security::clean($_POST))) {
            Session::addMSG('success', 'Genre angelegt');
        } else {
            Session::addMSG('danger', 'Genre wurde nicht angelegt');
        }
        Router::redirect('genre/settings/');
    }


}
