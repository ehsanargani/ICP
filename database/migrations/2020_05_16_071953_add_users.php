<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
              $table->string('co_name')->nullable();
              $table->string('sh_num')->nullable();
              $table->string('fax_num')->nullable();
              $table->string('meli_num')->nullable();
              $table->string('post_num')->nullable();
              $table->string('eghtesadi_num')->nullable();
              $table->string('sabt_num')->nullable();
              $table->string('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
              $table->string('co_name')->nullable();
              $table->string('sh_num')->nullable();
              $table->string('fax_num')->nullable();
              $table->string('meli_num')->nullable();
              $table->string('post_num')->nullable();
              $table->string('eghtesadi_num')->nullable();
              $table->string('sabt_num')->nullable();
              $table->string('address')->nullable();
        });
    }
}
