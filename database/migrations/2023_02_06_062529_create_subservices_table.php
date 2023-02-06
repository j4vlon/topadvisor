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
        Schema::create('subservices', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('descr');
            $table->string('descr_title');
            $table->text('default_txt')->nullable();
            $table->string('slug')->unique();
            $table->string('file_url');
            $table->foreignIdFor(\App\Models\Admin\Service::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->boolean('is_active')->nullable();
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
        Schema::dropIfExists('subservices');
    }
};
