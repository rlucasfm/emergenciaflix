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
        $base_url = env('APP_URL', 'http://projetos-php/emergenciaflix/public');
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
                <a href="https://drive.google.com/open?id=1ERchvH7b7JeWn5nRG8ilfjYmVYChAflm" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/manual.png" width="50%"></a>
                <a href="https://drive.google.com/open?id=1ERchvH7b7JeWn5nRG8ilfjYmVYChAflm" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/manual.png" width="80%"></a>
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
                'lesson_content' => '<div style="border-radius: 25px; border: 2px solid #0328fc; padding: 20px; background: #FFFFFF; ">
                <center>
                  <h2>Pré-Teste</h2><br><br>
                </center>

                <div class="form-group">
                    <label for="q1" class="control-label">1. Antes mesmo de colocar a mão sobre a vítima, as informações do ocorrido podem proporcionar ao Socorrista de Resgate uma forma de predizer mais de 90% das lesões existentes. Considerando as deformidades no veículo podemos concluir que seja:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q1" value="q1a">
                              a) Uma força resultante da queda
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q1" value="q1b">
                              b) O resultado das forças envolvidas que ajudam a presumir possíveis danos á vítima
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q1" value="q1c">
                              c) O resultado das forças envolvidas que ajudam a identificar possíveis lesões na vítima
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q1" value="q1d">
                              d) Energia cinética resultante
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta1" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q1Certa" value="q1b">
                  </div>

                  <div class="form-group">
                    <label for="q2" class="control-label">2. Na avaliação primário de um paciente traumatizado, a hemorragia externa com risco de vida deve ser imediatamente identificada e controlada. As etapas na avaliação inicial podem ser lembradas usando o mnemônico:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q2" value="q2a">
                              a) CABDE
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q2" value="q2b">
                              b) XABCDE
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q2" value="q2c">
                              c) VOS
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q2" value="q2d">
                              d) AVDN
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q2" value="q2e">
                              e) ITR
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta2" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q2Certa" value="q2b">
                  </div>

                  <div class="form-group">
                    <label for="q3" class="control-label">3. A avaliação rápida do doente Traumatizado tem como principal objetivo:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q3" value="q3a">
                              a) Identificar agravos e/ou lesões que ameaçam de forma aguda a vida do doente ou ferido.
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q3" value="q3b">
                              b) Identificar lesões expostas e cobrir com pano limpo
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q3" value="q3c">
                              c) Sangramentos ativos e fraturas
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q3" value="q3d">
                              d) Identificar nome e idade da vítima
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta3" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q3Certa" value="q3a">
                  </div>

                  <div class="form-group">
                    <label for="q4" class="control-label">4. A avaliação e o tratamento prévio dos seguintes itens são essenciais no atendimento inicial do paciente traumatizado</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q4" value="q4a">
                              a) Via aérea, Respiração e temperatura corporal
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q4" value="q4b">
                              b) Via aérea, Função neurológica e SAMPLA
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q4" value="q4c">
                              c) Via aérea, circulação e sinais vitais
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q4" value="q4d">
                              d) Via aérea, Ventilação/Respiração, Circulação/Hemorragia
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta4" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q4Certa" value="q4d">
                  </div>

                  <div class="form-group">
                    <label for="q5" class="control-label">5. No atendimento, a avaliação das Vias Aéreas é uma das prioridades vital. Para isso o dispositivo usado no APH capaz de traduzir a qualidade da ventilação e FC da vítima é o:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q5" value="q5a">
                              a) DEA – Desfibrilador Externo Automático
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q5" value="q5b">
                              b) Monitor cardíaco (ECG)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q5" value="q5c">
                              c) Oxímetro de pulso (FC e SP02)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q5" value="q5d">
                              d) Máscara de oxigênio com reservatório
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta5" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q5Certa" value="q5c">
                  </div>

                  <div class="form-group">
                    <label for="q6" class="control-label">6. Na avaliação da letra C do mnemônico XABCDE, a verificação do pulso no adulto consciente e sem hemorragia se dá no pulso:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q6" value="q6a">
                              a) Femoral
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q6" value="q6b">
                              b) Braquial
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q6" value="q6c">
                              c) Radial
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q6" value="q6d">
                              d) Carotídeo
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta6" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q6Certa" value="q6c">
                  </div>

                  <div class="form-group">
                    <label for="q7" class="control-label">7. O maior causador de obstrução da via aérea em paciente inconsciente, é a queda da língua que impede a entrada e saída do Ar. O que fazer quando uma pessoa leva ambas as mãos ao pescoço e não consegue falar nem tossir?</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q7" value="q7a">
                              a) Aplicar compressões abdominais forte e rápido – Manobra de desengasgo
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q7" value="q7b">
                              b) Ovace – Obstrução da via aérea por corpo estranho
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q7" value="q7c">
                              c) Manobra de valsalva
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q7" value="q7d">
                              d) Tração/anteriorização da mandíbula
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta7" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q7Certa" value="q7a">
                  </div>

                  <div class="form-group">
                    <label for="q8" class="control-label">8. Diante da Hemorragia externa na tentativa de parar o sangramento, a orientação correta será:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q8" value="q8a">
                              a) Lavar com água e sabão
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q8" value="q8b">
                              b) Fazer torniquete de imediato e afrouxar a cada 15min
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q8" value="q8c">
                              c) Curativo compressivo (mãos) com pano ou compressas limpa
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q8" value="q8d">
                              d) Colocar sobre o ferimento cinzas ou pó de café
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta8" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q8Certa" value="q8c">
                  </div>

                  <div class="form-group">
                    <label for="q9" class="control-label">9. São itens indispensáveis, utilizados na imobilização de uma vítima de trauma:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q9" value="q9a">
                              a) Colar cervical, prancha rígida, tirantes ou Cinto Aranha
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q9" value="q9b">
                              b) Prancha de resgate, colar digital, cinto de segurança
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q9" value="q9c">
                              c) Colar cervical, amarradores, prancha rígida e coxins
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q9" value="q9d">
                              d) Colar cervical, Prancha rígida, Protetor lateral de cabeça, Tirantes ou Cinto Aranha
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta9" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q9Certa" value="q9d">
                  </div>

                  <div class="form-group">
                    <label for="q10" class="control-label">10. Sobre o XABCDE está correto, EXCETO:</label>
                    <div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q10" value="q10a">
                              a) X - Hemorragias Exsanguinantes - Controle imediato
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q10" value="q10b">
                              b) A - Abertura da Via Aérea e Controle da coluna cervical
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q10" value="q10c">
                              c) B - Respiração/Ventilação e Oxigenação adequada
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q10" value="q10d">
                              d) C - Circulação e Controle de Hemorragia
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q10" value="q10e">
                              e) D - Nível de consciência/Exame Neurológico e Eletroencefalograma
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox">
                          <input type="radio" name="q10" value="q10f">
                              f) E - Exposição e Controle da temperatura corporal
                        </label>
                      </div>
                    </div>
                    <center>
                      <h5 id="textoResposta10" style="color: #de0f00;">
                    </h5></center>
                    <input type="hidden" name="q10Certa" value="q10e">
                  </div>

                <div class="form-group">
                  <center>
                    <button name="submit" type="button" class="btn btn-primary" id="butConcluir">Concluir</button>
                  </center>
                </div>
                <center>
                  <h2 id="quantidadeCerta" style="color: #de0f00;">
                </h2></center>
              </div>
              <script>
