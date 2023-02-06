<?php

use App\Models\Admin\Member;
use App\Models\Admin\Partner;
use App\Models\Admin\Subservice;
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
            $table->foreignIdFor(Partner::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Subservice::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Member::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnUpdate();
            $table->string('title');
            $table->string('slug');
            $table->longText('descr');
            $table->text('short_descr');
            $table->string('project_img');
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
