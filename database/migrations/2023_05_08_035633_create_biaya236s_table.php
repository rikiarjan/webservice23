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
        Schema::create('biaya236s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konsumen', 50);
            $table->string('email_konsumen', 50);
            $table->string('jumlah_biaya', 200);
            $table->timestamp('tanggal_transaksi')->useCurrent();
            $table->string('keterangan', 1000);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya236s');
    }
};
