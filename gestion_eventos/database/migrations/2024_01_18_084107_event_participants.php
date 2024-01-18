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
    {Schema::create('event_participant', function (Blueprint $table) {
        $table->unsignedBigInteger('event_id');
        $table->foreign('event_id')->references('id')->on('users')->onDelete('cascade');
        $table->unsignedBigInteger('participant_id');
        $table->foreign('participant_id')->references('id')->on('users')->onDelete('cascade');
        $table->primary(['event_id', 'participant_id']);
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
