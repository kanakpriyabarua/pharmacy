<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('product_id')->constrained('products'); // Lux
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->enum('transaction_type', ['Cash', 'Due', 'Cheque']);
            
            $table->string('unit', 50)->nullable();
            $table->integer('total_quantity');
            $table->float('total_amount');
            $table->float('unit_price');

            $table->float('paid_amount')->nullable();
            $table->float('due_amount')->nullable();
            $table->date('due_paid_date')->nullable();
            $table->text('description')->nullable();
            $table->date('purchase_date');
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
        Schema::dropIfExists('purchases');
    }
}
