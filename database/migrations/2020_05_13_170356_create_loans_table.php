<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_type');
            $table->integer('lender');
            $table->string('interest');
            $table->boolean('admin_fee')->default(TRUE);
            $table->string('minimum_amount');
            $table->string('maximum_amount');
            $table->boolean('salaried')->default(FALSE);
            $table->string('salaried_duration')->nullable();
            $table->boolean('security')->default(TRUE);
            $table->string('security_type')->nullable();
            $table->string('minimum_duration');
            $table->string('maximum_duration');
            $table->text('application_link');
            $table->boolean('deleted')->default(false);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
