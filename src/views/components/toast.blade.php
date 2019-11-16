@if (session()->has('toast.message'))
    <div class="toast ui-toast-{{ session('toast.type') }}" style="position:fixed; bottom:0; right:1.5rem; z-index:10000;" data-delay="4000">
        @if (session()->has('toast.title'))
            <div class="toast-header">
                <span class="mr-auto">{{ session('toast.title') }}</span>
                <button type="button" class="close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="toast-body">
            {!! session('toast.message') !!}
        </div>
    </div>
@endif