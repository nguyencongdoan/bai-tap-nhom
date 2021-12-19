<?php

namespace App\Services;

trait Filters
{
    public static function filterExample()
    {
        // code here
        $data = (object) [
            'key1' => 'ok1',
            'key2' => 'ok2',
        ];
        include \App\template_path(
            \App\locate_template('partials/filters/example-filter.blade.php', $data)
        );
    }
}
