<?php

namespace Mach3Builders\UI\Test;

use Mockery;
use Mach3Builders\UI\Toast;

class ToastTest extends TestCase
{
    public function setUp(): void
    {
        $this->session = Mockery::spy('Illuminate\Session\Store');
        $this->toast = new Toast($this->session);
    }

    /** @test */
    public function it_toasts_a_default_success_message()
    {
        $this->toast->message('toast message');

        $this->session->shouldHaveReceived('flash')
            ->with('toast.message', 'toast message')
            ->with('toast.type', 'success')
            ->times(1);
    }

    /** @test */
    public function it_can_have_types()
    {
        $this->toast->message('dangerous message')->type('danger');

        $this->session->shouldHaveReceived('flash')
            ->with('toast.type', 'danger')
            ->times(1);
    }

    /** @test */
    public function it_can_have_a_title()
    {
        $this->toast->message('toast message')->title('message center');

        $this->session->shouldHaveReceived('flash')
            ->with('toast.title', 'message center')
            ->times(1);
    }
}