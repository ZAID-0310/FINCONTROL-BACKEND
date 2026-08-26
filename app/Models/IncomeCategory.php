<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> c615ac609b4d1cb2049e925f505382be6af17ae3
use Illuminate\Database\Eloquent\Relations\HasMany;

class IncomeCategory extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'user_id',
        'name',
    ];

    public function incomes(): HasMany
    {
        return $this->hasMany(Income::class, 'income_categorie_id');
=======
        'name',
        'user_id'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function incomes(): HasMany
    {
        return $this->hasMany(Income::class);
>>>>>>> c615ac609b4d1cb2049e925f505382be6af17ae3
    }
}
