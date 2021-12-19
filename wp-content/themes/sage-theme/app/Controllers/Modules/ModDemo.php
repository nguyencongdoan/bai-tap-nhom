<?php

namespace App\Controllers\Modules;

class ModDemo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
