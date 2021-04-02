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
    
//    /** @test */
//    public function can_convert_pascale_to_slug()
//    {
//        $this->assertEquals('text-slug', Slugify::make('TextSlug'));
//    }
//



}
