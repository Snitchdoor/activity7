<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration {
    public function up() {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_key');
            $table->string('title');
            $table->string('cover');
            $table->text('content');
            $table->unsignedBigInteger('kit_id');
            $table->unsignedBigInteger('group_id');
            $table->foreign('kit_id')->references('id')->on('kits');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->timestamps();
        });
    }
}
