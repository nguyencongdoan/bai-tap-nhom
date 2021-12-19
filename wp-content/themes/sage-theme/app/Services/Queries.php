<?php

namespace App\Services;

class Queries
{
    public static function getOptionField($fieldName)
    {
        return get_field($fieldName, ACF_OPTION);
    }
    
    public static function testExample()
    {
        $args = [
            'post_type' => 'post'
        ];
        $queryAll = new \WP_Query($args);
        return [
            'posts' => $queryAll->post
        ];
    }

}
