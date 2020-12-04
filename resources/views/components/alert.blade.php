@if (session()->has('alert.message'))
    <div class="alert alert-{{ session('alert.type') }} alert-dismissible fade show">
        @if (session('alert.dismissible') === true)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        @endif

        @if (session()->has('alert.icon'))
            <div class="ui-icon-text">
                <i class="far fa-{{ session('alert.icon') }}"></i>
                <div>{!! session('alert.message') !!}</div>
            </div>
        @else
            {!! session('alert.message') !!}
        @endif
    </div>
@endif