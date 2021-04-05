<?php

namespace DesignByCode\Slugify\Tests;

use DesignByCode\Slugify\Slugify;
use PHPUnit\Framework\TestCase;

class SlugifyTest extends TestCase
{
    /** @test */
    public function can_make_slug()
    {
        $this->assertEquals('text-slug', Slugify::make('text slug '));
    }

    /** @test */
    public function is_all_lowercase()
    {
        $this->assertEquals('text-slug', Slugify::make('Text Slug'));
    }

    /** @test */
    public function converts_underscore_to_dash()
    {
        $this->assertEquals('text-slug', Slugify::make('text_slug'));
    }

    /** @test */
    public function converts_multiple_underscore_to_single_dash()
    {
        $this->assertEquals('text-slug', Slugify::make('text__slug'));
    }

    /** @test */
    public function converts_multiple_mixed_separators_to_single_dash()
    {
        $this->assertEquals('text-slug', Slugify::make('text_-slug'));
    }

//    /** @test */
//    public function can_convert_pascale_to_slug()
//    {
//        $this->assertEquals('text-slug', Slugify::make('TextSlug'));
//    }
//
}
