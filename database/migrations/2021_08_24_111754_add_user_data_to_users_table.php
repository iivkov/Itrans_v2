<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->string('vat')->after('surname')->unique();
            $table->string('telephone')->after('email');
            $table->string('address')->after('telephone');
            $table->string('postal_code')->after('address');
            $table->string('town')->after('postal_code');
            $table->string('country')->after('town');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('vat');
            $table->dropColumn('telephone');
            $table->dropColumn('address');
            $table->dropColumn('postal_code');
            $table->dropColumn('town');
            $table->dropColumn('country');
        });
    }
}
