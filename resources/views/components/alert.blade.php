@php
    $message = session()->pull('alert.message');
    $type = session()->pull('alert.type')
    $icon = session()->pull('alert.icon')
@endphp

@if ($message)
    <div class="alert alert-{{ $type }} alert-dismissible fade show">
        @if (session('alert.dismissible') === true)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        @endif

        @if ($icon)
            <div class="ui-icon-text">
                <i class="far fa-{{ $icon }}"></i>
                <div>{!! $message !!}</div>
            </div>
        @else
            {!! $message !!}
        @endif
    </div>
@endif