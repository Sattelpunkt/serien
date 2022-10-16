<?php

namespace Core;

use App\config;
use Core\Session;

class MainView
{

    private $content;
    private $navigation;
    private $header;
    private $siteTitel;
    private $output = [];

    public function __construct()
    {
        $this->siteTitel = Config::$config['default_site_title'];
        $this->header = Config::$config['default_site_header'];
        $this->navigation = Config::$config['default_site_navigation'];
        $this->setOutput(['Author' => Config::$config['App_author']]);
        $this->setOutput(['year' => Config::$config['App_year']]);


    }

    public function setContentTemplate($content)
    {
        $this->content = $content;
    }

    public function setSiteTitle($title)
    {
        $this->siteTitel = $title;
    }

    public function printHeader()
    {
        $fullPath = PROOT . 'App' . DS . 'Views' . DS . 'parts' . DS . $this->header . '.php';
        if (file_exists($fullPath)) {
            include($fullPath);
        } else {
            echo "<br /><b>Fehler:</b> Header wurde nicht gefunden";
        }
    }

    public function printNavigation()
    {
        $fullPath = PROOT . 'App' . DS . 'Views' . DS . 'parts' . DS . $this->navigation . '.php';
        if (file_exists($fullPath)) {
            include($fullPath);
        } else {
            echo "<br /><b>Fehler:</b> Navigation wurde nicht gefunden";
        }
    }

    public function render()
    {
        ob_start();
        $fullPath = PROOT . 'App' . DS . 'Views' . DS . $this->content . '.php';
        if (file_exists($fullPath)) {
            include($fullPath);
        } else {
            echo "<br /><b>Fehler:</b> Content wurde nicht gefunden";
        }
    }

    public function setOutput($data)
    {
        $this->output = array_merge($this->output, $data);
    }


    public function displayMSG()
    {
        foreach (Session::getMSGs() as $key => $values) {
            foreach ($values as $value) {
                echo '
                <div class="alert alert-' . $key . '" role="alert">
                <center>' . $value . '</center>
                </div>
                ';
            }
        }
        Session::deleteMSGs();
    }


}