<?php
$post = $wp_query->post;
if ( in_category('circle') ) {
include(TEMPLATEPATH.'/circle_single.php');
} elseif ( in_category('enterprise') ) {
include(TEMPLATEPATH.'/enterprise_single.php');
} elseif ( in_category('event') ) {
include(TEMPLATEPATH.'/event_single.php');
} elseif ( in_category('illust') ) {
include(TEMPLATEPATH.'/illust_single.php');
} elseif ( in_category('music') ) {
include(TEMPLATEPATH.'/music_single.php');
} elseif ( in_category('novel') ) {
include(TEMPLATEPATH.'/novel_single.php');
} elseif ( in_category('photo') ) {
include(TEMPLATEPATH.'/photo_single.php');
} elseif ( in_category('programming') ) {
include(TEMPLATEPATH.'/programming_single.php');
} elseif ( in_category('cooking') ) {
include(TEMPLATEPATH.'/cooking_single.php');
} else {
include(TEMPLATEPATH.'/uncategorized_single.php');
}
?>