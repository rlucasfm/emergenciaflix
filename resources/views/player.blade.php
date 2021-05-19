@extends('layouts.main')

@section('title', 'EmergênciaFlix')

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
            <!-- AULAS -->
            <div class="row-fluid">
                <div class="col-12" style="margin-top: ;">
                    <div class="col-8 d-none d-lg-block float-left" style="">
                        @if ($lesson['lesson_videoembed'] != null)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $lesson['lesson_videoembed'] }}" allowfullscreen></iframe>
                            </div>
                        @endif
                        <hr style="color: white">
                        <br>
                        <div>
                            {!! $lesson['lesson_content'] !!}
                        </div>
                        <br>
                    </div>
                    <div class="col-4 d-none d-lg-block float-right" style="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center><a href="{{route('course', ['id' => $lesson['course_id']])}}"><i class="fas fa-list" style="color: #fff; font-size: 37px;"></i></a></center>
                                    </th>
                                    <th scope="col">
                                        <center>
                                            <a href="#" data-toggle="modal" data-target="#annotationModal" data-whatever="@getbootstrap"><i class="far fa-edit" style="color: #fff; font-size: 30px;"></i></a>
                                        </center>
                                    </th>
                                    <th scope="col">
                                        <center><a href="{{ $previous_lesson }}"><i class="far far fa-arrow-alt-circle-left" style="color: #fff; font-size: 37px;"></i></a></center>
                                    </th>
                                    <th scope="col">
                                        <center><a href="{{ $next_lesson }}"><i class="far far fa-arrow-alt-circle-right" style="color: #fff; font-size: 37px;"></i></a></center>
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <p></p>
                        <h1>{{ $lesson['lesson_title'] }}</h1>
                        {{ $lesson['lesson_description'] }} <br />

                        <button type="button" class="btn btn-labeled btn-success btn-lg checkbox-btn" style="margin-top: 25px;">
                            <input type="checkbox" class="checkbox-check" @if ($user_lesson['completed']) checked @endif>
                            Marcar como completo
                        </button>

                        <h2 style="margin-top: 25px;">Suas Anotações:</h2>
                        <br />

                        <p class="text-justify" style="color: #fff;">
                            {{$user_lesson['annotations']}}
                        </p>
                    </div>

                    <div class="col-12 d-lg-none" style="">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $lesson['lesson_videoembed'] }}" allowfullscreen></iframe>
                        </div>
                        <hr style="color: white">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col">{!! $lesson['lesson_content'] !!}</div>
                            </div>
                        </div>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center><a href="{{route('course', ['id' => $lesson['course_id']])}}"><i class="fas fa-list" style="color: #fff; font-size: 30px;"></i></center></a>
                                    </th>
                                    <th scope="col">
                                        <center>
                                            <a href="#" data-toggle="modal" data-target="#annotationModal" data-whatever="@getbootstrap"><i class="far fa-edit" style="color: #fff; font-size: 30px;"></i></a>
                                        </center>
                                    </th>
                                    <th scope="col">
                                        <center><a href="{{ $previous_lesson }}"><i class="far far fa-arrow-alt-circle-left" style="color: #fff; font-size: 30px;"></i></a></center>
                                    </th>
                                    <th scope="col">
                                        <center><a href="{{ $next_lesson }}"><i class="far far fa-arrow-alt-circle-right" style="color: #fff; font-size: 30px;"></i></a></center>
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <p class="text-justify"></p>
                        <h2>{{ $lesson['lesson_title'] }}</h2>
                        {{ $lesson['lesson_description'] }} <br />

                        <button type="button" class="btn btn-success btn-lg btn-block checkbox-btn" style="margin-top: 25px;">
                            <input type="checkbox" class="checkbox-check" @if ($user_lesson['completed']) checked @endif/>
                            Marcar como completo
                        </button>

                        <h2 style="margin-top: 25px;">Suas Anotações:</h2>
                        <br />

                        <p class="text-justify" style="color: #fff;">
                            {{$user_lesson['annotations']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--FIM AULAS-->

        <div class="modal fade" id="annotationModal" tabindex="-1" aria-labelledby="annotationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="annotationModalLabel" style="color: black;">Editar anotações</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" id="annotation-text" style="height: 40vh">{{$user_lesson['annotations']}}</textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="saveAnnotation" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-12"></div>
        </div>
    </div>
</main>
@endsection
@section('js')
<script>
    $('#saveAnnotation').click(function () {
        $.ajax({
            url: '{{ route('api-annotation') }}',
            method: 'POST',
            data: {
                'user_lesson_id': '{{ $user_lesson['id'] }}',
                'annotation': $('#annotation-text').val()
            }
        }).done(function(data) {
            $('.modal').modal('toggle');
        });
    });

    $('.checkbox-btn').click(function () {
        if($('.checkbox-check').is(':checked')){
            $('.checkbox-check').prop( "checked", false );
            checkstatus = 0;
        } else {
            $('.checkbox-check').prop( "checked", true );
            checkstatus = 1;
        }

        $.ajax({
            url: '{{ route('api-completed') }}',
            method: 'POST',
            data: {
                'user_lesson_id': '{{ $user_lesson['id'] }}',
                'completed': checkstatus
            }
        });
    });
</script>
@endsection
