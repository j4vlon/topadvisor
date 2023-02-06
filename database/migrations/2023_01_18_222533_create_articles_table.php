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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Admin\Member::class);
            $table->string('title');
            $table->string('slug');
//            $table->string('descr_title');
            $table->longText('descr');
//            $table->longText('descr2');
//            $table->string('img_author');
//            $table->longText('default_txt');
            $table->string('file_url');
//            $table->string('descr_img');
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
        Schema::dropIfExists('articles');
    }
};
