<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 * 
 * 
 * */

?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="" name="s" id="s" placeholder="Search.." />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>