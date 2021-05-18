@if ($message = Session::get('error'))
    <!-- TOAST DE AVISO -->
    <!-- DESKTOP -->
    <div class="d-none d-lg-block">
        <div class="toast" role="alert" id="toastError" aria-live="assertive" aria-atomic="true" data-autohide="false" style="position: absolute; top: 15px; left:40%; z-index:15; background-color: rgb(73, 73, 73)">
            <div class="toast-header">
                <strong class="mr-auto">Houve um erro...</strong>
                <button type="button" class="ml-2 mb-1 close toast-dismiss" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $message }}
            </div>
        </div>
    </div>
    <!-- MOBILE -->
    <div class="d-lg-none">
        <div class="toast" role="alert" id="toastErrorMob" aria-live="assertive" aria-atomic="true" data-autohide="false" style="position: absolute; top: 15px; left:25%; z-index:15; background-color: rgb(73, 73, 73)">
            <div class="toast-header">
                <strong class="mr-auto">Houve um erro...</strong>
                <button type="button" class="ml-2 mb-1 close toast-dismiss" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $message }}
            </div>
        </div>
    </div>

    <script>
        $('#toastError').toast('show');
        $('#toastErrorMob').toast('show');

        $('.toast-dismiss').click(function () {
            $('#toastError').toast('hide');
            $('#toastErrorMob').toast('hide');
        });
    </script>
@endif
