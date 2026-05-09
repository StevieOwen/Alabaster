<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->string("pub_id")->primary();
            $table->string('pub_caption');
            $table->string('pub_category');
            $table->string('publisher');
            $table->foreign('publisher')->references('user_id')->on('users')->onDelete('cascade');
            $table->integer('pub_comment_num')->default(0);
            $table->integer('pub_like_num')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
