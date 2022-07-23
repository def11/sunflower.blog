<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //tipe data varchar = string ; cara mencari tipe data yg lain dengan membuka laravan.com lalu cari type data
            $table->id(); //ini digunakan untuk membuat 1 buah kolom integer dan auto increment
            $table->string('name',100);
            $table->string('image',200);
            $table->timestamps(); //kalau ini untuk membuat 2 buah kolom
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
