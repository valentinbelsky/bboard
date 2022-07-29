<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bb extends Model
{
    use HasFactory; //данный трейт, используется для автоматизированного тестирования (можно удалить)
    protected $fillable = ['title', 'content', 'price'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
