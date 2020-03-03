<form action="{{$url}}" method="post">
    @csrf
    @isset($method)
        @method($method)
    @endisset
    <div class="modal fade colored-header colored-header-primary show" id="{{$id}}" tabindex="-1" role="dialog"
         aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-colored">
                    <h3 class="modal-title">{{$title}}</h3>
                    <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true">
                        <span class="mdi mdi-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$slot}}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary md-close" type="submit">保存</button>
                </div>
            </div>
        </div>
    </div>
</form>
