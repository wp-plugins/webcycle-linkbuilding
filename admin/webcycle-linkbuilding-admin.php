<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>

<div class="wrap">

<h2>Webcycle Linkbuild Plugin</h2>

<h3>Linkbuild Opties</h3>

<p><b>Stap 1</b>: Voer onderstaande gegevens in om je website te verifiëren,<br/> de benodigde gegevens kun je <a target="_blank" href="http://www.webcycle.nl/dashboard">hier vinden</a>.</p>

<form method="post" action="options.php">

<?php settings_fields('webcycle-settings'); ?>

<?php do_settings_sections('webcycle-settings'); ?>

<table class="form-table">

<tr valign="top">

<th scope="row">Webcycle Token id</th>

<td><input type="text" required="" name="webcycle_token_id" value="<?php echo get_option('webcycle_token_id'); ?>" /></td>

</tr>

<tr valign="top">

<th scope="row">Webcycle Link id</th>

<td><input type="text" required="" name="webcycle_link_id" value="<?php echo get_option('webcycle_link_id'); ?>" /></td>

</tr>

</table>

<?php submit_button(); ?>

</form>

<p><b>Stap 2</b>: Na het invullen & opslaan van je gegevens kun je de <br/>volgende shortcode gebruiken op de aangegeven backlinkpagina <br/>om je website te verifiëren:<br/>
</p>
<div style="background:#fff;border:1px solid #ccc;padding:10px;width:390px;font-family:'Courier New';">[webcycle linkbuilding="true"]</div>


</div> 