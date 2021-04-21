<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsTablePeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->string('fullName', 100);
            $table->string('document', 12)->unique();
            $table->date('birthDate');
            $table->string('cellPhone', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->dropColumn('fullName');
            $table->dropColumn('document');
            $table->dropColumn('birthDate');
            $table->dropColumn('cellPhone');
        });
    }
}
