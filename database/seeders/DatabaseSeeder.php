<?php

namespace Database\Seeders;

use App\Models\Ore;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        $ore1 = new Ore();
        $ore1->price = '299.99';
        $ore1->label = 'thorium';
        $ore1->desc = 'rare';
        $ore1->date_ = '1586-05-24';
        $ore1->image_path = 'img/thorium_ore.jpg';
        $ore1->save();


        $ore2 = new Ore();
        $ore2->price = '459.99';
        $ore2->label = 'truesilver';
        $ore2->desc = 'brillant';
        $ore2->date_ = '1456-12-04';
        $ore2->image_path = 'img/truesilver_ore.jpg';
        $ore2->save();

        $ore3 = new Ore();
        $ore3->price = '1599.99';
        $ore3->label = 'saronite';
        $ore3->desc = 'Sang de DTA';
        $ore3->date_ = '0186-05-15';
        $ore3->image_path = 'img/saronite_ore.jpg';
        $ore3->save();
    }
}
