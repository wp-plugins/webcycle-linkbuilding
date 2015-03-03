<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>

<div class="wrap">

	<h2>Webcycle Linkbuild Plugin</h2>

<div class="webcycle_block">
	<h3>Webcycle tool instellingen</h3>

	<p><b>Stap 1</b>: Maak een account aan op <a target="_blank" href="http://www.webcycle.nl/">Webcycle.nl</a></p>

	<p><b>Stap 2</b>: Voer onderstaande gegevens in om je website te verifiëren,<br/> de benodigde gegevens kun je hier vinden.</p>

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

	<p><b>Stap 3</b>: Na het invullen & opslaan van je gegevens kun je de <br/>volgende shortcode gebruiken op de aangegeven backlinkpagina <br/>om je website te verifiëren:<br/>
	</p>
	<div style="background:#fff;border:1px solid #ccc;padding:10px;width:390px;font-family:'Courier New';">[webcycle linkbuilding="true"]</div>
	<br/>
	<p><b>Stap 4</b>: Na het plaatsen van de shortcode, moet je de backlinkpagina<br/> eenmaling bezoeken om de website binnen webcycle te activeren.
	</p>
</div>

<div class="webcycle_block second_block">
<h3>Webcycle.nl</h3>
<p>Deze plugin is de verlenging van onze gratis automatische linkbuild tool voor Wordpress. Ook profiteren van natuurlijke en spam vrije linkbuilding? Ga naar onze website en meldt u aan!
</p>

<h3>De plugin steunen?</h3>
<ul class="ul-square">
	<li><a target="_blank" href="http://wordpress.org/support/view/plugin-reviews/webcycle-linkbuilding">Schrijf een review op Wordpress.org</a></li>
	<li><a target="_blank" href="http://www.webcycle.nl">Link naar onze plugin pagina vanaf uw website of blog</a></li>
	<li><a target="_blank" href="http://www.twitter.com?status=Ik gebruik de Webcycle tool op mijn %23Wordpress site voor snelle en natuurlijke linkbuilding - een aanrader! http://goo.gl/ZtcELo">Tweet over de Webcycle Linkbuilding Plugin</a></li>
	<li><a target="_blank" href="http://wordpress.org/plugins/webcycle-linkbuilding/">Stem dat de plugin werkt op de Wordpress.org plugin pagina</a></li>
</ul>



<h3>Hulp nodig?</h3>
<p>Heeft u hulp nodig met het instellen van de tool of andere vragen over de Webcycle plugin? Neem contact met ons op via het plugin <a href="http://wordpress.org/support/plugin/webcycle-linkbuilding">support forum</a> op Wordpress.org. Neem een kijkje op onze <a href="http://wordpress.org/plugins/webcycle-linkbuilding/installation/">installatie instructies</a> voor hulp bij het instellen en gebruiken van deze plugin. </p>

<h3>Andere handige plugins</h3>

<ul class="ul-square">
	<li><a href="http://wordpress.org/plugins/wordpress-seo/" target="_blank">Wordpress SEO by Yoast</a></li>
	<li><a href="http://wordpress.org/plugins/google-sitemap-generator/" target="_blank">Google XML Sitemaps</a></li>
	<li><a href="http://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7</a></li>
</ul>

<h3>Over Webcycle</h3>

<p>Deze plugin is onderdeel van de linkbuilding tool die is ontwikkeld om het linkbuilden voor website-eigenaren gemakkelijker te maken. Door het proces te versimpelen kunt u ook zonder technische kennis uw voordeel doen met een betere vindbaarheid van uw website dankzij linkbuilding.

Blijf op de hoogte van de ontwikkelingen omtrent onze tool door het bezoeken van <a href="http://www.webcycle.nl/blog">ons blog</a>.</p><br/>

<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWebcycle%2F1398966697043635&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=101674559883465" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>

<br/>
<!-- Place this tag where you want the widget to render. -->
<div class="g-follow" data-annotation="bubble" data-height="20" data-href="https://plus.google.com/111333628471548036777" data-rel="publisher"></div>

<!-- Place this tag after the last widget tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'nl'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

</div>

</div> 

