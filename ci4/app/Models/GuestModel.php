<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestsModel extends Model
{
    protected $table = 'myguests';
    protected $allowedFields = ['name', 'email', 'website', 'comment', 'gender'];

    public function getGuest($email = false)
    {
        if ($email === false) {
            return $this->findAll();
        }

        return $this->where(['email' => $email])->first();
    }
}