@if (count($errors) > 0)
    <li class="text-center alert alert-danger"><h3><b>Errors</b></h3></li>

    @foreach ($errors->all() as $error)
        <li class="alert alert-danger" style="font-size: 8pt !important">{{ $error }}</li>
    @endforeach
@endif
