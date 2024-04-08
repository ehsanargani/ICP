<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cer_type')->nullable();
            $table->string('cer_num')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('buyer')->nullable();
            $table->string('seller')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_code')->nullable();
            $table->string('p_l_no')->nullable();
            $table->string('p_l_date')->nullable();
            $table->string('iran_customs')->nullable();
            $table->string('b_l_no')->nullable();
            $table->string('date_ins')->nullable();
            $table->string('place_ins')->nullable();
            $table->string('cb_no')->nullable();
            $table->string('ins_no')->nullable();
            $table->string('ins_date')->nullable();
            $table->string('pl_pdf')->nullable();
            $table->string('bl_pdf')->nullable();
            $table->string('ic_pdf')->nullable();
            $table->string('acc_pdf')->nullable();
            $table->string('operator_name')->nullable();
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
        Schema::dropIfExists('certifications');
    }
}
