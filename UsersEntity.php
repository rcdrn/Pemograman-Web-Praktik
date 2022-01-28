<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Users extends Entity
{
    public function setPassword(string $pass)
    {
        $salt = uniqid('', true);
        $this->attributes['password'] = md5($pass);

        return $this;
    }
}
