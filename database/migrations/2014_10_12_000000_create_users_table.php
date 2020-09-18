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
            $table->integer('isadmin')->default(0);
            $table->float('account_balance',12,2)->default(0.00);
            $table->float('earned_total', 12, 2)->default(0.00);
            $table->float('pending_withdrawal', 12, 2)->default(0.00);
            $table->float('active_deposit', 12, 2)->default(0.00);
            $table->float('withdraw_total', 12, 2)->default(0.00);
            $table->float('company_bonus', 12, 2)->default(0.00);
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
