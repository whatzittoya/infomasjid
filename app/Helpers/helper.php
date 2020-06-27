<?php

namespace App\Helpers;

class Helper
{
    public function generatePassword()
    {
        return mt_rand(100000, 999999);
    }
}
