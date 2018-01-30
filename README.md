# Mach3Builders UI helpers
This package contains little helper functions for the Laravel package to use with Mach3Builders' User Interface. see [ui.mach3builders.nl](http://ui.mach3builders.nl/) for more information.

## Installation

```
composer require mach3builders/ui
```

## Helpers

### Alert
[Previews](http://ui.mach3builders.nl/components/alert/) at the docs

```php
alert('message', 'warning');

alert('message')->type('info')->dismissible()->icon('warning');
```

### Notifications
[Previews](http://ui.mach3builders.nl/components/notificio/) at the docs

icons are automaticly added by type

```php
notify('message', 'warning');

notify('message')->type('info');
```

## Components

### Delete action

Create a delete button with a modal to confirm deletion.

Slots:
- **action**: The url where to send a DELETE request to upon confirmation
- **title**: Modal title
- **main**: Modal body

```php
@component('ui::actions.delete', ['action' => "/update/{$id}"])
    {!! trans('taxes.delete-body') !!}
@endcomponent
```