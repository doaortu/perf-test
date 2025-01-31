<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todo_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('group_id');
            $table->boolean('active')->default(true);
            $table->string('priority')->nullable();
            $table->timestamps();

            $table->foreign('group_id')->references('id')->on('todo_list_groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_items');
    }
};
