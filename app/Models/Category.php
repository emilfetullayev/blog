<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
=======
>>>>>>> 1fb30eb95d90b927a3f7eff853e94aa401e0de25

class Category extends Model
{
    use HasFactory;
<<<<<<< HEAD
    use SoftDeletes;
    protected $table="categories";
    protected $fillable = ['title'];
=======
    protected $table='categories';
    protected $guarded=false;
>>>>>>> 1fb30eb95d90b927a3f7eff853e94aa401e0de25
}
