<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()
                                        ->constrained()
                                        ->cascadeOnDelete();


<<<<<<< HEAD
            $table->foreignId('expense_categorie_id') ->constrained('expense_categories');
            $table->decimal('amount',10,2);
            $table->string('description');
            $table->date('expense_Date');
            $table->timestamps();
=======
            $table->foreignId('expense_categories_id') ->constrained('expense_categories');
            $table->decimal('amount',10,2);
            $table->string('description');
            $table->date('expense_Date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
>>>>>>> c615ac609b4d1cb2049e925f505382be6af17ae3
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
