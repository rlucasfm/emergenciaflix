<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSBVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $base_url = env('APP_URL', 'http://projetos-php/emergenciaflix/public');
        //far fa-file-alt
        //far fa-play-circle
        $data = [
            [
                'course_id' => 43052,
                'course_module' => 1,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Introdução ao Curso',
                'lesson_description' => 'Introdução ao Curso',
                'lesson_videoembed' => 'https://www.youtube.com/embed/10rtTfk85Lg',
                'lesson_content' => '
                <a href="' . $base_url . '/files/pdf1.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . '/images/download.png" width="50%"></a>
                <a href="' . $base_url . '/files/pdf1.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . '/images/download.png" width="80%"></a>
                ',
            ],
            [
                'course_id' => 43052,
                'course_module' => 1,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Suporte Básico de Vida',
                'lesson_description' => 'Suporte Básico de Vida',
                'lesson_videoembed' => 'https://www.youtube.com/embed/mFMGnBwi8SY',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 1,
                'module_order' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Localização do coração e Fisiologia da respiração.',
                'lesson_description' => 'Localização do coração e Fisiologia da respiração.',
                'lesson_videoembed' => 'https://www.youtube.com/embed/Z_XQgnSpoiw',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 1,
                'module_order' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Parada Cardíaca vs. Infarto',
                'lesson_description' => 'Parada Cardíaca vs. Infarto',
                'lesson_videoembed' => 'https://www.youtube.com/embed/dzc7eb4DHVQ',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 1,
                'module_order' => 5,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Cadeia de Sobrevivência',
                'lesson_description' => 'Cadeia de Sobrevivência',
                'lesson_videoembed' => 'https://www.youtube.com/embed/uf41b-83X_E',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 2,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Como identificar uma Parada Cardiopulmonar - PCR',
                'lesson_description' => 'Como identificar uma Parada Cardiopulmonar - PCR',
                'lesson_videoembed' => 'https://www.youtube.com/embed/OELjghKTgG4',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 2,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Regras de RCP no Adulto e Criança e Bebê',
                'lesson_description' => 'Regras de RCP no Adulto e Criança e Bebê',
                'lesson_videoembed' => 'https://www.youtube.com/embed/3hwbrv3hbY4',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 2,
                'module_order' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Componentes da RCP de alta qualidade',
                'lesson_description' => 'Componentes da RCP de alta qualidade',
                'lesson_videoembed' => 'https://www.youtube.com/embed/EUZdsJzQVwU',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 3,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'DEA - Desfibrilador Externo Automático',
                'lesson_description' => 'DEA - Desfibrilador Externo Automático',
                'lesson_videoembed' => 'https://www.youtube.com/embed/8FJzJzihl5k',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 3,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Rítimos da PCR',
                'lesson_description' => 'Rítimos da PCR',
                'lesson_videoembed' => 'https://www.youtube.com/embed/JmFhCnKKHIQ',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 3,
                'module_order' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Situações especiais do uso do DEA',
                'lesson_description' => 'Situações especiais do uso do DEA',
                'lesson_videoembed' => 'https://www.youtube.com/embed/M9E7ImF7DX4',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 3,
                'module_order' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'OVACE',
                'lesson_description' => 'OVACE',
                'lesson_videoembed' => 'https://www.youtube.com/embed/CD7GL2oXGOg',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 4,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'VIDEO ZERO - BOAS VINDAS NO CURSO SBV E DEA',
                'lesson_description' => 'VIDEO ZERO - BOAS VINDAS NO CURSO SBV E DEA',
                'lesson_videoembed' => 'https://www.youtube.com/embed/eG7ZHpUhnbg',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 4,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'AULA 1 - INTRODUÇÃO E CONCEITOS',
                'lesson_description' => 'AULA 1 - INTRODUÇÃO E CONCEITOS',
                'lesson_videoembed' => 'https://www.youtube.com/embed/Nb_CFBBwD-A',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 4,
                'module_order' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'AULA 2 - ABORDAGEM DO ALGORITIMO DE PCR 2020',
                'lesson_description' => 'AULA 2 - ABORDAGEM DO ALGORITIMO DE PCR 2020',
                'lesson_videoembed' => 'https://www.youtube.com/embed/7ii4sFU12AU',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 4,
                'module_order' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'AULA 3 - REVISÃO GERAL E A ABORDAGEM NO INTRA HOSPITALAR P3',
                'lesson_description' => 'AULA 3 - REVISÃO GERAL E A ABORDAGEM NO INTRA HOSPITALAR P3',
                'lesson_videoembed' => 'https://www.youtube.com/embed/Nkw24msOLfY',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 4,
                'module_order' => 5,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'AULA 4 - DEA DESFIBRILADOR EXTERNO AUTOMÁTICO CUIDADOS GERAIS',
                'lesson_description' => 'AULA 4 - DEA DESFIBRILADOR EXTERNO AUTOMÁTICO CUIDADOS GERAIS',
                'lesson_videoembed' => 'https://www.youtube.com/embed/JKTkUiTWLNU',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 4,
                'module_order' => 6,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'AULA 5 - REVISÃO SUPORTE AVANÇADO',
                'lesson_description' => 'AULA 5 - REVISÃO SUPORTE AVANÇADO',
                'lesson_videoembed' => 'https://www.youtube.com/embed/2J0X7JWYE88',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 4,
                'module_order' => 7,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'AULA 6 - ENGASGO OBSTRUÇÃO DE VIA AÉREA POR CORPO ESTRANHO',
                'lesson_description' => 'AULA 6 - ENGASGO OBSTRUÇÃO DE VIA AÉREA POR CORPO ESTRANHO',
                'lesson_videoembed' => 'https://www.youtube.com/embed/O4aEVG1hUN0',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 5,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Certificado',
                'lesson_description' => 'Receba o seu certificado',
                'lesson_videoembed' => '',
                'lesson_content' => '',
            ],
            [
                'course_id' => 43052,
                'course_module' => 5,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Carteirinha',
                'lesson_description' => 'Receba a sua carteirinha',
                'lesson_videoembed' => '',
                'lesson_content' => '',
            ],
        ];

        foreach($data as $d)
        {
            Lesson::create($d);
        }
    }
}
