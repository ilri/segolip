<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Sanger Sequencing',
            'description' => 'One-directional Sequencing',
            'cost' => '6 per reaction',
            'price' => 6,
        ]);
        Service::create([
            'name' => 'Sanger Sequencing',
            'description' => 'Two-directional Sequencing',
            'cost' => '12 per reaction',
            'price' => 12,
        ]);
        Service::create([
            'name' => 'Fragment Analysis',
            'description' => 'Ready to process plate(48wells)',
            'cost' => '65 (half plate)',
            'price' => 65,
        ]);
        Service::create([
            'name' => 'Fragment Analysis',
            'description' => 'Ready to process plate(96wells)',
            'cost' => '130 (full plate)',
            'price' => 130,
        ]);
        Service::create([
            'name' => 'KASP Genotyping',
            'description' => 'Data Point',
            'cost' => '0.81 Per Data Point',
            'price' => 0.81,
        ]);
        Service::create([
            'name' => 'Primer Design',
            'description' => 'Design per primer',
            'cost' => '20 Per Primer',
            'price' => 20,
        ]);
        Service::create([
            'name' => 'Primer Design & validation',
            'description' => 'Design & validation per primer',
            'cost' => '50 Per primer',
            'price' => 50,
        ]);
        Service::create([
            'name' => 'DNA/RNA Extraction',
            'description' => 'Extraction per sample',
            'cost' => '3 Per sample',
            'price' => 3,
        ]);
        Service::create([
            'name' => 'Consolidated primer ordering',
            'description' => 'Cost per base, depends on preferred synthesis scale',
            'cost' => 'Variable',
            'price' => 0,
        ]);
    }
}
