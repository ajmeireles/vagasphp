<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->unsignedSmallInteger('specification')->index();
            $table->unsignedSmallInteger('status');
            $table->unsignedSmallInteger('type');
            $table->unsignedSmallInteger('model');
            $table->string('title', 100);
            $table->text('description');
            $table->json('company');
            $table->unsignedSmallInteger('modality');
            $table->string('link')->nullable();
            $table->json('remuneration');
            $table->json('requirement');
            $table->string('notification')->nullable();
            $table->json('configuration');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
