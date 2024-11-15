# English Lists

This library enables you to render a PHP array as an English-language list.

For example, the array `['A', 'B', 'C', 'D']` becomes string `'A, B, C, and D'`.

You can designate an alternative to the "and" (such as "or").

You can also turn off the oxford comma.


## Installation

```sh
composer require oranfry/english-lists
```

## Usage

```php
use EnglishLists\EnglishLists;

$myArray = ['Blood', 'Toil', 'Tears', 'Sweat'];

echo EnglishLists::render(
    $myArray, // the array to render
    'or', // the final separator (default: and)
    false, // don't use an oxford comma (default: use oxford comma)
); // Blood, Toil, Tears or Sweat

echo EnglishLists::render(['One']); // One
echo EnglishLists::render(['One', 'Two']); // One and Two
echo EnglishLists::render(['One', 'Two', 'Three']); // One, Two, and Three
```
