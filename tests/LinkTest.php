<?php

namespace ZeroToProd\BladeComponents\Tests;

class LinkTest extends TestCase
{
    /**
     * @test
     */
    public function default_render(): void
    {
        $expected = <<<'HTML'
            <a class="">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link>foo</x-link>');
    }

    /**
     * @test
     */
    public function tag(): void
    {
        $expected = <<<'HTML'
            <a class=""><h1>foo</h1></a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link tag="h1">foo</x-link>');
    }

    /**
     * @test
     */
    public function color(): void
    {
        $expected = <<<'HTML'
            <a class="text-red-500">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link color="text-red-500">foo</x-link>');
    }

    /**
     * @test
     */
    public function margin(): void
    {
        $expected = <<<'HTML'
            <a class="m-2">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link margin="m-2">foo</x-link>');
    }

    /**
     * @test
     */
    public function padding(): void
    {
        $expected = <<<'HTML'
            <a class="p-2">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link padding="p-2">foo</x-link>');
    }

    /**
     * @test
     */
    public function size(): void
    {
        $expected = <<<'HTML'
            <a class="h-2">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link size="h-2">foo</x-link>');
    }


    /**
     * @test
     */
    public function textSize(): void
    {
        $expected = <<<'HTML'
            <a class="text-sm">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link textSize="text-sm">foo</x-link>');
    }

    /**
     * @test
     */
    public function flex(): void
    {
        $expected = <<<'HTML'
            <a class="flex">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link flex="flex">foo</x-link>');
    }

    /**
     * @test
     */
    public function href_and_title(): void
    {
        $expected = <<<'HTML'
            <a title="www.foo.com" class="" href="www.foo.com">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link href="www.foo.com">foo</x-link>');
    }

    /**
     * @test
     */
    public function title_override(): void
    {
        $expected = <<<'HTML'
            <a title="foo" class="" href="www.foo.com">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link href="www.foo.com" title="foo">foo</x-link>');
    }


    /**
     * @test
     */
    public function disableAutoTitle(): void
    {
        $expected = <<<'HTML'
            <a class="" href="www.foo.com">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link href="www.foo.com" disable-auto-title>foo</x-link>');
    }

    /**
     * @test
     */
    public function hidden(): void
    {
        $this->assertComponentRenders('', '<x-link hidden>foo</x-link>');
    }

    /**
     * @test
     */
    public function underline_none(): void
    {
        $expected = <<<'HTML'
            <a class="link-underline-none">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link underline="none">foo</x-link>');
    }

    /**
     * @test
     */
    public function underline_hover(): void
    {
        $expected = <<<'HTML'
            <a class="link-underline-hover">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link underline="hover">foo</x-link>');
    }

    /**
     * @test
     */
    public function underline_always(): void
    {
        $expected = <<<'HTML'
            <a class="link-underline-always">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link underline="always">foo</x-link>');
    }

    /**
     * @test
     */
    public function new_attribute(): void
    {
        $expected = <<<'HTML'
            <a target="_blank" class="">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link new>foo</x-link>');
    }

    /**
     * @test
     */
    public function new_attribute_default(): void
    {
        $expected = <<<'HTML'
            <a target="_blank" class="">foo</a>
            HTML;

        $this->assertComponentRenders($expected, '<x-link target="_blank">foo</x-link>');
    }
}
