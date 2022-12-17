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
        Schema::create('rentlogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id');
            // $table->boolean('status')->nullable()->default(false);
            $table->date('waktu_pinjam');
            $table->date('waktu_kembalikan');
            $table->date('waktu_pasti_kembalikan');
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
        Schema::dropIfExists('rentlogs');
    }
};
