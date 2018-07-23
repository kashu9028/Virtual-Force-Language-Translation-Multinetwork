<?php 
    if($_POST['vf_hidden'] == 'Y') {
        //Form data sent
        $header_text = $_POST['header_text'];
        update_site_option('header_text', $header_text);
        $header_text = get_site_option('header_text');
        
        ?>
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
        <?php
    } else {
        //Normal page display
        $header_text = get_site_option('header_text');
        
    }
?>
<div class="wrap">
    <?php    echo "<h2>" . __( 'Virtual Force Settings', 'vf_utdwp' ) . "</h2>"; ?>
     
    <form name="blueex_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="vf_hidden" value="Y">
        <p><?php _e("Hero Banner Headings " ); ?><input required="required" type="text" name="header_text" value="<?php echo $header_text; ?>" size="20"></p>
        <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'vf_utdwp' ) ?>" />
        </p>
    </form>
</div>
