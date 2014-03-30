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
			$table->string('payment_status')->default('');
			$table->string('payment_transaction_id')->unique()->nullable();
			$table->string('payment_secret')->default('');
			$table->string('status')->default('');
			$table->string('payment_type')->default('');
			$table->string('delivery_type')->default('');

			$table->string('email')->default('')->nullable();
			$table->string('phone')->default('')->nullable();
			$table->string('title')->default('')->nullable();
			$table->string('firstname')->default('')->nullable();
			$table->string('lastname')->default('')->nullable();
			$table->string('company')->default('')->nullable();
			$table->string('company_uid')->default('')->nullable();
			$table->string('gender')->default('')->nullable();
			$table->string('country')->default('')->nullable();
			$table->string('street')->default('')->nullable();
			$table->string('city')->default('')->nullable();
			$table->string('zip')->default('')->nullable();

			$table->boolean('use_delivery_address')->default(0);
			$table->string('delivery_name')->default('')->nullable();
			$table->string('delivery_country')->default('')->nullable();
			$table->string('delivery_street')->default('')->nullable();
			$table->string('delivery_city')->default('')->nullable();
			$table->string('delivery_zip')->default('')->nullable();
			$table->string('delivery_phone')->default('')->nullable();

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
