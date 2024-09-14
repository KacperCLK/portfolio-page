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
        Schema::create('v_p__members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_image_url');
            $table->string('vector_image_url');
            $table->string('member_git_link');
            $table->boolean('displaying');
            $table->string('member_color');
            $table->string('member_short_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('v_p__members');
    }
};
