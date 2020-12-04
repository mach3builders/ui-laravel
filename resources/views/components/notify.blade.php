@if (session()->has('notify.message'))
    <div class="ui-notifier ui-notifier-{{ session('notify.type') }}" data-show="true">
        <div>{!! session('notify.message') !!}</div>
    </div>
@endif