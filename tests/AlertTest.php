<?php

namespace Mach3builders\Ui\Test;

use Mach3builders\Ui\Facades\Alert;

class AlertTest extends TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app['router']->get('alert', function () {
            return view('ui::alert');
        });
    }

    public function test_it_can_alert_a_message()
    {
        Alert::message('Alert message');

        $response = $this->get('/alert');
        
        $response->assertSeeText('Alert message');
        $response->assertSessionHas('alert.message', 'Alert message');
    }

    public function test_it_can_alert_a_message_with_a_type()
    {
        Alert::message('Alert message')->type('success');

        $response = $this->get('/alert');
        
        $response->assertSessionHas('alert.type', 'success');
    }

    public function test_it_can_alert_a_message_and_be_dismissible()
    {
        Alert::message('Alert message')->dismissible(true);

        $response = $this->get('/alert');
        
        $response->assertSessionHas('alert.dismissible', true);
    }

    public function test_it_can_alert_a_message_with_icon()
    {
        Alert::message('Alert message')->icon('warning-icon');

        $response = $this->get('/alert');
        
        $response->assertSessionHas('alert.icon', 'warning-icon');
    }

    public function test_it_doesnt_display_without_message()
    {
        $response = $this->get('/alert');

        $this->assertSame("", $response->getContent());
    }
}