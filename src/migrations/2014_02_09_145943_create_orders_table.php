<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('orders', function(Blueprint $table) {

			$table->engine = 'MyIsam';

			$table->increments('id');
			$table->string('transaction_id')->unique()->nullable();
			$table->string('order_nr')->unique()->nullable();
			$table->string('invoice_nr')->unique()->nullable();
			$table->text('raw_items_json');
			$table->text('items_json');
			$table->text('log_json');
			$table->decimal('total_price', 5,2);
			$table->integer('total_items');
			$table->string('payment_status');
			$table->string('payment_transaction_id')->unique()->nullable();
			$table->string('payment_secret');
			$table->string('status');
			$table->string('payment_type');
			$table->string('delivery_type');

			$table->string('email');
			$table->string('phone');
			$table->string('title');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('company');
			$table->string('company_uid');
			$table->string('gender');
			$table->string('country');
			$table->string('street');
			$table->string('city');
			$table->string('zip');

			$table->boolean('use_delivery_address');
			$table->string('delivery_name');
			$table->string('delivery_country');
			$table->string('delivery_street');
			$table->string('delivery_city');
			$table->string('delivery_zip');
			$table->string('delivery_phone');

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
		Schema::drop('orders');
	}

}
