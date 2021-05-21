<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;

class APHLessonSeeder extends Seeder
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
                'course_id' => 44374,
                'course_module' => 1,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Boas-vindas ao Curso',
                'lesson_description' => 'Boas-vindas ao Curso',
                'lesson_videoembed' => 'https://www.youtube.com/embed/Z6Nggs-apOc',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 1,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Introdução ao Curso',
                'lesson_description' => 'Introdução ao Curso',
                'lesson_videoembed' => 'https://www.youtube.com/embed/5TLWIxcS1F8',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 1,
                'module_order' => 3,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Manual de Apoio ao Curso de APH',
                'lesson_description' => 'Manual de Apoio ao Curso de APH',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <a href="https://drive.google.com/open?id=1ERchvH7b7JeWn5nRG8ilfjYmVYChAflm" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/manual.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                <a href="https://drive.google.com/open?id=1ERchvH7b7JeWn5nRG8ilfjYmVYChAflm" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/manual.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 1,
                'module_order' => 4,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Pré Teste',
                'lesson_description' => 'Pré-teste de APH',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/aphmodule1.html");
                    });
                </script>'
            ],
            [
                'course_id' => 44374,
                'course_module' => 1,
                'module_order' => 5,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'História do APH',
                'lesson_description' => 'História do APH',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
            <img src="' . $base_url . 'images/aph/historia.jpg" width="100%">

            <div class="container-fluid">
                    <br>
                <center>
                    <a href="https://drive.google.com/file/d/1rkisLyzeKC9TMOE8wn6-spoq9boBjugq/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula1.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                    <a href="https://drive.google.com/file/d/1rkisLyzeKC9TMOE8wn6-spoq9boBjugq/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula1.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                </center>
            </div>',
            ],
            [
                'course_id' => 44374,
                'course_module' => 1,
                'module_order' => 6,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Aspectos legais sobre primeiros socorros em emergências',
                'lesson_description' => 'Aspectos legais sobre primeiros socorros em emergências',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/lei.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1KPXQMK0mKu0Ivqo8ZrvsKaa9WneGoljE/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula2.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/file/d/1KPXQMK0mKu0Ivqo8ZrvsKaa9WneGoljE/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula2.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 1,
                'module_order' => 7,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Biossegurança no atendimento',
                'lesson_description' => 'Biossegurança no atendimento',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/bio.png" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1snoB0QuHis7c5vuoaZ0jBIThxWgXmzo0/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula3.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/file/d/1snoB0QuHis7c5vuoaZ0jBIThxWgXmzo0/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula3.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 2,
                'module_order' => 1,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Avaliação da cena de emergência',
                'lesson_description' => 'Avaliação da cena de emergência',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/cena.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1XMlUEHdm_y1p71DMSfXXV22J2CR-RDkq/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula4.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/file/d/1XMlUEHdm_y1p71DMSfXXV22J2CR-RDkq/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula4.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 2,
                'module_order' => 2,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Mecanismo de lesão e cinemática do trauma',
                'lesson_description' => 'Mecanismo de lesão e cinemática do trauma',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/cinema.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1769N6G44KWslTpokFUL-jJUDev5mTMwr/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula5.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/file/d/1769N6G44KWslTpokFUL-jJUDev5mTMwr/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula5.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 2,
                'module_order' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Atendimento inicial ao politraumatizado X-ABCDE',
                'lesson_description' => 'Atendimento inicial ao politraumatizado X-ABCDE',
                'lesson_videoembed' => 'https://www.youtube.com/embed/C4p5I0WzSNI',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 2,
                'module_order' => 4,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'PDF: Atendimento inicial ao politraumatizado X-ABCDE',
                'lesson_description' => 'PDF: Atendimento inicial ao politraumatizado X-ABCDE',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                    <br>
                    <center>
                        <a href="https://drive.google.com/open?id=1LlArbpTgnMJiBzyaOAZOMBH2Nxuh1Emk" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula6.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=1LlArbpTgnMJiBzyaOAZOMBH2Nxuh1Emk" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula6.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
        ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 2,
                'module_order' => 5,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Questionário do módulo 2',
                'lesson_description' => 'Questionário do módulo 2',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/aphmodule2.html");
                    });
                </script>',
            ],
            [
                'course_id' => 44374,
                'course_module' => 2,
                'module_order' => 6,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'EXTRA: O que o socorrista precisa saber de trauma de extremidades e abdominal',
                'lesson_description' => 'EXTRA: O que o socorrista precisa saber de trauma de extremidades e abdominal',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/extrema.png" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/open?id=1KaTTD1WPchNGZAiRron3wn0kqNiw-H-G" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/extra.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=1KaTTD1WPchNGZAiRron3wn0kqNiw-H-G" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/extra.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>',
            ],
            [
                'course_id' => 44374,
                'course_module' => 3,
                'module_order' => 1,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Suporte básico de Vida no Trauma Lesões Específicas TCE',
                'lesson_description' => 'Suporte básico de Vida no Trauma Lesões Específicas TCE',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/tce.png" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/open?id=17L5xfx8_c2C4_F7PPWd7GWdh6DY3Lhlu" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula7.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=17L5xfx8_c2C4_F7PPWd7GWdh6DY3Lhlu" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula7.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>
                    ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 3,
                'module_order' => 2,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Suporte básico de Vida no Trauma Lesões Específicas Trauma Torácico e Abdominal',
                'lesson_description' => 'Suporte básico de Vida no Trauma Lesões Específicas Trauma Torácico e Abdominal',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/abd.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/open?id=1yP7FrQIALmgXsa3wW9Bgi4usXfzmHFgd" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula8.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=1yP7FrQIALmgXsa3wW9Bgi4usXfzmHFgd" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula8.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>',
            ],
            [
                'course_id' => 44374,
                'course_module' => 3,
                'module_order' => 3,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Suporte básico de Vida no Trauma Lesões Específicas Trauma Musculoesquelético',
                'lesson_description' => 'Suporte básico de Vida no Trauma Lesões Específicas Trauma Musculoesquelético',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/musc.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1dh96LP7zNwNePSpOlqH5FTTsKM8I1wYz/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula9.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/file/d/1dh96LP7zNwNePSpOlqH5FTTsKM8I1wYz/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula9.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 3,
                'module_order' => 4,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Questionário do módulo 3',
                'lesson_description' => 'Questionário do módulo 3',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/aphmodule3.html");
                    });
                </script>',
            ],
            [
                'course_id' => 44374,
                'course_module' => 3,
                'module_order' => 5,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Atualizações na escala de coma de Glasgow',
                'lesson_description' => 'Atualizações na escala de coma de Glasgow',
                'lesson_videoembed' => 'https://www.youtube.com/embed/_lOK5GP_C50',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 4,
                'module_order' => 1,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'O que o socorrista precisa saber sobre IMV - Incidente com Múltiplas Vítimas',
                'lesson_description' => 'O que o socorrista precisa saber sobre IMV - Incidente com Múltiplas Vítimas',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                    <br>
                    <center>
                        <a href="https://drive.google.com/open?id=1UUFtBBq349mITFqpzkMjd-UrH97Xs7XU" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/extra-imv.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=1UUFtBBq349mITFqpzkMjd-UrH97Xs7XU" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/extra-imv.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>

                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 4,
                'module_order' => 2,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Definição e identificação de IMV',
                'lesson_description' => 'Definição e identificação de IMV',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/imv1.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/open?id=1iqPYsKbdhdbUibRQHglGQTXSHYsAGLPz" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula10.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=1iqPYsKbdhdbUibRQHglGQTXSHYsAGLPz" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula10.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>

                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 4,
                'module_order' => 3,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Organização da cena de IMV e Triagem',
                'lesson_description' => 'Organização da cena de IMV e Triagem',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <img src="' . $base_url . 'images/aph/imvt.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/open?id=1HLCayLzdGk9Y0sjNkjCA7nfvPTa5xrxp" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula11.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=1HLCayLzdGk9Y0sjNkjCA7nfvPTa5xrxp" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula11.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 4,
                'module_order' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Incidente com Múltiplas Vítimas - IMV',
                'lesson_description' => 'Incidente com Múltiplas Vítimas - IMV',
                'lesson_videoembed' => 'https://www.youtube.com/embed/U2sRoCCJMOM',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 4,
                'module_order' => 5,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Artigo sobre IMV',
                'lesson_description' => 'Artigo sobre IMV',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <p> <center> Monografia:<br>
                Análise do método START para triagem em incidentes com múltiplas vítimas: Uma revisão sistemática<br>
                <br>
                Fernando Antonio Gouveia Oliveira<br>
                Professor orientador: André Gusmão Cunha<br>
                <br>
                Monografia de Conclusão do Componente Curricular MED-B60, como pré-requisito obrigatório e parcial para conclusão do curso médico da Faculdade de Medicina da Bahia da Universidade Federal da Bahia, apresentada ao Colegiado do Curso de Graduação em Medicina.</center></p>

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://repositorio.ufba.br/ri/bitstream/ri/13977/1/Fernando%20Antonio%20Gouveia%20Oliveira.pdf" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/baixar.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://repositorio.ufba.br/ri/bitstream/ri/13977/1/Fernando%20Antonio%20Gouveia%20Oliveira.pdf" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/baixar.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 4,
                'module_order' => 6,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Questionário do Módulo 4',
                'lesson_description' => 'Questionário do Módulo 4',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/aphmodule4.html");
                    });
                </script>',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Introdução ao Suporte Básico de Vida',
                'lesson_description' => 'Introdução ao Suporte Básico de Vida',
                'lesson_videoembed' => 'https://www.youtube.com/embed/10rtTfk85Lg',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Localização do Coração e Fisiologia da Respiração',
                'lesson_description' => 'Localização do Coração e Fisiologia da Respiração',
                'lesson_videoembed' => 'https://www.youtube.com/embed/Z_XQgnSpoiw',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Parada Cardíaca vs. Infarto',
                'lesson_description' => 'Parada Cardíaca vs. Infarto',
                'lesson_videoembed' => 'https://www.youtube.com/embed/dzc7eb4DHVQ',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Cadeia de Sobrevivência',
                'lesson_description' => 'Cadeia de Sobrevivência',
                'lesson_videoembed' => 'https://www.youtube.com/embed/uf41b-83X_E',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 5,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Como identificar uma Parada Cardiopulmonar - PCR',
                'lesson_description' => 'Como identificar uma Parada Cardiopulmonar - PCR',
                'lesson_videoembed' => 'https://www.youtube.com/embed/OELjghKTgG4',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 6,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Regras de RCP no Adulto e Criança e Bebê',
                'lesson_description' => 'Regras de RCP no Adulto e Criança e Bebê',
                'lesson_videoembed' => 'https://www.youtube.com/embed/3hwbrv3hbY4',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 7,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Componentes da RCP de alta qualidade',
                'lesson_description' => 'Componentes da RCP de alta qualidade',
                'lesson_videoembed' => 'https://www.youtube.com/embed/EUZdsJzQVwU',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 8,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'DEA - Desfibrilador Externo Automático',
                'lesson_description' => 'DEA - Desfibrilador Externo Automático',
                'lesson_videoembed' => 'https://www.youtube.com/embed/8FJzJzihl5k',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 9,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Rítimos da PCR',
                'lesson_description' => 'Rítimos da PCR',
                'lesson_videoembed' => 'https://www.youtube.com/embed/JmFhCnKKHIQ',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 10,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Situações especiais do uso do DEA',
                'lesson_description' => 'Situações especiais do uso do DEA',
                'lesson_videoembed' => 'https://www.youtube.com/embed/M9E7ImF7DX4',
                'lesson_content' => '',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 11,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'O que o Socorrista precisa saber de RCP/DEA/BLS (PDF)',
                'lesson_description' => 'O que o Socorrista precisa saber de RCP/DEA/BLS (PDF)',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                    <br>
                    <center>
                        <a href="https://drive.google.com/open?id=1KSSVujVekHOR3aAHnGvGUrOIjsyqvegD" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/extra-bls.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=1KSSVujVekHOR3aAHnGvGUrOIjsyqvegD" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/extra-bls.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
                ',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 12,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Suporte Básico de Vida em Cardiologia - Novas recomendações da AHA em RCP e DEA',
                'lesson_description' => 'Suporte Básico de Vida em Cardiologia - Novas recomendações da AHA em RCP e DEA',
                // 'lesson_videoembed' => '',
                'lesson_content' => '<div class="yt-container">
                <img src="' . $base_url . 'images/aph/bls.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/open?id=17Tyc8otL5Xk_YQb2ZGZ5tNqLQyQLAFuE" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula12.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=17Tyc8otL5Xk_YQb2ZGZ5tNqLQyQLAFuE" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula12.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>

                </div>
            '
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 13,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Obstrução de Via Aérea por corpo estranho OVACE',
                'lesson_description' => 'Obstrução de Via Aérea por corpo estranho OVACE',
                'lesson_videoembed' => 'https://www.youtube.com/embed/CD7GL2oXGOg',
                'lesson_content' => ''
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 14,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'PDF: Obstrução de Via Aérea por corpo estranho OVACE',
                'lesson_description' => 'PDF: Obstrução de Via Aérea por corpo estranho OVACE',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="container-fluid">
                <br>
                    <center>
                        <a href="https://drive.google.com/open?id=11ozuqKgII_yxmtFAL0F5gAMOPqVnkHEx" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula13.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="https://drive.google.com/open?id=11ozuqKgII_yxmtFAL0F5gAMOPqVnkHEx" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/aula13.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>
                </div>
        '
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 15,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Dicas no uso do DEA - Desfibrilador externo automático',
                'lesson_description' => 'Dicas no uso do DEA - Desfibrilador externo automático',
                'lesson_videoembed' => 'https://www.youtube.com/embed/XfafU5TaN1w',
                'lesson_content' => ''
            ],

            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 16,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Atualizações Novembro AHA - BLS (Suporte Básico de Vida)',
                'lesson_description' => 'Atualizações Novembro AHA - BLS (Suporte Básico de Vida)',
                'lesson_videoembed' => 'https://www.youtube.com/embed/lJlypPG4d14',
                'lesson_content' => ''
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 17,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Questionário Suporte Básico de Vida',
                'lesson_description' => 'Questionário Suporte Básico de Vida',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <div class="DivContentQuest"></div>
                <script>
                    $(function(){
                    $(".DivContentQuest").load("' . $base_url . 'vendor/questionaries/aphmodulesbv.html");
                    });
                </script>',
            ],
            [
                'course_id' => 44374,
                'course_module' => 5,
                'module_order' => 18,
                'lesson_icon' => 'far fa-file-alt',
                'lesson_title' => 'Simulador de Atendimento Online',
                'lesson_description' => 'Simulador de Atendimento Online',
                // 'lesson_videoembed' => '',
                'lesson_content' => '
                <p><center>O SOCORRO ON LINE é uma simulação de atendimento pré-hospitalar. Cada caso representa uma situação. Escolha o caso, leia o enunciado e clique em uma das quatro opções disponíveis. Acertando a conduta, automaticamente você prosseguirá até "salvar" seu paciente, se errar... tente de novo, aqui o erro só mata de raiva.</center></p>
                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="http://emergencia1.com/ph/sol1.html" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/simulador.png" width="50%" style="background-color: white; border-radius: 20px"></a>
                        <a href="http://emergencia1.com/ph/sol1.html" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . 'images/aph/simulador.png" width="80%" style="background-color: white; border-radius: 20px"></a>
                    </center>
                </div>
                ',
            ],
        ];

        foreach($data as $d)
        {
            Lesson::create($d);
        }
    }
}
