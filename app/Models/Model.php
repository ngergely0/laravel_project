<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
 
class Model extends EloquentModel
{
    public $timestamps = false;
 
    protected $fillable = ["name"];
    use HasFactory;
}
 
 