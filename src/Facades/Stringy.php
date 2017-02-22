<?php

/*
 * This file is part of Laravel Stringy.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Stringy\Facades;

use Illuminate\Support\Facades\Facade;

class Stringy extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'stringy';
    }
}
