<?php

use Illuminate\Database\Seeder;
use App\Kit; // Asegúrate de que el modelo Kit exista en app/Kit.php

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Registro de los tres kits de prueba
        Kit::create([
            'name' => 'Starter Kit'
        ]);

        Kit::create([
            'name' => 'Educational Robotics Kit'
        ]);

        Kit::create([
            'name' => 'Advanced Kit'
        ]);
    }
}
