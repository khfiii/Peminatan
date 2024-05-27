<?php

use App\Models\Peserta;
use App\Models\Soal;
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
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Peserta::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Soal::class)->constrained()->cascadeOnDelete();
            $table->boolean('status_jawaban')->default(false);
            $table->double('nilai_peserta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawabans');
    }
};
