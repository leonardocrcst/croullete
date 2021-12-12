<?php

namespace Database\Seeders;

use App\Models\BodyPart;
use Illuminate\Database\Seeder;

class BodyParts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parts = [
            "Cabeça",
            "Rosto",
            "Orelhas",
            "Nariz",
            "Boca",
            "Pescoço",
            "Ombros",
            "Corpo",
            "Cintura",
            "Quadril",
            "Pernas",
            "Pés"
        ];
        foreach ($parts as $part) {
            BodyPart::create([
                'name' => $part
            ]);
        }
    }
}
