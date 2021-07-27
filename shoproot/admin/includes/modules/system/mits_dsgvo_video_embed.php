<?php
/**
 * --------------------------------------------------------------
 * File: mits_dsgvo-video-embed.php
 * Created by PhpStorm
 * Date: 23.05.2018
 * Time: 16:33
 *
 * Author: Hetfield
 * Copyright: (c) 2018 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 *
 * Released under the GNU General Public License
 * --------------------------------------------------------------
 */

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

class mits_dsgvo_video_embed {
  var $code, $title, $description, $enabled;

  function __construct() {
    $this->code = 'mits_dsgvo_video_embed';
    $this->title = constant('MODULE_' . strtoupper($this->code) . '_TEXT_TITLE');
    $this->description = constant('MODULE_' . strtoupper($this->code) . '_TEXT_DESCRIPTION');
    $this->sort_order = defined('MODULE_' . strtoupper($this->code) . '_SORT_ORDER') ? constant('MODULE_' . strtoupper($this->code) . '_SORT_ORDER') : 0;
    $this->enabled = ((constant('MODULE_' . strtoupper($this->code) . '_STATUS') == 'true') ? true : false);
  }

  function process($file) {
    //do nothing
  }

  function display() {
    return array(
      'text' => '<br>' . xtc_button(BUTTON_SAVE) . '&nbsp;' .
        xtc_button_link(BUTTON_CANCEL, xtc_href_link(FILENAME_MODULE_EXPORT, 'set=' . $_GET['set'] . '&module=' . $this->code))
    );
  }

  function check() {
    if (!isset($this->_check)) {
      $check_query = xtc_db_query("SELECT configuration_value FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = 'MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS'");
      $this->_check = xtc_db_num_rows($check_query);
    }
    return $this->_check;
  }

  function install() {
    xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value,  configuration_group_id, sort_order, set_function, date_added) VALUES ('MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS', 'true',  '6', '1', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value,  configuration_group_id, sort_order, set_function, date_added) VALUES ('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS', 'true',  '6', '1', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value,  configuration_group_id, sort_order, set_function, date_added) VALUES ('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS', 'true',  '6', '1', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
  }

  function remove() {
    xtc_db_query("DELETE FROM " . TABLE_CONFIGURATION . " WHERE configuration_key LIKE 'MODULE_MITS_DSGVO_VIDEO_EMBED_%'");
  }

  function keys() {
    return array(
      'MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS',
      'MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS',
      'MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS',
    );
  }
}