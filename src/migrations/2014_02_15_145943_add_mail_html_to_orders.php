<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMailHtmlToOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		 Schema::table('orders', function($table)
        {
                $table->string('mail_html');
				});

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders', function($table)
		{
			 $table->dropColumn('mail_html');
		});

	}

}
