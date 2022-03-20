<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->string('owner_name');
            $table->string('hall_name');
            $table->string('address')->nullable();
            $table->date('created_date')->nullable();
            $table->integer('mobile')->nullable();
            $table->integer('tel')->nullable();
            $table->float('size')->nullable();
            $table->integer('min_count')->nullable();
            $table->integer('max_count')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_users');
    }
};
