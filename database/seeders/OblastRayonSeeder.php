<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Oblast;
use App\Models\Rayon;

class OblastRayonSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'Ош' => ['Кара-Кулжа', 'Кара-Суу', 'Ноокат', 'Узген', 'Чон-Алай', 'Aрaван', 'Алай'],
            'Баткен' => ['Лейлек', 'Кадамжай', 'Баткен'],
            'Талас' => ['Бакай-Ата', 'Кара-Буура', 'Манас', 'Талас'],
            'Нарын' => ['Ак-Талаа', 'Ат-Башы', 'Жумгал', 'Кочкор', 'Нарын'],
            'Ысык-Көл' => ['Ак-Суу', 'Жети-Өгүз', 'Ысык-Көл', 'Тон', 'Тюп'],
            'Жалал-Абад' => ['Ала-Бука', 'Базар-Коргон', 'Жалал-Абад', 'Кара-Кул', 'Ноокен', 'Сузак', 'Тогуз-Торо', 'Токтогул', 'Чаткал'],
            'Чуй' => ['Аламүдүн', 'Жайыл', 'Кара-Балта', 'Кемин', 'Московский', 'Панфилов', 'Сокулук', 'Ысык-Ата'],
        ];

        foreach ($data as $oblastName => $rayons) {
            $oblast = Oblast::create(['name' => $oblastName]);
            foreach ($rayons as $rayonName) {
                Rayon::create([
                    'name' => $rayonName,
                    'id_oblast' => $oblast->id,
                ]);
            }
        }
    }
}
