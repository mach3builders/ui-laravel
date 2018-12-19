<?php

namespace Mach3builders\Ui\Test;

use Mach3builders\Ui\Facades\Notify;

class NotifyTest extends TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app['router']->get('notify', function () {
            return view('ui::notify');
        });
    }

    public function test_it_can_notify_a_message()
    {
        Notify::message('Notification message');

        $response = $this->get('/notify');
        
        $response->assertSeeText('Notification message');
        $response->assertSessionHas('notify.message', 'Notification message');
    }

    public function test_it_can_notify_a_message_with_a_type()
    {
        Notify::message('Notification message')->type('success');

        $response = $this->get('/notify');
        
        $response->assertSessionHas('notify.type', 'success');
    }

    public function test_it_doesnt_display_without_message()
    {
        $response = $this->get('/notify');

        $this->assertSame("", $response->getContent());
    }
}