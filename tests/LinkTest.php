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
}
