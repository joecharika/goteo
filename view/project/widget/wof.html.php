<?php

use Goteo\Core\Error,
    Goteo\Library\WallFriends,
    Goteo\Library\Text,
    Goteo\Model;

$project = $this['project'];

$wof = new WallFriends($project->id);
if (!$wof instanceof \Goteo\Library\WallFriends) return;

$URL = (NODE_ID != GOTEO_NODE) ? NODE_URL : SITE_URL;
$url = $URL.'/widget/wof/'.$project->id.'/580';
if (LANG != 'es')
    $url .= '?lang='.LANG;

$widget_code = Text::widget($url, 'wof');

?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("#a-wof").fancybox({
            'titlePosition'		: 'inside',
            'transitionIn'		: 'none',
            'transitionOut'		: 'none'
        });
    });
</script>

<a name="wof"></a>

<div class="widget wof-share">
    <div class="left"><?php echo Text::get('wof-embed-title') ?></div>
    <div class="right">
        <a title="" href="#wof-embed-code" id="a-wof" target="_blank" ><?php echo Text::get('wof-embed-button') ?></a>
        <div style="display: none;">
            <div id="wof-embed-code" class="widget projects" style="width:350px;height:250px;">
                <h2 class="widget-title"><?php echo Text::get('wof-embed-title') ?></h2>
                <div id="widget-code">
                    <div class="wc-embed" onclick="$('#code').focus();$('#code').select()"><?php echo Text::get('project-spread-embed_code'); ?></div>
                    <textarea id="code" onclick="this.focus();this.select()" readonly="readonly"><?php echo htmlentities($widget_code); ?></textarea>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
// directamente lo que devuelve la librería
echo $wof->html(580);
