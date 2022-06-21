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
        Schema::create('pcs', function (Blueprint $table) {
            $table->increments('pc_id');
            $table->smallInteger('speed');
            $table->smallInteger('pc_ram');
            $table->double('hd');
            $table->string('cd');
            $table->decimal('price', 12,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcs');
    }
};
