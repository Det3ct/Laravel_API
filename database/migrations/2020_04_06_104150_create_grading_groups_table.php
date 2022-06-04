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
        Schema::create('grading_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variation_id')->nullable()->default(null)->constrained()->onDelete('set null');
            $table->string('type');
            $table->boolean('exposed')->default(true);
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
        Schema::dropIfExists('grading_groups');
    }
};
