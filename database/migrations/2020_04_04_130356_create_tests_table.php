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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('token', 20)->unique();
            $table->string('name', 150);
            $table->text('description', 500)->nullable();
            $table->text('instruction', 10000)->nullable();
//            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('access')->default('free');
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
        Schema::dropIfExists('tests');
    }
};
