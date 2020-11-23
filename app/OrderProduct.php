<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    public function product() {
        return $this->hasOne('App\Product', 'id','product_id'); //одному продукту может принадлежать несколько картинок из ProductImage.php
    }
}
