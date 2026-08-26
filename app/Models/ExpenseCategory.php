<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpenseCategory extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class, 'expense_categorie_id');
    }
=======

class ExpenseCategory extends Model
{

>>>>>>> c615ac609b4d1cb2049e925f505382be6af17ae3
}
