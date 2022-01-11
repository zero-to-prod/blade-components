<?php

namespace ZeroToProd\BladeComponents\Tests;

class BoxTest extends TestCase
{
    /**
     * @test
     *
     * @see
     */
    public function default_render(): void
    {
        $expected = <<<'HTML'
            <div class="">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box>foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function hidden(): void
    {
        $expected = '';

        $this->assertComponentRenders($expected, '<x-box hidden>foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function hidden_colon(): void
    {
        $expected = '';

        $this->assertComponentRenders($expected, '<x-box :hidden="true">foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function hidden_render(): void
    {
        $expected = '';

        $this->assertComponentRenders($expected, '<x-box hidden="{{true}}">foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function render_flex_class(): void
    {
        $expected = <<<'HTML'
            <div class="flex">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box flex>foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function render_flex_class_colon(): void
    {
        $expected = <<<'HTML'
            <div class="flex">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box :flex="true">foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function render_flex_class_int(): void
    {
        $expected = <<<'HTML'
            <div class="flex">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box flex="1">foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function render_flex_class_int_0(): void
    {
        $expected = <<<'HTML'
            <div class="">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box flex="0">foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function render_flex_class_override(): void
    {
        $expected = <<<'HTML'
            <div class="flex">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box class="flex">foo</x-box>');
    }
}
