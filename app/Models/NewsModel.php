<?php

namespace App\Models;

use CodeIgniter\Model;

// It creates a new model by extending CodeIgniter\Model and 
// loads the database library. 
// This will make the database class available through 
// the $this->db object.

class NewsModel extends Model
{
    protected $table = 'news';

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
}
