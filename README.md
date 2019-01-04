# Mach3Builders UI helpers
This package contains helper functions to assist our user interface package. see [ui.mach3builders.nl](http://ui.mach3builders.nl/) for more information on how to get started with it.

## Installation
```
composer require mach3builders/ui
```
Next install the [@mach3builders/ui](http://ui.mach3builders.nl/) package and include the CSS and JS needed.

## Usage

### alert

To show and alert (or notification) you can use the alert helper. After being redirected the alert will show on screen.

```php
public function store()
{
    alert('message', 'succes');
    
    redirect('/home');
}
```

Or you could use the helper like this

```
alert('message')->type('succes');
alert('message')->dissmissable();
alert('message')->icon('user');

redirect()->alert('message', 'succes');
```

### notify
Works the same as alert, with a few different methods
```
notify('message')->type('succes');
notify('message')->icon('user');

redirect()->notify('message', 'succes');
```

Next you need to add the components to your blade layout

```html
@include('ui::alert')
@include('ui::notify')
```

### Delete modal

Creates a delete button with a modal to confirm deletion. When the confirm button is pressed a DELETE request is made the the given action.

```php
@component('ui::actions.delete', ['action' => "/user/{$user->id}"])
    Are you sure you want to delete {{ $user->name }}
@endcomponent
```

You can also use the following slots:

- **action**: The url where to send a DELETE request to upon confirmation
- **icon**: An font awesome icon class
- **title**: Modal title
- **main**: Modal body
- **tooltip**: Tooltip text

```php
@component('ui::actions.delete', ['action' => "/model/{$id}"])
    {!! trans('taxes.delete-body') !!}
@endcomponent
