<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;

class InjetaveisLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $base_url = env('APP_URL', 'http://projetos-php/emergenciaflix/public/');
        $data = [
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Boas vindas - Curso de Injetáveis',
                'lesson_description' => 'Boas-vindas ao Curso',
                'lesson_videoembed' => 'https://www.youtube.com/embed/cWmcPhWdBmM',
                'lesson_content' => '',
            ],
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Vias Parentais',
                'lesson_description' => 'Vias Parentais',
                'lesson_videoembed' => 'https://www.youtube.com/embed/ckcPDL-3EC0',
                'lesson_content' => '',
            ],
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Via Intramuscular - IM',
                'lesson_description' => 'Via Intramuscular - IM',
                'lesson_videoembed' => 'https://www.youtube.com/embed/8kjn1uyyRmA',
                'lesson_content' => '',
            ],
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Via Subcutânea e Intradérmica',
                'lesson_description' => 'Via Subcutânea e Intradérmica',
                'lesson_videoembed' => 'https://www.youtube.com/embed/9cGLnR_JnZQ',
                'lesson_content' => '',
            ],
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 5,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Via Intravenosa ou Endovenosa',
                'lesson_description' => 'Via Intravenosa ou Endovenosa',
                'lesson_videoembed' => 'https://www.youtube.com/embed/-q0GgvtQGZY',
                'lesson_content' => '',
            ],
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 6,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'PDF - Slides da Aula',
                'lesson_description' => 'PDF - Slides da Aula',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1TnDxt3yuHbMhJr6pC6JIZ8sNVjG0uuuI/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="https://drive.google.com/file/d/1TnDxt3yuHbMhJr6pC6JIZ8sNVjG0uuuI/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>
                </div>'
            ],
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 7,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'PDF - Caderno 4 Anvisa',
                'lesson_description' => 'PDF - Caderno 4 Anvisa',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1Uf-BrIlGNJinldKSLZsr2NF4WpBc8ArX/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="https://drive.google.com/file/d/1Uf-BrIlGNJinldKSLZsr2NF4WpBc8ArX/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>

                </div>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 2,
                'module_order' => 1,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Apostila do Primeiro Módulo',
                'lesson_description' => 'Apostila do Primeiro Módulo',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/modulo1.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/modulo1.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>
                </div>'
            ],
            [
                'course_id' => 48880,
                'course_module' => 2,
                'module_order' => 2,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Slide do Primeiro Módulo',
                'lesson_description' => 'Slide do Primeiro Módulo',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/slide1.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/slide1.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>
                </div>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 2,
                'module_order' => 3,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Exercícios Para Avaliação de Rendimento',
                'lesson_description' => 'Exercícios Para Avaliação de Rendimento',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/injetaveismodule2.html");
                    });
                </script>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 2,
                'module_order' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Resumão do Módulo 1 - Vídeo Aula',
                'lesson_description' => 'Resumão do Módulo 1 - Vídeo Aula',
                'lesson_videoembed' => 'https://www.youtube.com/embed/sYUnnkVquw4',
                'lesson_content' => ''
            ],
            [
                'course_id' => 48880,
                'course_module' => 3,
                'module_order' => 1,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Apostila do Segundo Módulo',
                'lesson_description' => 'Apostila do Segundo Módulo',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/modulo2.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/modulo2.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>
                </div>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 3,
                'module_order' => 2,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Slide do Segundo Módulo',
                'lesson_description' => 'Slide do Segundo Módulo',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/slide2.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/slide2.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>
                </div>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 3,
                'module_order' => 3,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Exercícios Para Avaliação de Rendimento do Módulo 2',
                'lesson_description' => 'Exercícios Para Avaliação de Rendimento do Módulo 2',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/injetaveismodule3.html");
                    });
                </script>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 3,
                'module_order' => 4,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'REVISÃO ANATÔMICA DO SISTEMA MUSCULAR - COMPLEMENTAR',
                'lesson_description' => 'REVISÃO ANATÔMICA DO SISTEMA MUSCULAR - COMPLEMENTAR',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/page/injetaveis/revmusc.html");
                    });
                </script>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 3,
                'module_order' => 4,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'REVISÃO ANATÔMICA DO SISTEMA VENOSO - COMPLEMENTAR',
                'lesson_description' => 'REVISÃO ANATÔMICA DO SISTEMA VENOSO - COMPLEMENTAR',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/page/injetaveis/revven.html");
                    });
                </script>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 4,
                'module_order' => 1,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'APOSTILA DO TERCEIRO MÓDULO',
                'lesson_description' => 'APOSTILA DO TERCEIRO MÓDULO',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/modulo3.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/modulo3.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>
                </div>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 4,
                'module_order' => 2,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Slide do Terceiro Módulo',
                'lesson_description' => 'Slide do Terceiro Módulo',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/slide3-1.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/slide3-1.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>

                </div>
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/slide3-2.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/slide3-2.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>

                </div>
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="' . $base_url . 'files/injetaveis/slide3-3.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="50%"></a>
                        <a href="' . $base_url . 'files/injetaveis/slide3-3.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/injetaveis/download.png" width="80%"></a>
                    </center>
                </div>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 4,
                'module_order' => 3,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => '	Exercícios Para Avaliação de Rendimento do Módulo 3',
                'lesson_description' => 'Exercícios Para Avaliação de Rendimento do Módulo 3',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/injetaveismodule4.html");
                    });
                </script>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 4,
                'module_order' => 4,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => '	SUGESTÃO DE VÍDEOS',
                'lesson_description' => 'SUGESTÃO DE VÍDEOS',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/page/injetaveis/sugvideos.html");
                    });
                </script>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 4,
                'module_order' => 5,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => '	SUGESTÃO DE LEITURA',
                'lesson_description' => 'SUGESTÃO DE LEITURA',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/page/injetaveis/sugleitura.html");
                    });
                </script>
                '
            ],
            [
                'course_id' => 48880,
                'course_module' => 5,
                'module_order' => 1,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Certificado',
                'lesson_description' => 'Certificado',
                // 'lesson_videoembed' => '',
                'lesson_content' => 'Certificado'
            ],
            [
                'course_id' => 48880,
                'course_module' => 5,
                'module_order' => 2,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Carteirinha',
                'lesson_description' => 'Carteirinha',
                // 'lesson_videoembed' => '',
                'lesson_content' => 'Carteirinha'
            ],
        ];

        foreach($data as $d)
        {
            Lesson::create($d);
        }
    }
}
