@if(count($errors))
    <div class="alert alert-danger">
        <div class="ui-icon-text">
            <i class="far fa-exclamation-triangle"></i>
            <div>{{ trans('ui::form.errors') }}</div>
        </div>
        @if (!empty($show))
            <hr>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
    </div>
@endif