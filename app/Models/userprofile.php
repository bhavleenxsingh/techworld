<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userprofile extends Model
{
    use HasFactory;
    protected $table = "userprofile";
    protected $primaryKey = "email";
}
