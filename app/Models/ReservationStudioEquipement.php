<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationStudioEquipement extends Model
{
    use HasFactory;
    protected $fillable = [
        "reservation_id",
        "equipement_id",
        "stock"
    ];

    public function equipement(){
        return $this->belongsTo(Equipement::class);
    }

    public function reservationstudio(){
        return $this->belongsTo(ReservationStudio::class);
    }
}
