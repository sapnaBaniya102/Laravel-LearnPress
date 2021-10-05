<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable=(
        [ 'name', 'header', 'sub_heading','text','img_link','btn','btnlink', 'status',]
    );
}
