# PhpFormatStatNumber

[![PHP Tests](https://github.com/paulhenri-l/php-format-stat-number/actions/workflows/php-tests.yml/badge.svg)](https://github.com/paulhenri-l/php-format-stat-number/actions/workflows/php-tests.yml)
[![PHP Code Style](https://github.com/paulhenri-l/php-format-stat-number/actions/workflows/php-code-style.yml/badge.svg)](https://github.com/paulhenri-l/php-format-stat-number/actions/workflows/php-code-style.yml)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

This package exists because I am too lazy to write `number_format(10.20, 2, '.', ' ')`
when I need to display numbers. (I format using French notation)

## Installation

```
composer require paulhenri-l/php-format-stat-number
```

## Usage

The function will be autoloaded thanks to composer so you'll only have to call
it.

```php
fsn(10000.123); // 10 000,12
```
