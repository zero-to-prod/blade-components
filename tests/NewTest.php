<?php

namespace ZeroToProd\BladeComponents\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

class NewTest extends TestCase
{
    /**
     * @test
     *
     * @see
     */
    public function a(): void
    {
        $expected = <<<'HTML'
            <div class="">
                a
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box>a</x-box>');
    }
}
