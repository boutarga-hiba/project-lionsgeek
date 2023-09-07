<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationClass extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "description",
        "user_id",
        "class_id",
        "start_time",
        "end_time",
        "comment",
        "history"
    ];


    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
