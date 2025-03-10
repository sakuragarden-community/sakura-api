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
        Schema::create('users', function (Blueprint $table) {
            // laravel default
            $table->id();
            $table->string('name');

            // fields
            $table->string('guild_id');
            $table->string('email')->unique()->nullable();
            $table->string('discord_id');
            $table->string('type')->default(\App\Models\User::TYPE_GUEST);
            $table->string('presentation_link')->nullable();
            $table->string('whatsapp')->nullable();
            $table->integer('exp')->default(0);
            $table->json('statuses')->nullable();
            $table->boolean('is_admin')->default(false);

            // timestamps and remember token
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }
};
