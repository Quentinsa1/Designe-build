<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('offres', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->string('contrat');
        $table->string('qualifications')->nullable();
        $table->string('experience')->nullable();
        $table->string('localisation');
        $table->text('description');
        $table->text('avantages')->nullable();
        $table->string('lien_postulation')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
