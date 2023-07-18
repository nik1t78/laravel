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
        Schema::create('_emolyee', function (Blueprint $table) {
            $table->id();
            $table->string('IO');
            $table->string('Deputy');
            $table->string('Phone1');
            $table->string('E-mail address');
            $table->string('Reception address');
            $table->string('Employee on site');
            $table->string('Phone2');
            $table->string('coordinates');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_emolyee');
    }
};
