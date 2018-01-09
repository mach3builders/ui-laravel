<?php

namespace Mach3builders\Ui\Alert;

class Alert
{
    /**
     * Icons to use when using a alert type
     *
     * @var array
     */
    protected $type_icons = [
        'success' => 'check',
        'warning' => 'exclamation-triangle',
        'info' => 'info-circle',
        'danger' => 'times',
    ];

    /**
     * Set the alert message
     * @param  string $message
     * 
     * @return Alert
     */
    public function message($message, $type='info')
    {
        session()->flash('alert.message', $message);
        return $this->type($type);
    }

    /**
     * Set the type of alert
     *
     * @return Alert
     */
    public function type($type)
    {
        session()->flash('alert.type', $type);

        if (array_key_exists($type, $this->type_icons)) {
            session()->flash('alert.icon', $this->type_icons[$type]);
        }

        return $this;
    }

    /**
     * Make the alert dismissible
     *
     * @param  boolean $dismissible
     * @return Alert
     */
    public function dismissible($dismissible=true)
    {
        session()->flash('alert.dismissible', $dismissible);
        return $this;
    }

    /**
     * Add an icon to the alert
     *
     * @param  boolean $dismissible
     * @return Alert
     */
    public function icon($icon)
    {
        session()->flash('alert.icon', $icon);
        return $this;
    }
}