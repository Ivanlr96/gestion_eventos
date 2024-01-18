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
    {Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('organizer_id');
        $table->foreign('organizer_id')->references('id')->on('users')->onDelete('cascade');
        $table->string('nombre_evento');
        $table->date('fecha');
        $table->string('ubicacion');
        $table->timestamp('create_at')->nullable();
        $table->timestamp('update_at')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
