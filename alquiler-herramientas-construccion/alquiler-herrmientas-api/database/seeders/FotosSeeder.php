<?php

namespace Database\Seeders;

use App\Models\Foto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
                
        $Fotos = [
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/309834_03?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 1
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/309834_02?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 1
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/625246?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 2
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/625246_15?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 2
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/188750?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 3
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/188750_24?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 3
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/251835_22?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 4
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/251835?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 4
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/309843?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 5
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/309843_3?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 5
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/52767?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 6
            ],
                  
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/240770_01?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 7
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/240770_15?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 7
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/08479?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 8
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/44550_16?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 9
            ],
            [
                'src' => 'https://homecenterco.scene7.com/is/image/SodimacCO/44550?fmt=jpg&fit=fit,1&wid=420&hei=420',
                'herramientas_id' => 9
            ]
        ];

        foreach($Fotos as $key => $value ){
            Foto::create($value);
        }
    }
}
