<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::Now();

        DB::table('attribute_types')->insert([
            [
                'id' => 1,
                'type' => 'Color/Pattern',
            ], [
                'id' => 2,
                'type' => 'Radio',
            ], [
                'id' => 3,
                'type' => 'Select',
            ],
        ]);

        DB::table('attributes')->insert([
            [
                'id' => 1,
                'name' => 'Color',
                'attribute_type_id' => 1,
                'order' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 2,
                'name' => 'Pattern',
                'attribute_type_id' => 1,
                'order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 3,
                'name' => 'Size',
                'attribute_type_id' => 3,
                'order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 4,
                'name' => 'Style',
                'attribute_type_id' => 3,
                'order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 5,
                'name' => 'Gender',
                'attribute_type_id' => 2,
                'order' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 6,
                'name' => 'Format',
                'attribute_type_id' => 3,
                'order' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
