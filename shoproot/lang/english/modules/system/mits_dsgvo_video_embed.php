<?php
/**
 * --------------------------------------------------------------
 * File: mits_dsgvo-video-embed.php
 * Created by PhpStorm
 * Date: 23.05.2018
 * Time: 16:38
 *
 * Author: Hetfield
 * Copyright: (c) 2018 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 *
 * Released under the GNU General Public License
 * --------------------------------------------------------------
 */

define('MODULE_MITS_DSGVO_VIDEO_EMBED_TEXT_TITLE', 'DSGVO Video-Embed 1.0 <span style="white-space:nowrap;">&copy; by <span style="padding:2px;background:#ffe;color:#6a9;font-weight:bold;">Hetfield (MerZ IT-SerVice)</span></span> and &copy; 2018 Arndt von Lucadou');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_TEXT_DESCRIPTION', '
    <a href="https://www.merz-it-service.de/" target="_blank">
        <img src="'.DIR_WS_EXTERNAL.'mits_dsgvo-video-embed/images/merz-it-service.png" border="0" alt="" style="display:block;max-width:100%;height:auto;" />
    </a><br />
    <strong>Simple two-click DSGVO-compliant embedding of YouTube and Vimeo videos.</strong><br /><br />
    This script replaces all YouTube and Vimeo embedded videos by stating that they are embedded videos that send data to the video operator during playback. 
	It will display an external link to the video on the operator side as well as a button with which the video can still be played embedded.
	Normal embedded YouTube videos will be replaced by those with "enhanced privacy mode".<br /><br />
	<a href="https://github.com/a-v-l/dsgvo-video-embed">https://github.com/a-v-l/dsgvo-video-embed</a> - &copy; 2018 Arndt von Lucadou
    <br /><br />
    <div style="border:1px solid #666;background:#ffc;padding:3px"><strong>Legal notice / Disclaimer</strong><br />
    <i>The author of this script is not a lawyer and offers the script free of any liability. Anyone who embeds videos will in any case have to include their own section in the privacy policy of their own website. Whether the use of this script is completely legal, can not be guaranteed.
    <br /><br /><strong>The use is at your own risk!</strong></i></div>
');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS_TITLE', 'Status');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS_DESC', 'Modul status');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS_TITLE','Use the minified version of the javascript plugin. (recommended)');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS_DESC','If selected, the compressed version <i>dsgvo-video-embed.min.js</i>s is used, otherwise the normal <i>dsgvo-video-embed.js.</i>.');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS_TITLE','Use the Minified version of the stylesheet file. (recommended)');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS_DESC','If selected, the compressed version <i>dsgvo-video-embed.min.cs</i>s is used, otherwise the normal <i>dsgvo-video-embed.css.</i>.');
