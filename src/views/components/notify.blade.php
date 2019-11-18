@if (session()->has('notify.message'))
    <div class="ui-notifier ui-notifier-{{ session('notify.type') }}" data-show="true">
        <div>{!! session('notify.message') !!}</div>
    </div>
@elseif (session()->has('errors'))
    <div class="ui-notifier ui-notifier-danger" data-show="true">
        <div>{{ trans('ui::form.errors') }}</div>
    </div>
@endif