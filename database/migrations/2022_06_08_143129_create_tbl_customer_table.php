<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> string('name_customer');
            $table -> string('phone_customer');
            $table -> string('email_customer');
            $table -> string('password_customer');
            $table -> string('address_customer');
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
        Schema::dropIfExists('tbl_customer');
    }
}
