<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stage extends Model
{
    use HasFactory;

    protected $table="etudiants_stages";

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_Etudiant', 'id');
    }
}
