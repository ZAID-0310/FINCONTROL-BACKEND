<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Income extends Model
{
    protected $fillable = [
        'user_id',
        'income_categories_id',
        'amount',
        'description',
        'income_Date'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function incomeCategorie(): BelongsTo
    {
        return $this->belongsTo(IncomeCategory::class,'income_categories_id');
    }
}
