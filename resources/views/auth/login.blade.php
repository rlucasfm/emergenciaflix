@extends('layouts.guest')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-35 p-b-30">
        <span>
            <center>
                <img src="images/logo.png"  width="120px">
            </center>
        </span>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-55">
                    Acesse sua conta <br>
                    <hr style="background: linear-gradient(to right, black, #7100a5);
                        height: 3px;
                        display: block;
                        z-index: 1;
                        margin-bottom: -26px;">
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Insira um Email Válido">
                    <input class="input100" type="text" name="email" placeholder="Email" id="email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-envelope"></span>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "A Senha é Obrigatória">
                    <input class="input100" type="password" name="password" id="password" placeholder="Senha">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-lock"></span>
                    </span>
                </div>

                <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                    <label class="label-checkbox100 m-t-5" for="ckb1">
                        Lembrar-me
                    </label>
                </div>

                <div class="container-login100-form-btn p-t-22">
                    <button class="login100-form-btn" type="submit">
                        Entrar
                    </button>
                </div>

                <div class="text-center w-full m-t-15">
                    <span class="txt1">
                        Não é membro?
                    </span>

                    <a class="txt1 bo1 hov1" href="#">
                        Inscreva-se
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
