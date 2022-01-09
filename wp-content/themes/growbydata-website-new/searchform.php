<?php
/**
 * Template for displaying search forms in GBD WEBSITE NEW THEME
 *
 * @package WordPress
 * @subpackage GBD Site
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

 

<form role="search" method="get" class="search-form searchbox" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
   <div class="search-field-container"> 
        <input id="searchbox-input" type="search" class="searchbox-input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'radiate' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s"><!--  <span class=" fa fa-search"  id="basic-addon2"></span> -->
<button type="submit" id="searchsubmit" class="searchbox-submit"  value="go" />        <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>

 

</button>
</div>
</form>
