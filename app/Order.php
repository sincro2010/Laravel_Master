<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function partner() {
        return $this->hasOne('App\Partner', 'id','partner_id'); //одному продукту может принадлежать несколько картинок из ProductImage.php
    }

    public function orderProduct() {
        return $this->hasMany('App\OrderProduct'); //одному продукту может принадлежать несколько картинок из ProductImage.php
    }
}
