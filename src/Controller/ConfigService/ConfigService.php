<?php

namespace App\Controller\ConfigService;

class ConfigService
{
    public function getConfig($parameter)
    {
        return $_ENV[$parameter] ?? '';
    }
}
