<?php
/**
 * --------------------------------------------------------------
 * File: mits_dsgvo-video-embed.php
 * Created by PhpStorm
 * Date: 23.05.2018
 * Time: 16:06
 *
 * Author: Hetfield
 * Copyright: (c) 2018 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 *
 * Released under the GNU General Public License
 * --------------------------------------------------------------
 */

if (defined('MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS') && MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS == 'true') {

  if (isset($_SESSION['language_code'])) {
    switch ($_SESSION['language_code']) {
      case 'de':
        $mits_dsgvo_video_embed_lang = 'de';
        break;
      case 'en':
        $mits_dsgvo_video_embed_lang = 'en';
        break;
      default:
        $mits_dsgvo_video_embed_lang = 'en';
        break;
    }
  } else {
    $mits_dsgvo_video_embed_lang = 'en';
  }

  if (defined('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS') && MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS == 'true') {
    echo '<link rel="stylesheet" href="' . xtc_href_link(DIR_WS_EXTERNAL . 'mits_dsgvo-video-embed/css/dsgvo-video-embed.min.css', '', $request_type, false) . '" type="text/css" media="screen" />';
  } else {
    echo '<link rel="stylesheet" href="' . xtc_href_link(DIR_WS_EXTERNAL . 'mits_dsgvo-video-embed/css/dsgvo-video-embed.css', '', $request_type, false) . '" type="text/css" media="screen" />';
  }
  if (defined('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS') && MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS == 'true') {
    echo '<script src="' . xtc_href_link(DIR_WS_EXTERNAL . 'mits_dsgvo-video-embed/js/dsgvo-video-embed-' . $mits_dsgvo_video_embed_lang . '.min.js', '', $request_type, false) . '" type="text/javascript"></script>';
  } else {
    echo '<script src="' . xtc_href_link(DIR_WS_EXTERNAL . 'mits_dsgvo-video-embed/js/dsgvo-video-embed-' . $mits_dsgvo_video_embed_lang . '.js', '', $request_type, false) . '" type="text/javascript"></script>';
  }

}