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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('facultyNumber');
            $table->string('role')->default(0);
            $table->string('position')->default('new_user');

            $table->string('contactnumber')->default('Add Your Contact Number Here.');
            $table->string('address')->default('Add Your Address Here.');
            $table->string('aboutme')->default('Add Something About Yourself Here.');
            $table->string('subjectexpertise')->default('Add Your Subject of Expertise Here.');
            $table->string('image')->default('public/portfolios/defaultpfp.png');
            
            $table->string('yeargraduated')->default('Edit.');
            $table->string('collegename')->default('Add Information Here.');
            $table->string('teachercollegecourse')->default('Bachelor of Science in (edit.)');


            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