$("#butConcluir").click(function(){
  //var containerResposta1 = $("#respq1").
  var correcaoTexto1 = $("#textoResposta1");
  var resposta1 = $(\'input[name=q1]:checked\');
  var correta1 = $(\'input[name=q1Certa]\').val();

  var corretas = 0;

  if(resposta1.val() == correta1){
    correcaoTexto1.text(\'Resposta Correta!\');
    correcaoTexto1.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto1.text(\'A resposta correta é a alternativa B\');
    correcaoTexto1.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto2 = $("#textoResposta2");
  var resposta2 = $(\'input[name=q2]:checked\');
  var correta2 = $(\'input[name=q2Certa]\').val();

  if(resposta2.val() == correta2){
    correcaoTexto2.text(\'Resposta Correta!\');
    correcaoTexto2.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto2.text(\'A resposta correta é a alternativa B\');
    correcaoTexto2.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto3 = $("#textoResposta3");
  var resposta3 = $(\'input[name=q3]:checked\');
  var correta3 = $(\'input[name=q3Certa]\').val();

  if(resposta3.val() == correta3){
    correcaoTexto3.text(\'Resposta Correta!\');
    correcaoTexto3.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto3.text(\'A resposta correta é a alternativa A\');
    correcaoTexto3.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto4 = $("#textoResposta4");
  var resposta4 = $(\'input[name=q4]:checked\');
  var correta4 = $(\'input[name=q4Certa]\').val();

  if(resposta4.val() == correta4){
    correcaoTexto4.text(\'Resposta Correta!\');
    correcaoTexto4.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto4.text(\'A resposta correta é a alternativa D\');
    correcaoTexto4.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto5 = $("#textoResposta5");
  var resposta5 = $(\'input[name=q5]:checked\');
  var correta5 = $(\'input[name=q5Certa]\').val();

  if(resposta5.val() == correta5){
    correcaoTexto5.text(\'Resposta Correta!\');
    correcaoTexto5.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto5.text(\'A resposta correta é a alternativa C\');
    correcaoTexto5.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto6 = $("#textoResposta6");
  var resposta6 = $(\'input[name=q6]:checked\');
  var correta6 = $(\'input[name=q6Certa]\').val();

  if(resposta6.val() == correta6){
    correcaoTexto6.text(\'Resposta Correta!\');
    correcaoTexto6.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto6.text(\'A resposta correta é a alternativa C\');
    correcaoTexto6.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto7 = $("#textoResposta7");
  var resposta7 = $(\'input[name=q7]:checked\');
  var correta7 = $(\'input[name=q7Certa]\').val();

  if(resposta7.val() == correta7){
    correcaoTexto7.text(\'Resposta Correta!\');
    correcaoTexto7.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto7.text(\'A resposta correta é a alternativa A\');
    correcaoTexto7.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto8 = $("#textoResposta8");
  var resposta8 = $(\'input[name=q8]:checked\');
  var correta8 = $(\'input[name=q8Certa]\').val();

  if(resposta8.val() == correta8){
    correcaoTexto8.text(\'Resposta Correta!\');
    correcaoTexto8.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto8.text(\'A resposta correta é a alternativa C\');
    correcaoTexto8.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto9 = $("#textoResposta9");
  var resposta9 = $(\'input[name=q9]:checked\');
  var correta9 = $(\'input[name=q9Certa]\').val();

  if(resposta9.val() == correta9){
    correcaoTexto9.text(\'Resposta Correta!\');
    correcaoTexto9.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto9.text(\'A resposta correta é a alternativa D\');
    correcaoTexto9.css(\'color\',\'#de0f00\');
  }

  var correcaoTexto10 = $("#textoResposta10");
  var resposta10 = $(\'input[name=q10]:checked\');
  var correta10 = $(\'input[name=q10Certa]\').val();

  if(resposta10.val() == correta10){
    correcaoTexto10.text(\'Resposta Correta!\');
    correcaoTexto10.css(\'color\',\'#18ed51\');
    corretas = corretas+1;
  }else{
    correcaoTexto10.text(\'A resposta correta é a alternativa E\');
    correcaoTexto10.css(\'color\',\'#de0f00\');
  }

  var textoCorretas = $(\'#quantidadeCerta\');
  if(corretas>7){
    textoCorretas.text(\'Você somou \'+corretas+\' pontos!\');
    textoCorretas.css(\'color\',\'#18ed51\');
  }else if(corretas==1){
    textoCorretas.text(\'Você somou \'+corretas+\' ponto!\');
    textoCorretas.css(\'color\',\'#de0f00\');
  }else{
    textoCorretas.text(\'Você somou \'+corretas+\' pontos!\');
    textoCorretas.css(\'color\',\'#de0f00\');
  }

});
</script>',
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
            <img src="' . $base_url . '/images/aph/historia.jpg" width="100%">

            <div class="container-fluid">
                    <br>
                <center>
                    <a href="https://drive.google.com/file/d/1rkisLyzeKC9TMOE8wn6-spoq9boBjugq/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/aula1.png" width="50%"></a>
                    <a href="https://drive.google.com/file/d/1rkisLyzeKC9TMOE8wn6-spoq9boBjugq/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/aula1.png" width="80%"></a>
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
                <img src="' . $base_url . '/images/aph/lei.jpg" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1KPXQMK0mKu0Ivqo8ZrvsKaa9WneGoljE/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/aula2.png" width="50%"></a>
                        <a href="https://drive.google.com/file/d/1KPXQMK0mKu0Ivqo8ZrvsKaa9WneGoljE/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/aula2.png" width="80%"></a>
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
                <img src="' . $base_url . '/images/aph/bio.png" width="100%">

                <div class="container-fluid">
                        <br>
                    <center>
                        <a href="https://drive.google.com/file/d/1snoB0QuHis7c5vuoaZ0jBIThxWgXmzo0/view?usp=sharing" class="d-none d-sm-none d-md-inline-block d-lg-inline-block d-xl-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/aula3.png" width="50%"></a>
                        <a href="https://drive.google.com/file/d/1snoB0QuHis7c5vuoaZ0jBIThxWgXmzo0/view?usp=sharing" class="d-xl-none d-lg-none d-md-none d-inline-block d-sm-inline-block" target="_blank"><img src="' . $base_url . '/images/aph/aula3.png" width="80%"></a>
                    </center>

                </div>
                ',
            ]
        ];

        foreach($data as $d)
        {
            Lesson::create($d);
        }
    }
}