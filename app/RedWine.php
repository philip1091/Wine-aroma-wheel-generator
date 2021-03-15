<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedWine extends Model
{
    protected $fillable = ['sku','redFruit','blackFruit','floral','herbaceous','pepper','earth','sweetSpice','leather','tannin','body'];
}
