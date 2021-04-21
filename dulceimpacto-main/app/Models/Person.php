<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'document',
        'birthDate',
        'cellPhone',
        'direction',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
