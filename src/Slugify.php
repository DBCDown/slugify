<?php

namespace DesignByCode\Slugify;

class Slugify
{
    const PATTERN = '/[^a-zA-Z0-9]+/';

    /**
     * @param string $string
     * @return array|string|string[]|null
     */
    public static function make(string $string)
    {
        return (new self())->convert($string);
    }

    /**
     * @param string $string
     * @return array|string|string[]|null
     */
    private function convert(string $string)
    {
        return preg_replace(self::PATTERN, '-', $this->prepare($string));
    }

    /**
     * @param $string
     * @return string
     */
    private function prepare($string): string
    {
        return strtolower(trim($string));
    }


}
