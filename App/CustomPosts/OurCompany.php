<?php
namespace WordpressBase\CustomPosts;

class OurCompany extends CustomPostBase
{
    protected $icon='dashicons-groups';
    // protected $supports=array('editor');
    public function __construct()
    {
        parent::__construct();
        // add_filter('manage_our_company_posts_columns', array($this, 'our_company_cpt_columns'));
        // add_action('manage_our_company_posts_custom_column', array($this, 'my_manage_our_company_columns'), 10, 2);
        // add_filter('manage_edit-equipo_sortable_columns', 'equipo_sortable_columns');
    }

    // public function equipo_sortable_columns($columns)
    // {
    //     $columns['duration'] = 'duration';

    //     return $columns;
    // }
    // public function my_manage_our_company_columns($column, $post_id)
    // {
    //     global $post;
    //     switch ($column) {
    //         case 'nombre':
    //         $nombre=get_post_meta($post_id, 'nombre', true);
    //         if (empty($nombre)) {
    //             echo __('Campo no llenado');
    //         } else {
    //             printf(__('%s'), $nombre);
    //         }
    //         break;
    //         default :
    //         break;
    //     }
    // }
    // public function our_company_cpt_columns($columns)
    // {
    //     $new_columns = array(
    //         'nombre' => __('Nombre', 'WordpressBase'),
    //         );
    //     return $new_columns;
    // }
}
