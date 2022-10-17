<?php

namespace Core;

class Security
{
    public static function clean($dirty)
    {
        if (is_array($dirty)) {
            foreach ($dirty as $field => $value) {
                $data[$field] = htmlentities(trim($value), ENT_QUOTES, "UTF-8");
            }
            return $data;

        } else {
            return htmlentities(trim($dirty), ENT_QUOTES, "UTF-8");
        }
    }
}