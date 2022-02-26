<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aqib = Person::factory()->create(['name' => 'Aqib']);
        Person::factory()
            ->count(3)
            ->create(['father_id' => $aqib->id])
            ->each(function ($child) {
                Person::factory()
                    ->count(4)
                    ->create(['father_id' => $child->id])
                    ->each(function ($child1) {
                        Person::factory()
                            ->count(2)
                            ->create(['father_id' => $child1->id])
                            ->each(function ($child2) {
                                Person::factory()
                                    ->count(4)
                                    ->create(['father_id' => $child2->id])
                                    ->each(function ($child2) {
                                        Person::factory()
                                            ->count(5)
                                            ->create([
                                                'father_id' => $child2->id
                                            ])
                                            ->each(function ($child2) {
                                                Person::factory()
                                                    ->count(2)
                                                    ->create([
                                                        'father_id' =>
                                                            $child2->id
                                                    ]);
                                            });
                                    });
                            });
                    });
            });
    }
}
