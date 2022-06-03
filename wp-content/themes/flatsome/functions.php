<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
function gui(){
    ?>
    <form action="" method="post" class="form_datve">
        <select name="loaive" id="loaive">
            <option value="">Chon loai ve</option>
        </select>
    </form>
    <?php
}
add_shortcode('gui', 'gui');
?>
