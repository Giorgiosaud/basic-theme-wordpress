<?php
namespace WordpressBase\CustomPosts;

class Service extends CustomPostBase
{
    protected $icon='dashicons-businessman';
    protected $supports=array( 'title', 'editor', 'excerpt' , 'thumbnail');
    // protected $supports=array('editor');


}
