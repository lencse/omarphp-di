<?php declare(strict_types=1);

namespace Omar\DependencyInjection\Setup;

use Omar\DependencyInjection\Configuration\BindConfiguration;
use Omar\DependencyInjection\Configuration\ConfigurationAssembler;
use Omar\DependencyInjection\Configuration\Setting;

final class Bind implements Setting, BindConfiguration
{
    /** @var string */
    private $abstract;

    /** @var string */
    private $concrete;

    public function __construct(string $abstract, string $concrete)
    {
        $this->abstract = $abstract;
        $this->concrete = $concrete;
    }

    public function apply(ConfigurationAssembler $builder): void
    {
        $builder->bind($this);
    }

    public function abstract(): string
    {
        return $this->abstract;
    }

    public function concrete(): string
    {
        return $this->concrete;
    }
}
