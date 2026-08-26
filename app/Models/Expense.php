<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $fillable = [
        'user_id',
        'expense_categorie_id',
        'amount',
        'description',
        'expense_Date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function expenseCategorie(): BelongsTo
    {
        return $this->belongsTo(ExpenseCategory::class,'expense_categorie_id');
    }
=======

class Expense extends Model
{
    //
>>>>>>> c615ac609b4d1cb2049e925f505382be6af17ae3
}
