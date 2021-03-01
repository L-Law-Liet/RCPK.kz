<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LocalizationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organization_blocks', function (Blueprint $table){
            $table->string('title_kz')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title');
            $table->string('info1_kz')->nullable()->after('info1');
            $table->string('info1_en')->nullable()->after('info1');
            $table->string('info2_kz')->nullable()->after('info2');
            $table->string('info2_en')->nullable()->after('info2');
        });
        Schema::table('articles', function (Blueprint $table){
            $table->string('title_kz')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title');
            $table->longText('paragraph1_kz')->nullable()->after('paragraph1');
            $table->longText('paragraph1_en')->nullable()->after('paragraph1');
        });
        Schema::table('vacancies', function (Blueprint $table){
            $table->text('title_kz')->nullable()->after('title');
            $table->text('title_en')->nullable()->after('title');
            $table->longText('body_kz')->nullable()->after('body');
            $table->longText('body_en')->nullable()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organization_blocks', function (Blueprint $table){
            $table->dropColumn(['title_kz', 'title_en', 'info1_kz', 'info1_en', 'info2_kz', 'info2_en']);
        });
        Schema::table('articles', function (Blueprint $table){
            $table->dropColumn(['title_kz', 'title_en', 'paragraph1_kz', 'paragraph1_en']);
        });
        Schema::table('vacancies', function (Blueprint $table){
            $table->dropColumn(['title_kz', 'title_en', 'body_kz', 'body_en']);
        });
    }
}
