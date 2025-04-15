<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;

class KnowledgeBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создаём Тему 1
        $theme1 = Theme::factory()->create([
            'name' => 'Тема 1'
        ]);
        
        // Добавляем подтемы
        $theme1->subthemes()->createMany([
            [
                'name'    => '1.1',
                'content' => 'Код реализации можно посмотреть тут <a href="https://github.com/zchk0/uchot-prosto-laravel">https://github.com/zchk0/uchot-prosto-laravel</a>',
            ],
            [
                'name'    => '1.2',
                'content' => 'Содержимое для Подтемы, здесь может быть совсем другой текст.',
            ],
        ]);

        // Создаём Тему 2
        $theme2 = Theme::factory()->create([
            'name' => 'Тема 2'
        ]);
        
        // Добавляем подтемы
        $theme2->subthemes()->createMany([
            [
                'name'    => '2.1',
                'content' => 'Содержимое для Подтемы.'
            ],
            [
                'name'    => '2.2',
                'content' => 'тест тест.'
            ],
            [
                'name'    => '2.3',
                'content' => 'еще подтема.'
            ],
        ]);
    }
}
