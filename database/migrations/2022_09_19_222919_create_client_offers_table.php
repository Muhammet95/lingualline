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
        Schema::create('client_offers', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 512)->unique();
            $table->index('uuid');
            $table->text('user_name')->nullable();
            $table->string('email', 128);
            $table->string('from', 16)->default('english');
            $table->string('to', 16)->default('turkey');
            $table->string('original_filepath', 512);
            $table->string('status', 128);
            $table->string('template_filepath', 512)->nullable();
            $table->string('translate_filepath', 512)->nullable();
            $table->integer('word_count')->default(0);
            $table->float('price')->default(0.0);
            $table->float('tariff')->default(0.03);
            $table->text('translator_name')->nullable();
            $table->text('user_comment')->nullable();
            $table->text('translator_comment')->nullable();
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
        Schema::dropIfExists('client_offers');
    }
};
