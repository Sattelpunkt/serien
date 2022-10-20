<?php

namespace App\Models;

use Core\MainModel;
use App\Library\Users;
use App\Library\Genres;


class GenreModel extends MainModel
{

    public function insertGenre($data)
    {
        $genres = new Genres();
        return $genres->insertGenre($data);

    }


}

