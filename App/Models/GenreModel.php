<?php

namespace App\Models;

use Core\MainModel;
use App\Library\Users;
use App\Library\Genres;
use Core\Security;
use Core\Session;


class GenreModel extends MainModel
{

    public function insertGenre($data)
    {
        $genres = new Genres();
        return $genres->insertGenre($data);

    }
    public function getGenreByUserID(){
        $genres = new Genres();
        return $genres->getGenreByUserID(Security::clean(Session::get('userID')));

    }


}

