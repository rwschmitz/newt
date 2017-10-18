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


<div class="container">
    <div class="row">
        <div class="col-xl-4">

            <aside class="sidebar-left">
                <?php dynamic_sidebar( 'newt-sidebar-left-id' ); ?>
            </aside>

        </div> <!-- End col -->

        <div class="col-xl-4">

            <aside class="sidebar-center">
                <?php dynamic_sidebar( 'newt-sidebar-center-id' ); ?>
            </aside>

        </div> <!-- End col -->

        <div class="col-xl-4">

            <aside class="sidebar-right">
                <?php dynamic_sidebar( 'newt-sidebar-right-id' ); ?>
            </aside>

        </div> <!-- End col -->
    </div> <!-- End row -->
</div> <!-- End container -->





