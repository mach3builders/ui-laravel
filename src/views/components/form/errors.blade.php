@if(count($errors))
    <div class="alert alert-danger">
        @if ($message)
            {!! trans('ui::form.errors') !!}
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
