@extends('layouts.main')

@section('title', 'EmergênciaFlix - ' . $course['name'])

@section('css')
@endsection

@section('content')

<main>
    <div class="site-section">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="margin-top: -112px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/baner-200.jpg') }}" class="d-none d-lg-block w-100" alt="..." />
                    <img src="{{ asset('images/baner-m-200.jpg') }}" class="d-lg-none w-100" alt="..." />
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: -15px;">
            <div class="col-12" style="display: none;">
                <div class="col-9" style="float: left;">
                    <h2 style="margin-bottom: 15px; margin-left: -25px;" class="">Conteúdo Exclusivo</h2>
                </div>
            </div>

            <!-- DESKTOP INICIO -->
            <div id="recipeCarousel" class="carousel slide w-100 d-none d-lg-block" data-ride="carousel" style="margin-bottom: 15px;">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item row no-gutters active">
                        <div class="col-3 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="90%" src="{{ asset('images/mini-live.jpg') }}" style="border-radius: 10px;" />
                                </a>
                            </center>
                        </div>
                        <div class="col-3 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="90%" src="{{ asset('images/mini-camisa.jpg') }}" style="border-radius: 10px;" />
                                </a>
                            </center>
                        </div>
                        <div class="col-3 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="90%" src="{{ asset('images/mini-rastreio.jpg') }}" style="border-radius: 10px;" />
                                </a>
                            </center>
                        </div>
                        <div class="col-3 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="90%" src="{{ asset('images/mini-bonus.jpg') }}" style="border-radius: 10px;" />
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DESKTOP FIM -->

            <!---MOBILE-->
            <div id="recipeCarousel2" class="carousel slide w-100 d-lg-none w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item row no-gutters active">
                        <div class="col-6 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="95%" src="{{ asset('images/mini-live.jpg') }}" style="border-radius: 10px;" />
                                </a>
                            </center>
                        </div>
                        <div class="col-6 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="95%" src="{{ asset('images/mini-camisa.jpg') }}" style="border-radius: 10px;" />
                                </a>
                            </center>
                        </div>
                        <div class="col-6 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="95%" src="{{ asset('images/mini-rastreio.jpg') }}" style="border-radius: 10px; margin-top: 15px;" />
                                </a>
                            </center>
                        </div>
                        <div class="col-6 float-right">
                            <center>
                                <a href="#">
                                    <img class="img-responsive" width="95%" src="{{ asset('images/mini-bonus.jpg') }}" style="border-radius: 10px; margin-top: 15px;" />
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!--MOBILE FIM-->

            <div class="col-12" style="padding-right: 0px !important; padding-left: 0px;">
                <div class="col-12" style="float: left; display: none;">
                    <h2 style="margin-bottom: 5px; margin-left: -8px; margin-top: 20px;" class="">Aulas do Curso</h2>
                </div>
                <!-- AULAS -->
                <div class="col-12" style="margin-top: ;">
                    <div class="row">
                        <!-- DESKTOP -->
                        @for ($i = 1; $i <= $course['modules']; $i++)
                        <div class="col-4 d-none d-lg-block" style="margin-top: 25px;">
                            <div class="accordion" id="accordion{{$i}}">
                                <div class="card" style="color: #000; background-clip: border-box; border: 1px solid rgb(82 82 82);">
                                    <div class="card-header" id="headingOne{{$i}}" style="background-color: rgb(82 82 82); border-bottom: 1px solid rgb(82 82 82);">
                                        <h3 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne{{$i}}">
                                                <h3 style="color: white; font-weight: bolder; font-size: 5vh; font-family: Open Sans" class="text-center">MÓDULO {{$i}}</h3>
                                                {{-- <img src="{{ asset('images/modulo1.png') }}" width="100%" /> --}}
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseOne{{$i}}" class="collapse" aria-labelledby="headingOne{{$i}}" data-parent="#accordion{{$i}}">
                                        <div class="card-body text-justify">
                                            <div class="progress" style="margin-bottom: 12px;">
                                                <div
                                                    class="progress-bar progress-bar-striped bg- progress-bar-animated float-rigth"
                                                    role="progressbar"
                                                    aria-valuenow="45"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 100%; background-color: #ff4132 !important;"
                                                ></div>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    @foreach ($lessons as $les)
                                                        @foreach ($les as $l)
                                                            @if ($l['course_module'] == $i)
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ route('player', ['id' => $l['id']]) }}" style="color: #000 !important;"><i class="{{$l['lesson_icon']}}"></i> {{$l['lesson_title']}}</a>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <!-- DESKTOP FIM -->
                        <!-- MOBILE -->
                        @for ($j = 1; $j <= $course['modules']; $j++)
                        <div class="col-12 d-lg-none" style="margin-top: 25px;">
                            <div class="accordion" id="accordion{{$j}}">
                                <div class="card" style="color: #000; background-clip: border-box; border: 1px solid rgb(82 82 82);">
                                    <div class="card-header" id="headingOne{{$j}}" style="background-color: rgb(82 82 82); border-bottom: 1px solid rgb(82 82 82);">
                                        <h3 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{$j}}" aria-expanded="true" aria-controls="collapseOne{{$j}}">
                                                <h3 style="color: white; font-weight: bolder; font-size: 5vh; font-family: Open Sans" class="text-center">MÓDULO {{$j}}</h3>
                                                {{-- <img src="{{ asset('images/modulo1.png') }}" width="100%" /> --}}
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseOne{{$j}}" class="collapse" aria-labelledby="headingOne{{$j}}" data-parent="#accordion{{$j}}">
                                        <div class="card-body text-justify">
                                            <div class="progress" style="margin-bottom: 12px;">
                                                <div
                                                    class="progress-bar progress-bar-striped bg- progress-bar-animated float-rigth"
                                                    role="progressbar"
                                                    aria-valuenow="45"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                    style="width: 100%; background-color: #ff4132 !important;"
                                                ></div>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    @foreach ($lessons as $les)
                                                        @foreach ($les as $l)
                                                            @if ($l['course_module'] == $j)
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ route('player', ['id' => $l['id']]) }}" style="color: #000 !important;"><i class="{{$l['lesson_icon']}}"></i> {{$l['lesson_title']}}</a>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <!-- MOBILE FIM -->
                    </div>
                </div>
            </div>
            <!--FIM AULAS-->

            <div class="row justify-content-center">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>
</main>


@endsection

@section('js')
@endsection
