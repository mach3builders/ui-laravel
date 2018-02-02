@if (count($errors))
    <div class="alert alert-danger">
        <div class="ui-icon-text">
            <i class="far fa-exclamation-triangle"></i>
            <div>{{ trans('form.errors') }}</div>
        </div>
    </div>
@endif