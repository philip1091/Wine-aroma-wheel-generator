<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhiteWine extends Model
{
     protected $fillable = ['sku','citrusFruit','stoneFruit','tropicalFruit','honey','sweetness','Body','Creamness','Minerality','herbalGreen','Floral'];
}
