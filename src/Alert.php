<?php

namespace Mach3builders\Ui;

use Illuminate\Contracts\Session\Session;

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
     * Create a new alert instance
     *
     * @param Illuminate\Contracts\Session\Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Set the alert message
     * 
     * @param  string $message
     * @param  string $type
     * @return \Mach3builders\Ui\Alert
     */
    public function message($message, $type = 'info')
    {
        $this->session->flash('alert.message', $message);
        
        $this->type($type);

        return $this;
    }

    /**
     * Set the type of alert
     *
     * @param string $type
     * @return \Mach3builders\Ui\Alert
     */
    public function type($type)
    {
        $this->session->flash('alert.type', $type);

        if (array_key_exists($type, $this->type_icons)) {
            $this->icon($this->type_icons[$type]);
        }

        return $this;
    }

    /**
     * Make the alert dismissible
     *
     * @param  boolean $dismissible
     * @return \Mach3builders\Ui\Alert
     */
    public function dismissible($dismissible = true)
    {
        $this->session->flash('alert.dismissible', $dismissible);
        
        return $this;
    }

    /**
     * Add an icon to the alert
     *
     * @param  boolean $dismissible
     * @return \Mach3builders\Ui\Alert
     */
    public function icon($icon)
    {
        $this->session->flash('alert.icon', $icon);

        return $this;
    }
}