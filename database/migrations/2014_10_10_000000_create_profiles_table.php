<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            // $table->foreignId('profile_id')->constrained('users')->onDelete('cascade') ->onUpdate('cascade');
            $table->string('profile_email');
            $table->bigInteger('phone_number');
            $table->string('address');
            $table->string('state');
            $table->integer('pincode');
            $table->timestamps();
        });

        // Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('profiles', function (Blueprint $table) {
        //     $table->dropConstrainedForeignId("profile_id");
        // });
        Schema::dropIfExists('profiles');
    }
}
