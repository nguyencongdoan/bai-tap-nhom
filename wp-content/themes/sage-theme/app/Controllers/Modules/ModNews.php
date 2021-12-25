<?php

namespace App\Controllers\Modules;
use App\Services\Queries;

class ModNews
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'allpost' => $this->getNewPost(), 
            'toppost' => $this->getThreePost()
        ];
    }

    // Example lấy data trước khi xuất ra view
    protected function getNewPost()
    {
        return Queries::getPost();
    }

    protected function getThreePost(){
        return Queries::newPost();
    }
}
