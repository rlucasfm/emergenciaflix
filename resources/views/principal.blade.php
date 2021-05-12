@extends('layouts.main')

@section('title', 'EmergênciaFlix')

@section('content')
<main>

    <div class="site-section">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="margin-top: -112px;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/baner.jpg" class="d-none d-lg-block w-100" alt="...">
                  <img src="images/baner-m.jpg" class="d-lg-none w-100" alt="...">
              </div>
            </div>
          </div>
      <div class="container-fluid">
        <div class="col-12">
           <div class="col-9" style="float: left;">
             <h1 style="margin-bottom: 25px;margin-left: -25px;" class="d-none d-lg-block">Cursos Disponíveis</h1>
             <h2 style="margin-bottom: 25px;margin-left: -25px;" class="d-lg-none w-100">Cursos Disponíveis</h2>
          </div>

              <div class="col-1 d-none d-lg-block" style="float: right;margin-right: 4%;">
                <a href="#recipeCarousel" class="carousel-control-prev" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
                  <a href="#recipeCarousel" class="carousel-control-next" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
              </div>

              <div class="col-3 d-lg-none" style="float: right;">
                <a href="#recipeCarousel2" class="carousel-control-prev" role="button" data-slide="prev" style="top: 15px!important;"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
                  <a href="#recipeCarousel2" class="carousel-control-next" role="button" data-slide="next" style="top: 15px!important;"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
              </div>


        </div>


        <div id="recipeCarousel" class="carousel slide w-100 d-none d-lg-block" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item row no-gutters active">



                    <div class="col-2 float-left blur ">
                      <a href="#">
                        <img class="img-responsive " width="90%"  src="images/cover.jpg" style="border-radius: 20px;">
                       </a>

                    </div>

                    <div class="col-2 float-left blur blur">
                      <a href="#"><img class="img-responsive" width="90%"  src="images/cover-80.jpg" style="border-radius: 20px;">
                      </a>

                    </div>


                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover-inje.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover-aero.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover-sbv.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover-sav.jpg" style="border-radius: 20px;"></div>

                </div>

                <div class="carousel-item  row no-gutters">
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%"  src="images/cover.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover.jpg" style="border-radius: 20px;"></div>
                    <div class="col-2 float-left blur"><img class="img-responsive" width="90%" src="images/cover.jpg" style="border-radius: 20px;"></div>

                </div>


            </div>
        </div>

        <!---MOBILE-->

        <div id="recipeCarousel2" class="carousel slide w-100 d-lg-none w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item row no-gutters active">
                    <div class="col-4 float-left blur"><img class="img-responsive" width="90%"  src="images/cover.jpg" style="border-radius: 5px;"></div>
                    <div class="col-4 float-left blur"><img class="img-responsive" width="90%" src="images/cover-80.jpg" style="border-radius: 5px;"></div>
                    <div class="col-4 float-left blur"><img class="img-responsive" width="90%" src="images/cover-inje.jpg" style="border-radius: 5px;"></div>

                </div>

                <div class="carousel-item row no-gutters">
                    <div class="col-4 float-left blur"><img class="img-responsive" width="90%"  src="images/cover-aero.jpg" style="border-radius: 5px;"></div>
                    <div class="col-4 float-left blur"><img class="img-responsive" width="90%" src="images/cover-sbv.jpg" style="border-radius: 5px;"></div>
                    <div class="col-4 float-left blur"><img class="img-responsive" width="90%" src="images/cover-sav.jpg" style="border-radius: 5px;"></div>

                </div>


            </div>
        </div>

        <!--MOBILE FIM-->

        <div class="row justify-content-center">
          <div class="col-md-12">
          </div>
        </div>

      </div>
    </div>

</main>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $("#recipeCarousel").carousel({
            interval : false
        });

        $("#recipeCarousel2").carousel({
            interval : false
        });
    });
</script>
@endsection
