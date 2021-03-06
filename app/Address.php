<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Address extends Model
{
    use ValidatingTrait;

    protected $table = 'addresses';

    protected $rules = [
        'user_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'street' => 'required',
        'street_number' => 'required',
        'zip' => 'required',
        'city' => 'required',
        'phone_number' => 'required'
    ];
}

