<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
			'name'  => 'Sales']);
		$category2 = Category::create([
			'name'  => 'IT']);
		$category3 = Category::create([
			'name'  => 'Accounts']);
    }
}
