<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['active', 'de_active'];

        foreach ($statuses as $status) {
            Status::create([
                'name' => $status,
            ]);
        }
    }
}
