@foreach(['success','warning','danger'] as $t)
    @if(session()->has($t))
        <div class="alert alert-{{$t}} alert-simple alert-dismissible" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span class="mdi mdi-close" aria-hidden="true"></span>
            </button>
            <div class="icon">
                @if($t=='success')
                    <span class="mdi mdi-check"></span>
                @else
                    <span class="mdi mdi-alert-triangle"></span>
                @endif
            </div>
            <div class="message">
                <strong>{{session()->get($t)}}</strong>
            </div>
        </div>
    @endif
@endforeach

@if (session('status'))
    <div role="alert" class="alert alert-success alert-dismissible">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true" class="mdi mdi-close"></span>
        </button>
        <div class="icon"><span class="mdi mdi-check"></span></div>
        <div class="message">
            {{ session('status') }}
        </div>
    </div>
@endif
