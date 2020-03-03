@if(count($errors)>0)
    <div class="alert alert-warning alert-simple alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span class="mdi mdi-close" aria-hidden="true"></span>
        </button>
        <div class="icon"><span class="mdi mdi-alert-triangle"></span></div>
        <div class="message">
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        </div>
    </div>
@endif
