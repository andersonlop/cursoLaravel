<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista ()
    {
        return (object) [
            'nome'=>'Anderson',
            'tel'=>'16 99291-1729'
        ];
    }
}
