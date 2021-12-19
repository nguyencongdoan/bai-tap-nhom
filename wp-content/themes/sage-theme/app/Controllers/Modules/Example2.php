<?php

namespace App\Controllers\Modules;

class Example2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'ex2' => $module['ex2'],
            'logo' => get_field('ns_header_logo', ACF_OPTION)
        ];
    }
}
