<?php

namespace Sven\LaravelTestingUtils\Constraints;

use Illuminate\Contracts\View\Factory;
use PHPUnit\Framework\Constraint\Constraint;

class ViewNotExists extends Constraint
{
    public function matches($other): bool
    {
        /** @var \Illuminate\View\Factory $viewFactory */
        $viewFactory = app(Factory::class);

        return ! $viewFactory->exists($other);
    }

    public function toString(): string
    {
        return 'does not exist';
    }
}