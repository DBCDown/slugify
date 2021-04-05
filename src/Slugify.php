<?php

namespace DesignByCode\Slugify;

class Slugify
{
    public static string $pattern = '/[^a-zA-Z0-9]+/';

    public string $string;

    /**
     * Slugify constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * @param string $string
     * @return array|string|string[]|null
     */
    public static function make(string $string)
    {
        return (new static($string))->convert();
    }

    /**
     * @param string $string
     * @return array|string|string[]|null
     */
    private function convert()
    {
        return preg_replace(self::$pattern, '-', $this->prepare($this->string));
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
