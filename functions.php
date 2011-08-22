<?php
/**
 * @package WordPress
 * @subpackage YokoGeek
 */

# when a post is updated, change dashs in the permalink to underscores
# http://stackoverflow.com/questions/1728300/how-do-i-use-underscore-in-a-wordpress-permalink

# semi-bulk post update
# http://www.flickr.com/photos/ivanwalsh/3643263202/

add_filter( 'sanitize_title', 'dashes_to_underscore' );
function dashes_to_underscore( $title ){
    return str_replace( '-', '_', $title );
}

?>
