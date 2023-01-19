<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['scss', 'html', 'java', 'js', 'css', 'jquery', 'php'];

        foreach ($technologies as $technology) {
            $newtechnology = new Technology();
            $newtechnology->name = $technology;
            $newtechnology->slug = Str::slug($newtechnology->name);
            $newtechnology->save();
        }
    }
}
