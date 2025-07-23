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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->string('no_of_client');
            $table->string('client_title');
            $table->string('client_desc');
            $table->string('no_of_project');
            $table->string('project_title');
            $table->string('project_desc');
            $table->string('no_of_hours');
            $table->string('hours_title');
            $table->string('hours_desc');
            $table->string('no_of_workers');
            $table->string('worker_title');
            $table->string('worker_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
