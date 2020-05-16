<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_number');
            $table->foreign('id_number')->references('id_number')->on('students');
            $table->string('transaction_id');
            $table->decimal('account_balance',10,2)->default(0);
            $table->binary('hold')->default(0);
            $table->string('account_type');
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
        Schema::dropIfExists('finance');
    }
}
