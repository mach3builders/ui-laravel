@php
    $id = str_random();
@endphp
<button 
    class="btn btn-sm btn-icon btn-pill btn-outline-secondary" 
    data-toggle="modal" 
    data-target="#example-{{ $id }}">
    <i class="ui-icon">delete_forever</i>
</button>
<div class="modal fade" id="example-{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">{{ $title ?? trans('ui::delete.title') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body text-left">
                        <p>{{ $slot ?? $message ?? trans('ui::delete.message') }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    {{ trans('ui::delete.cancel') }}
                </button>
                <form method="POST" action="{{ $action }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-success">
                        {{ trans('ui::delete.delete') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>