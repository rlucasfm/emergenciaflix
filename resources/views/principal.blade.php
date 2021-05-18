@extends('layouts.main')

@section('title', 'EmergênciaFlix')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

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

                        <?php $counter = 0; ?>
                        @foreach ($courses as $c)
                            @if ($counter == 6)
                                </div>
                                <div class="carousel-item  row no-gutters">
                                    <?php $counter = 0; ?>
                            @endif
                            <div class="col-2 float-left blur ">
                                <a href="{{ route($c['link'], ['id' => $c['id']]) }}">
                                    <img class="img-responsive " width="90%"  src="{{ $c['img'] }}" style="border-radius: 20px;">
                                </a>
                            </div>
                            @if ($loop->last)
                                </div>
                            @endif
                            <?php $counter++; ?>
                        @endforeach

                </div>
            </div>

        <!---MOBILE-->

        <div id="recipeCarousel2" class="carousel slide w-100 d-lg-none w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item row no-gutters active">
                    <?php $counter_mobile = 0; ?>
                    @foreach ($courses as $c)
                        @if ($counter_mobile == 3)
                            </div>
                            <div class="carousel-item row no-gutters">
                            <?php $counter_mobile = 0; ?>
                        @endif
                        <div class="col-4 float-left blur ">
                            <a href="{{ route($c['link'], ['id' => $c['id']]) }}">
                                <img class="img-responsive " width="90%"  src="{{ $c['img'] }}" style="border-radius: 5px;">
                            </a>
                        </div>
                        @if ($loop->last)
                            </div>
                        @endif
                        <?php $counter_mobile++; ?>
                    @endforeach

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
