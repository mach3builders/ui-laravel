@if(count($errors))
    <div class="alert alert-danger">
        @if ($message)
            <div class="ui-icon-text">
                <i class="far fa-exclamation-triangle"></i>
                <div>{{ trans('ui::form.errors') }}</div>
            </div>
        @endif
        @if ($message && $details)
            <hr class="mt-3">
        @endif
        @if ($details)
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif
