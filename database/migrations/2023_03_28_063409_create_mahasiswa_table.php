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
    public function up(){
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->integer('nim')->primary();
            $table->string('nama', 75);
            $table->string('kelas', 15);
            $table->string('jurusan', 50);
            $table->string('no_handphone', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
