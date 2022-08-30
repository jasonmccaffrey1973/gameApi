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
        if (!Schema::hasTable('characters')) {
            Schema::create('characters', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('UserId');
                $table->string('Name', 255);
                $table->unsignedInteger('Level');
                $table->unsignedInteger('ExperiencePoints');
                $table->unsignedInteger('Strength');
                $table->unsignedInteger('Dexterity');
                $table->unsignedInteger('Constitution');
                $table->unsignedInteger('Intelligence');
                $table->unsignedInteger('Wisdom');
                $table->unsignedInteger('Chrisma');
                $table->unsignedInteger('ArmorClass');
                $table->Integer('Initiative');
                $table->unsignedInteger('Speed');
                $table->unsignedInteger('HitPoints');
                $table->unsignedInteger('ManaPoints');
                $table->unsignedInteger('Experience');
                $table->timestamps();
                $table->foreign('UserId')->references('id')->on('users');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
