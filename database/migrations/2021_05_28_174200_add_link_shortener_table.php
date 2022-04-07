<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkShortenerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link', function (Blueprint $table) {
            $table->id();
            $table->string('uploader_ip_address');
            $table->string('shortened_link');
            $table->string('original_link');
            $table->timestamps();
        });
    }
}
