<?php

use App\Models\Identity;
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
        Schema::create(with(new Identity)->getTable(), function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('visa_number')->nullable();
            $table->string('visa_issue_date')->nullable();
            $table->string('visa_exp_date')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('passport_exp_date')->nullable();
            $table->string('father')->nullable();
            $table->string('spouse')->nullable();
            $table->string('bra')->nullable();
            $table->string('clearance')->nullable();
            $table->string('clearance_date')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('image')->nullable();

            $table->string('status')->default(Identity::$statusArrays[0]);
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
        Schema::dropIfExists(with(new Identity)->getTable());
    }
};
