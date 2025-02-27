<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create ('data keterlambatan', function (Blueprint $table) {
            $table->string('Date')->nullable();
            $table->string ('Hari')->nullable();
            $table->string ('Bulan')->nullable();
            $table->string ('Tahun')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data keterlambatan');
    }
};
