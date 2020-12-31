<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liste extends Model
{
    protected $fillable=['user_id','title','description'];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
