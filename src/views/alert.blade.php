@if (session()->has('alert.message'))
    <div class="alert alert-{{ session('alert.type') }} alert-dismissible fade show" role="alert">
        
        @if (session('alert.dismissible') === true)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        @endif

        @if (session()->has('alert.icon'))
            <i class="ui-icon">{{ session('alert.icon') }}</i>
            <span>{!! session('alert.message') !!}</span>
        @else
            {!! session('alert.message') !!}
        @endif
    </div>
@endif