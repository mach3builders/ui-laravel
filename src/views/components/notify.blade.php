@if (session()->has('notify.message'))
    <div class="ui-notifier ui-notifier-{{ session('notify.type') }}" data-show="true" data-no-transition-cache>
        <div>{!! session('notify.message') !!}</div>
    </div>
@endif