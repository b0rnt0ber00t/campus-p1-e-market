<?php

use App\Models\Order\Transaction;
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
        Schema::create('snaps', function (Blueprint $table) {
            $table->id();
            $table->integer('status_code');
            $table->integer('gross_amount');
            $table->string('transaction_status');
            $table->dateTime('transaction_time');
            $table->string('va_numbers');
            $table->string('transaction_id')->index();
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
        Schema::dropIfExists('snaps');
    }
};
