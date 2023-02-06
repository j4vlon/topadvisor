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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Admin\Partner::class);
            $table->foreignIdFor(\App\Models\Admin\Subservice::class);
            $table->foreignIdFor(\App\Models\Admin\Member::class);
            $table->string('title');
            $table->string('slug');
            $table->longText('descr');
            $table->text('short_descr');
//            $table->longText('descr2')->nullable();
//            $table->longText('default_txt')->nullable();
            $table->string('project_img');
//            $table->string('descr_img');
//            $table->string('img_author');
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
        Schema::dropIfExists('projects');
    }
};
