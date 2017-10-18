<?php
    /* 
    Sidebar for newt theme.
    */

if ( ! is_active_sidebar( 'newt-sidebar-left-id' ) ) {
	return;
}
?>

<?php
    /* 
    Sidebar for newt theme.
    */

if ( ! is_active_sidebar( 'newt-sidebar-center-id' ) ) {
	return;
}
?>

<?php
    /* 
    Sidebar for newt theme.
    */

if ( ! is_active_sidebar( 'newt-sidebar-right-id' ) ) {
	return;
}
?>


<div class="newt-sidebar-container">

<aside class="newt-sidebar-left">
	<?php dynamic_sidebar( 'newt-sidebar-left-id' ); ?>
</aside>

<aside class="newt-sidebar-center">
	<?php dynamic_sidebar( 'newt-sidebar-center-id' ); ?>
</aside>

<aside class="newt-sidebar-right">
	<?php dynamic_sidebar( 'newt-sidebar-right-id' ); ?>
</aside>

</div>





