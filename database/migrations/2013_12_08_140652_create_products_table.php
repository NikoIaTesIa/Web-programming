<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название продукта');
            $table->string('origin_title')->comment('Оригинальное название продукта');
            $table->string('type')->comment('Тип продукта');
            $table->integer('release_year')->comment('Год выхода продукта');
            $table->integer('episodes_count')->comment('Количество эпизодов');
            $table->string('studio',12,2)->comment('Студия-издатель');
            $table->string('author',12,2)->comment('Автор оригинала');
            $table->integer('age_rating')->comment('Возрастное ограничение продукта');
            $table->string('synopsis', 3000)->comment('Описание продукта');
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
        Schema::dropIfExists('products');
    }
}
