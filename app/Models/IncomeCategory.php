<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IncomeCategory extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    public function incomes(): HasMany
    {
        return $this->hasMany(Income::class, 'income_categorie_id');
    }
}
