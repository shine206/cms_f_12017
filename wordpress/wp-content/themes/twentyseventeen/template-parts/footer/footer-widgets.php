<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ||
     is_active_sidebar( 'sidebar-4' )) :
?>
	
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="columns col-md-3 col-sm-3 col-xs-12">
	                        
	                    
			<div class="title">
                <h6>RECENT POST</h6>
            </div>
            <div class="list">
                <ul>
                <?php dynamic_sidebar( 'sidebar-2' ); 
                
                ?>
                </ul>
            </div>
            </div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="columns col-md-3 col-sm-3 col-xs-12">
			<div class="title">
                <h6>COMMENTS</h6>
            </div>
            <div class="list">
                <ul>
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
                </ul>
            </div>
            </div>
		<?php } 
        if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
            <div class="columns col-md-3 col-sm-3 col-xs-12">
            <div class="title">
                <h6>CATEGORIES</h6>
            </div>
            <div class="list">
                <ul>
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </ul>
            </div>
            </div>
        <?php } ?>

<?php endif; ?>
