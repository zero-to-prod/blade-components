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
            <div class="">foo</div>
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
    public function tag(): void
    {
        $expected = <<<'HTML'
            <span class="">foo</span>
            HTML;

        $this->assertComponentRenders($expected, '<x-box tag="span">foo</x-box>');
    }

    /**
     * @test
     */
    public function color(): void
    {
        $expected = <<<'HTML'
            <div class="text-red-500">foo</div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box color="text-red-500">foo</x-box>');
    }

    /**
     * @test
     */
    public function margin(): void
    {
        $expected = <<<'HTML'
            <div class="m-2">foo</div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box margin="m-2">foo</x-box>');
    }

    /**
     * @test
     */
    public function padding(): void
    {
        $expected = <<<'HTML'
            <div class="p-2">foo</div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box padding="p-2">foo</x-box>');
    }

    /**
     * @test
     */
    public function size(): void
    {
        $expected = <<<'HTML'
            <div class="h-2">foo</div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box size="h-2">foo</x-box>');
    }

    /**
     * @test
     */
    public function textSize(): void
    {
        $expected = <<<'HTML'
            <div class="text-sm">foo</div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box textSize="text-sm">foo</x-box>');
    }

    /**
     * @test
     */
    public function flex(): void
    {
        $expected = <<<'HTML'
            <div class="flex">foo</div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box flex="flex">foo</x-box>');
    }

    /**
     * @test
     *
     * @see
     */
    public function render_flex_class(): void
    {
        $expected = <<<'HTML'
            <div class="flex">foo</div>
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
            <div class="flex">foo</div>
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
            <div class="flex">foo</div>
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
            <div class="">foo</div>
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
            <div class="flex">foo</div>
            HTML;

        $this->assertComponentRenders($expected, '<x-box class="flex">foo</x-box>');
    }
}
