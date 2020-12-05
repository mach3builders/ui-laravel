<?php

namespace Mach3Builders\UI\Test;

use Illuminate\Support\Facades\Blade;

class ModalTest extends TestCase
{
    /** @test */
    public function it_renders()
    {
        $html = view('ui::actions.delete', [
            'slot' => 'Are you sure?',
            'action' => '/user/profile',
        ])->render();

        $this->assertStringContainsString('<form method="POST" action="/user/profile">', $html);
        $this->assertStringContainsString("<p>Are you sure?</p>", $html);
    }

    /** @test */
    public function it_renders_with_get_method()
    {
        $html = view('ui::actions.delete', [
            'action' => '/users',
            'method' => 'PATCH',
            'method_field' => 'PATCH',
        ])->render();

        $this->assertStringContainsString('<form method="PATCH" action="/users">', $html);
        $this->assertStringContainsString('<input type="hidden" name="_method" value="PATCH">', $html);
    }
}