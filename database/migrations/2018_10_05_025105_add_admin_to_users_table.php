<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->nullable()->default(false);
        });

        // add an admin user
        DB::table('users')->insert(
            array(
                'name' => 'superuser',
                'email' => 'superuser@ashbeycabinets.com',
                'is_admin' => true,
                'password' => bcrypt('resurepus')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('email', '=', 'superuser@ashbeycabinets.com')->delete();
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
        });
    }
}
