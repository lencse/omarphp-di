<?php declare(strict_types=1);

namespace Omar\DependencyInjection\Configuration;

interface WireParamSetupConfiguration
{
    public function name(): string;

    public function class(): string;
}
