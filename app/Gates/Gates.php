<?php

namespace App\Gates;

use Illuminate\Support\Facades\Gate;
use ReflectionClass;

abstract class Gates
{
    protected static $prefix = '';

    public static function define()
    {
        $reflection = new ReflectionClass(static::class);
        
        foreach($reflection->getMethods() as $method) {
            if ($method->name === 'define') continue;

            $prefix = static::$prefix;
            $instance = new static();

            Gate::define("{$prefix}.{$method->name}", 
                function ($user, ...$args) use ($instance, $method) {
                    return $instance->{$method->name}($user, ...$args);
                });
        }
    }
}