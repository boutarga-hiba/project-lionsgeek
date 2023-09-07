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
        Schema::create('reservation_classes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->foreignId("user_id")->constrained();
            $table->foreignId("classe_id")->constrained();
            // & ce champs va modifier on n'est par sur par le type de integer
            $table->integer("start_time");
            $table->integer("end_time");
            $table->string("comment");
            $table->boolean("history");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_classes');
    }
};
