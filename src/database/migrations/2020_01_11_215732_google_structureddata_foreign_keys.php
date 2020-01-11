<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GoogleStructureddataForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_site_schema_org', function (Blueprint $table) {
            $table->foreign('site_id')->references('id')->on('web_site');
        });

        Schema::table('actions', function (Blueprint $table) {
            $table->foreign('web_site_id')->references('id')->on('web_site_schema_org');
            $table->foreign('action_id')->references('id')->on('action');
        });

        Schema::table('web_site_google', function (Blueprint $table) {
            $table->foreign('site_id')->references('id')->on('web_site');
        });

        Schema::table('potential_action _google', function (Blueprint $table) {
            $table->foreign('google_web_site')->references('id')->on('web_site_google');
            $table->foreign('google_search_action_id')->references('in')->on('search_action_google');
        });

        Schema::table('web_site', function (Blueprint $table) {
            $table->foreign('thing_id')->references('id')->on('thing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_site_schema_org', function (Blueprint $table) {
            $table->dropForeign('web_site_schema_org_site_id_foreign');
        });

        Schema::table('actions', function (Blueprint $table) {
            $table->dropForeign('actions_web_site_id_foreign');
            $table->dropForeign('actions_action_id_foreign');
        });

        Schema::table('web_site_google', function (Blueprint $table) {
            $table->dropForeign('web_site_google_site_id_foreign');
        });

        Schema::table('potential_action _google', function (Blueprint $table) {
            $table->dropForeign('potential_action _google_google_web_site_foreign');
            $table->dropForeign('potential_action _google_google_search_action_id_foreign');
        });

        Schema::table('web_site', function (Blueprint $table) {
            $table->dropForeign('web_site_thing_id_foreign');
        });
    }
}
