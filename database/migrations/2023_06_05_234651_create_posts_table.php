<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title', 100);
            $table->text('description');
            $table->string('company', 100);
            $table->string('website')->nullable();
            $table->unsignedSmallInteger('status');
            $table->unsignedSmallInteger('type');
            $table->json('tags');
            $table->string('slug')->unique()->nullable();
            $table->string('link')->nullable();
            $table->json('details');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
