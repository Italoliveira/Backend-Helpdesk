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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('description');
            $table->foreignId('topic_id')->constrained('topics');
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->enum('status', [ 'open', 'closed', 'canceled']);
            $table->longText('response')->nullable();
            $table->longText('solution')->nullable();
            $table->foreignId('responsible_id')->constrained('users');
            $table->timestamp('closed_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
