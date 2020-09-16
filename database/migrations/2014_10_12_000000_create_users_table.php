<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('walletID')->unique();
            $table->string('clientID')->unique();
            $table->string('secret_question');
            $table->string('secret_answer');
            $table->string('account_balance')->default(0);
            $table->string('earned_total')->default(0);
            $table->string('pending_withdrawal')->default(0);
            $table->string('active_deposit')->default(0);
            $table->string('withdraw_total')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
