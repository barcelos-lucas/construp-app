<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        $userId = DB::table('users')->first()->id ?? null;
        $categoryId = DB::table('categories')->first()->id ?? null;

        if ($userId && $categoryId) {
            DB::table('materials')->insert([
                'id' => (string) Str::uuid(),
                'name' => 'Tijolo Baiano',
                'description' => 'Tijolo estrutural 39x19x14cm',
                'brand' => 'Cerâmica Vale do Sol',
                'price' => 1.75,
                'category_id' => $categoryId,
                'user_id' => $userId,
                'type' => 'outros',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
