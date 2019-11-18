@if (session()->has('notify.message'))
    <div class="ui-notifier ui-notifier-{{ session('notify.type') }}" data-show="true" data-no-transition-cache>
        <div>{!! session('notify.message') !!}</div>
    </div>
@elseif (count($errors))
    <div class="ui-notifier ui-notifier-danger" data-show="true" data-no-transition-cache>
        <div>{{ trans('ui::form.errors') }}</div>
    </div>
@endif