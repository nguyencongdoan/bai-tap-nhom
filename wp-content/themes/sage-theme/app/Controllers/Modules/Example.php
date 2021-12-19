<?php

namespace App\Controllers\Modules;

use App\Services\Queries;

class Example
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'ex1' => $module['ex1'],
            'logo' => get_field('ns_header_logo', ACF_OPTION),
            'example' => $this->getExample(),
        ];
    }

    // Example lấy data trước khi xuất ra view
    protected function getExample()
    {
        return Queries::testExample();
    }
}
