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
        if (!Schema::hasTable('characterMetas')) {
            Schema::create('characterMetas', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('CharacterId');
                $table->string('MetaKey', 250)->nullable();
                $table->string('MetaValue', 250)->nullable();
                $table->timestamps();

                $table->foreign('CharacterId')->references('id')->on('characters');
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
        Schema::dropIfExists('character_metas');
    }
};
