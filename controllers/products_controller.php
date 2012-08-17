<?php

class ProductsController extends StupidController {
	public function index() {
		$this->products = ProductsModel::all();
	}
}