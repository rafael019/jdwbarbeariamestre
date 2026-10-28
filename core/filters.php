<?php
// Permitir upload de arquivos SVG
function jdw_add_svg_support($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'jdw_add_svg_support');
