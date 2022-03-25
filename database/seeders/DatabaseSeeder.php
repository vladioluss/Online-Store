<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Goods;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Goods::factory(10)->create();
        $this->command->info('Таблица продуктов загружена данными!');

        category::factory(10)->create();
        $this->command->info('Таблица категорий загружена данными!');
    }
}
