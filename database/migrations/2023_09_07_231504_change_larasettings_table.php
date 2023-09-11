<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use KonstantinFilin\LaraSettings\Models\Setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('larasettings', function (Blueprint $table) {
            $table->enum('type', Setting::getTypeList())->default(Setting::TYPE_STR);
            $table->string('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('larasettings', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('data');
        });
    }
};
