<?php

namespace App\Repositories;

class LinkRepository
{
    public function generateRandomString(int $stringLength): string
    {
        $strResult = '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz';

        return substr(str_shuffle($strResult),
            0, $stringLength);
    }
}
