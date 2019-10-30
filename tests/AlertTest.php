<?php

namespace Mach3builders\Ui\Test;

use Mockery;
use Mach3builders\Ui\Alert;

class AlertTest extends TestCase
{
    public function setUp(): void
    {
        $this->session = Mockery::spy('Illuminate\Session\Store');
        $this->alert = new Alert($this->session);
    }

    /** @test */
    public function it_alerts_a_basic_message()
    {
        $this->alert->message('alert message');

        $this->session
            ->shouldHaveReceived('flash')
            ->with('alert.message', 'alert message')
            ->times(1);
    }

    /** @test */
    public function it_can_have_types()
    {
        $this->alert->message('dangerous message')->type('danger');

        $this->session
            ->shouldHaveReceived('flash')
            ->with('alert.type', 'danger')
            ->times(1);
    }

    /** @test */
    public function it_can_be_dismissable()
    {
        $this->alert->message('dismissible message')->dismissible();

        $this->session
            ->shouldHaveReceived('flash')
            ->with('alert.dismissible', true)
            ->times(1);
    }

    /** @test */
    public function it_can_have_icons()
    {
        $this->alert->message('dismissible with an icon')->icon('exclamation');

        $this->session
            ->shouldHaveReceived('flash')
            ->with('alert.icon', 'exclamation')
            ->times(1);
    }
}