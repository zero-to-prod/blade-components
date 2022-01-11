<?php

namespace ZeroToProd\BladeComponents\Tests;

class ContainerTest extends TestCase
{
    /**
     * @test
     */
    public function default_render(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-7xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container>foo</x-container>');
    }

    /**
     * @test
     */
    public function hidden(): void
    {
        $this->assertComponentRenders('', '<x-container hidden>foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_0(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-0">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="0">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_none(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-none">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="none">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_xs(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-xs">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="xs">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_sm(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-sm">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="sm">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_md(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-md">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="md">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_lg(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-lg">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="lg">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="xl">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_2xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-2xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="2">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_3xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-3xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="3">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_4xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-4xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="4">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_5xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-5xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="5">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_6xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-6xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="6">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_7xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-7xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="7">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_full(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-full">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="full">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_min(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-min">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="min">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_max(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-max">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="max">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_fit(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-fit">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="fit">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_prose(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-prose">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="prose">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_screen_sm(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-screen-sm">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="screen-sm">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_screen_md(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-screen-md">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="screen-md">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_screen_lg(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-screen-lg">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="screen-lg">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_screen_xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-screen-xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="screen-xl">foo</x-container>');
    }

    /**
     * @test
     */
    public function max_w_screen_2xl(): void
    {
        $expected = <<<'HTML'
            <div class="mx-auto px-4 max-w-screen-2xl">
                foo
            </div>
            HTML;

        $this->assertComponentRenders($expected, '<x-container max-width="screen-2xl">foo</x-container>');
    }
}
