<?php
// カスタム投稿タイプ「works」を登録
add_action('init', 'register_works_post_type');
function register_works_post_type()
{
    $args = array(
        'label' => '制作実績',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-images-alt2',
    );
    register_post_type('works', $args);
}

// カスタムタクソノミー「works_type」を登録
add_action('init', 'register_works_taxonomy');
function register_works_taxonomy()
{
    $args = array(
        'label' => '制作タイプ',
        'hierarchical' => false,
    );
    register_taxonomy('works_type', 'works', $args);
}

add_filter('duplicate_post_meta_excludelist', 'allow_acf_fields');
function allow_acf_fields($meta_excludelist)
{
    // ACFのメタフィールドは除外リストから削除
    return array_filter($meta_excludelist, function ($meta) {
        return strpos($meta, '_') === 0; // アンダースコアで始まるメタのみ除外
    });
}
