<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
        // & la relatiion entre reservation studi et team
    protected $fillable=[
        "name",
        "reservation_studio_id",
        "history",
    ];

       // & la relatiion entre team et reservation studio
       public function reservationstudio(){
        return $this->belongsTo(reservationstudio::class);
    }
}
