<?php

namespace Database\Seeders;

use App\Models\Style;
use Illuminate\Database\Seeder;

class Styles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parts = [
            "Natural/Esportivo",
            "Tradicional",
            "Refinado",
            "Romântico",
            "Sexy",
            "Dramático urbano",
            "Criativo"
        ];
        foreach ($parts as $part) {
            Style::create([
                'name' => $part
            ]);
        }
    }
}
