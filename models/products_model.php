<?php

class ProductsModel extends StupidModel {
	public static function all() {
		// mysql_query_and_fetch is defined in lib/global_functions.php
		return mysql_query_and_fetch('select * from products');
	}
}