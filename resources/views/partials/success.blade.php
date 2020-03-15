@if(session()->has('success'))
    <div class="alert alert-dismissable alert success ">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong class="partial-message">
            {!! session()->get('success') !!}
        </strong>
    </div>

@endif
