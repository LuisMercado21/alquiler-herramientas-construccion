<?php

namespace Database\Seeders;

use App\Models\Herramientas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HerramientasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Herramientas = [
            [
                'marca'=> 'Black & Decker',
                'nombre' => 'Pistola De Aire Caliente 1500 W',
                'modelo' => 'N/A',
                'precio' => 187900,
                'descripcion' => 'hg1500-b3 pistola de calor con doble temperatura - potencia: 1500w - temperatura: 398°c y 537°c - interruptor: 2 pocisiones - ajustes de calor: variable - flujo de aire: 400°c/540°c i/min - cable: 1,85mt. - 1 año de garantía.'
            ],
            [
                'marca'=> 'Stanley Pt',
                'nombre' => 'Caladora 20v + Lijadora Rotorbital 300w',
                'modelo' => 'SCJ600M2K-B3A',
                'precio' => 949900,
                'descripcion' => 'Caladora 20v + Lijadora Rotorbital 300w'
            ],
            [
                'marca'=> 'Bauker',
                'nombre' => 'Mezcladora De Concreto 210 Litros',
                'modelo' => ' XH-PCM210',
                'precio' => 1599900,
                'descripcion' => 'Mezcladora de concreto elaborada en material resistente y duradero, con base inferior para mayor estabilidad'
            ],
            [
                'marca'=> 'Bauker',
                'nombre' => 'Diferencial 1600W 500/1000k 10/5m/Min 11/5.5m EH500',
                'modelo' => 'EH500-CO',
                'precio' => 2199900,
                'descripcion' => 'Diferencial cargador y elevador de cargas, potencia de 1600W, puede levantar cargas de 500-1000 kilos, capacidad 1600W 500/1000k 10/5m/Min 11/5.5m'
            ],
            [
                'marca'=> 'Karcher',
                'nombre' => 'Hidrolavadora 1800psi Máx. 5.8 Lt/Min 1500W K4 MX Karcher',
                'modelo' => 'K4 MX',
                'precio' => 1479900,
                'descripcion' => 'Pistola, lanza variable, lanza turbo, manguera de presion de 8 metros, sistema quick connect, deposito de detergente, motor de inducción.'
            ],
            [
                'marca'=> 'Stanley',
                'nombre' => 'Flexometro Global 8M 1 Pulgadas Ref 30-626LA',
                'modelo' => '30-626',
                'precio' => 43900,
                'descripcion' => 'Cinta métrica con botón de tranca, gancho cero absoluto permite mayor precisión, gancho grande de doble extremo para mejor enganche y máxima versatilidad al medir. Caja Bimaterial. Material hoja: Acero. Escala: Métrica / pulgadas. Ancho de hoja: 1 / 25.4 mm. Largo de hoja: 8m / 26.'
                
            ],
            [
                'marca'=> 'Humboldt',
                'nombre' => 'Motobomba Gasolina de 163cc 5.5HP 36m3/h 2plg x 2plg',
                'modelo' => 'N/A',
                'precio' => 854900,
                'descripcion' => 'Motobomba residencial con motor a gasolina de 5.5 Hp, el diámetro de su succión es de 2 pulg y el diámetro de su descarga es de 2 pulg y capacidad de succión de hasta 36 m3/hor'
            ],
            [
                'marca'=> 'Viyilant',
                'nombre' => 'Flotador Eléctrico Viyilant',
                'modelo' => 'N/A',
                'precio' => 78900,
                'descripcion' => 'Flotador eléctrico con doble función (vaciado y llenado) contrapeso incluido. 2 Mts. Cable, permite el encendido o apagado de la electrobomba automáticamente.'
            ],
            [
                'marca'=> 'Dewalt',
                'nombre' => 'Tronzadora 14-pulg 2300W 3800RPM',
                'modelo' => 'D28730-B3',
                'precio' => 899900,
                'descripcion' => 'El motor de 2300 W proporciona protección contra sobrecargas. El mango de diseño ergonómico proporciona una posición cómoda de la mano. El tornillo de banco Quick-Lock permite una sujeción rápida en materiales de diferentes tamaños.'
            ]
        ];

        foreach($Herramientas as $key => $value){
            Herramientas::create($value);
        }

    }
}
