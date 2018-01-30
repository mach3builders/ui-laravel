@if (session()->has('notify.message'))
    <div class="ui-notifier ui-notifier-{{ session('notify.type') }}" data-show="true">
        <span>{!! session('notify.message') !!}</span>
    </div>
@endif