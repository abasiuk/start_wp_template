<?php
/**
 * Created by PhpStorm.
 * User: Everad
 * Date: 01.11.2017
 * Time: 17:24
 */
?>
<h1>Main Settings</h1>
<?php settings_errors(); ?>
<form action="options.php" method="post">
    <?php settings_fields('start-settings-group'); ?>
    <?php do_settings_sections('abasiuk_start')?>
    <?php submit_button();?>
</form>