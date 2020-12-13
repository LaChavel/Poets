<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CirclePeoets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP TABLE IF EXISTS Poets");
        DB::statement("CREATE TABLE Poets(
            poetcode int(11) NOT NULL AUTO_INCREMENT,
            firstname varchar(30) DEFAULT NULL,
            surname varchar(40) DEFAULT NULL,
            adress varchar(100) DEFAULT NULL,
            postcode varchar(20) DEFAULT NULL,
            telephonenumber varchar(30) DEFAULT NULL,
            PRIMARY KEY (poetcode)
        )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE IF EXISTS Poets");
    }
}
