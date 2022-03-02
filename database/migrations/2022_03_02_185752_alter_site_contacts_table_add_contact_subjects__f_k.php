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
        //Create the contact_subject_id column on the site_contacts table
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('contact_subject_id');
        });

        //Copy data from the contact_subject column into the contact_subject_id column.
        DB::statement('update site_contacts set contact_subject_id = contact_subject');

        /*
        * Add the foreign key constraint to the contact_subject_id column referencing the id on the contact_subjects table
        * Removes the contact_subject column since it's no longer useful.
        */
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->foreign('contact_subject_id')->references('id')->on('contact_subjects');
            $table->dropColumn('contact_subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Recreates the contact_subject column
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->integer('contact_subject');
            $table->dropForeign(['contact_subject_id']);
        });

        //Repopulate the contact_subject column with info from the contact_subject_id column
        DB::statement('update contact_subjects set contact_subject = contact_subject_id');

        //Remove the contact_subject_id column
        $Schema::table('site_contacts', function (Blueprint $table) {
            $table->dropColumn('contact_subject_id');
        });
    }
};
