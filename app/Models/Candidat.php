<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    public const CANDIDAT_GENDER_UNKNOWN = 0;
    public const CANDIDAT_GENDER_MALE = 1;
    public const CANDIDAT_GENDER_FEMALE = 2;

    protected $casts = [
        'birthday' => 'datetime',
    ];

    public function annonces()
    {
        return $this->belongsToMany(Annonce::class);
    }

    public function applyFor(Annonce $annonce)
    {
        return $this->annonces()->attach($annonce);
    }

    public function isNotInterestedBy(Annonce $annonce)
    {
        return $this->annonces()->detach($annonce);
    }

    public function hasAppliedFor(Annonce $annonce)
    {
        return $this->whereHas('annonces', function ($query) use ($annonce) {
            return $query->where('annonces.id', '=', $annonce->id);
        })->exists();
    }
}
