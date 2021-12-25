<?php

namespace App\Services;

class Queries
{
    public static function getOptionField($fieldName)
    {
        return get_field($fieldName, ACF_OPTION);
    }

    public static function getPost()
    {
        $args = [
            'post_type' => 'post'
        ];

        $queryAll = new \WP_Query($args);

        return $queryAll;
    }

    // lấy ra 3 bài post mới nhất 
    public static function newPost()
    {
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'post_date',
            'order' => 'desc' 
        ];

        $queryAll = new \WP_Query($args);

        return $queryAll;
    }

    // lấy ra top 3 bài post có thể loại giống nhau
    public static function allTypePost($id_category){
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3, 
            'cat' => $id_category
        ];

        $queryAll = new \WP_Query($args);

        return $queryAll;
    }
}
