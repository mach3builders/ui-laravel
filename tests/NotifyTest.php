<?php

namespace Mach3builders\Ui\Test;

use Mockery;
use Mach3builders\Ui\Notify;

class NotifyTest extends TestCase
{
    public function setUp()
    {
        $this->session = Mockery::spy('Illuminate\Session\Store');
        $this->notify = new Notify($this->session);
    }

    /** @test */
    public function it_notifies_a_basic_message()
    {
        $this->notify->message('notification message');

        $this->session
            ->shouldHaveReceived('flash')
            ->with('notify.message', 'notification message')
            ->times(1);
    }

    /** @test */
    public function it_notifies_with_a_type()
    {
        $this->notify->message('notification with type')->type('warning');

        $this->session
            ->shouldHaveReceived('flash')
            ->with('notify.type', 'warning')
            ->times(1);
    }
}