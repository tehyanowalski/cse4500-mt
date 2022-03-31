<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases_equipment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('purchases_id')->constrained("purchases")->onDelete('cascade');;
            $table->foreignId('equipment_id')->constrained("equipment")->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases_equipment');
    }
};
