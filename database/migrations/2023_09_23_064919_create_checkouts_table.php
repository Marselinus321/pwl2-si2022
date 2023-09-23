<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up(): void
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id')->constrained();
            $table->foreignid('camp_id')->constrained();
            $table->string('card_number', 20);
            $table->date('expired');
            $table->string('cvc', 3);
            $table->boolean('is_paid')->default(false);
            $table->timestamps(); 
            $table->SoftDeletes();
        });
    }

   /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
};