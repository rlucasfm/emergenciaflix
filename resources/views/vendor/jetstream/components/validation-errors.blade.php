@if ($errors->any())
    <div {{ $attributes }}>
        <div style="font-family: Poppins-Regular, sans-serif; font-size: 1rem; font-weight: 400; line-height: 1.5; color: red">{{ __('Alguma coisa deu errado!') }}</div>

        <ul class="mt-3" style="font-family: Poppins-Regular, sans-serif; font-size: 1rem; font-weight: 400; line-height: 1.5; color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
