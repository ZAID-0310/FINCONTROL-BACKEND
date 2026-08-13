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
        Schema::create('income', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
                                        ->constrained()
                                        ->cascadeOnDelete();
            $table->foreignId('income_category_id') ->constrained('income_categories');
            $table->decimal('amount',10,2);
            $table->string('description');
            $table->date('income_Date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at')->nullable();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income');
    }
};
