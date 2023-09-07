<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationStudio extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "description",
        "user_id",
        "studio_id",
        "start_time",
        "end_time",
        "comment",
        "history",
        "content",
    ];

    public function studio(){
        return $this->belongsTo(Studio::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function equipements(){
        return $this->belongsToMany(Equipement::class , "reservation_studio_equipements");
    }

    // & la relatiion entre reservation studio et team
    public function teams(){
        return $this->hasMany(Team::class);
    }
}
