<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $attributes = ['status' => 'Moderation'];
    public $timestamps = false;
}
