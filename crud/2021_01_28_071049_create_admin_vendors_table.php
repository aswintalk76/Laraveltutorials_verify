<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_vendors', function (Blueprint $table) {
            $table->id();
            $table->string('adminvendor_name');
            $table->string('adminvendor_email');
            $table->string('adminvendor_number');
            $table->string('adminvendor_usertype');
            $table->string('adminvendor_image');
            $table->bigint('status');
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
        Schema::dropIfExists('admin_vendors');
    }
}
