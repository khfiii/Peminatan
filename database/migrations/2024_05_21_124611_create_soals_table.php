<?php

use App\Models\Jurusan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id(); 
            $table->foreignIdFor(Jurusan::class)->constrained()->cascadeOnDelete();
            $table->string('nama_soal'); 
            $table->integer('jumlah_soal'); 
            $table->integer('minimal_benar'); 
            $table->integer('total_nilai'); 
            $table->boolean('is_visible')->default(true); 
            $table->double('passing_grade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
