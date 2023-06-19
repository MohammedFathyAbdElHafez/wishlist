<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        $variables = [
            [
                'name' => 'item 1',
                'price' => '50.00',
                'seller' => 'Radioshake',
            ],
            [
                'name' => 'item 2',
                'price' => '60.00',
                'seller' => 'BM',
            ],
            [
                'name' => 'item 3',
                'price' => '38.00',
                'seller' => 'BIM',
            ],
            [
                'name' => 'item 4',
                'price' => '30.00',
                'seller' => 'Thunder',
            ],
            [
                'name' => 'item 5',
                'price' => '80.00',
                'seller' => 'House',
            ],
        ];


        $item = new Item();
        array_map(fn ($variable) => $item->create($variable), $variables);

    }
}
