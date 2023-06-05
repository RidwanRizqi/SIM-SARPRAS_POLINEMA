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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum(
                'role',
                [
                    'superadmin',
                    'admin',
                    'user',
                ]
            )->default('user');
            $table->foreignId('id_wewenang')->constrained('wewenang');
            $table->string('nama_pj');
            $table->string('ninduk_pj')->unique();
            $table->string('ttd_pj');
            $table->string('nama_dpk')->nullable();
            $table->string('nip_dpk')->nullable()->unique();
            $table->string('ttd_dpk')->nullable();
            $table->string('logo')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
