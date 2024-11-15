<?php

namespace EnglishLists;

class EnglishLists
{
    static function render(array $items, string $and = 'and', bool $oxford = true): string
    {
        $last = array_pop($items);

        return implode(
            ($oxford && count($items) > 1 ? ',' : null) . rtrim(' ' . $and) . ' ',
            array_merge(array_filter([implode(', ', $items)]), [$last])
        );
    }
}
