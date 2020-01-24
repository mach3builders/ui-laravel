@php
    $id = \Illuminate\Support\Str::random();
@endphp
<button
    data-toggle="tooltip"
    data-placement="top"
    title="{{ $tooltip ?? trans('ui::delete.tooltip') }}"
    onclick="$(this).tooltip('hide'); $('#modal-action-delete-{{ $id }}').modal('show');"
    class="btn btn-sm ui-btn-icon ui-btn-transparent">
    <i class="far {{ $icon ?? 'fa-trash-alt' }}"></i>
</button>

<div id="modal-action-delete-{{ $id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ $title ?? trans('ui::delete.title') }}</h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ $slot ?? $message ?? trans('ui::delete.message') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">
                    {{ trans('ui::delete.cancel') }}
                </button>
                <form method="{{ $method ?? 'POST' }}" action="{{ $action }}">
                    {{ csrf_field() }}
                    {{ method_field($method_field ?? 'DELETE') }}
                    <button type="submit" id="button-action-delete-{{ $id }}" class="btn btn-danger">
                        {{ trans('ui::delete.confirm') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modal-action-delete-{{ $id }}').on('shown.bs.modal', function () {
        $('#button-action-delete-{{ $id }}').trigger('focus')
    })
</script>
