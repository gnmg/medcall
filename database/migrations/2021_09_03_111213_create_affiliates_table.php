<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliates', function (Blueprint $table) {
            $table->string('company_name');
            $table->string('name');
            $table->string('email');
            $table->string('telephone');
            $table->string('post_code');
            $table->string('address');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('bank_account');
            $table->string('account_type');
            $table->id();
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
        Schema::dropIfExists('affilaite');
    }
}
