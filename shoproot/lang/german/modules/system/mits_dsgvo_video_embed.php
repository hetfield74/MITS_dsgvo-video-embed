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

define('MODULE_MITS_DSGVO_VIDEO_EMBED_TITLE', 'MITS DSGVO Video-Embed <span style="white-space:nowrap;">&copy; by <span style="padding:2px;background:#ffe;color:#6a9;font-weight:bold;">Hetfield (MerZ IT-SerVice)</span></span> and &copy; 2018 Arndt von Lucadou');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_DESCRIPTION', '
  <a href="https://www.merz-it-service.de/" target="_blank">
    <img src="' . DIR_WS_EXTERNAL . 'mits_dsgvo-video-embed/images/merz-it-service.png" border="0" alt="MerZ IT-SerVice" style="display:block;max-width:100%;height:auto;" />
  </a><br />
  <strong>Einfache Zwei-Klick-L&ouml;sung zur DSGVO-konformen Einbettung von YouTube- und Vimeo-Videos.</strong><br /><br />
  Dieses Skript ersetzt alle eingebetteten Videos von YouTube und Vimeo durch den Hinweis, dass es sich um eingebettete Videos handelt, welche beim Abspielen Daten an den Video-Betreiber senden. 
  Es wird ein externer Link zum Video auf der Betreiberseite angezeigt sowie ein Button, mit dem das Video trotzdem eingebettet abgespielt werden kann.
  Normal eingebettete YouTube-Videos werden durch solche mit &quot;erweitertem Datenschutzmodus&quot; ersetzt.<br /><br />
  <a href="https://github.com/a-v-l/dsgvo-video-embed">https://github.com/a-v-l/dsgvo-video-embed</a> - &copy; Arndt von Lucadou
  <br /><br />
  <div style="border:1px solid #666;background:#ffc;padding:3px">
    <strong>Rechtlicher Hinweis / Disclaimer</strong><br />
    <i>Der Autor dieses Skripts ist kein Jurist und bietet das Skript frei von jeder Haftung an. Wer Videos einbettet, wird hierzu auf jeden Fall einen eigenen Abschnitt in die Datenschutzerkl&auml;rung der eigenen Website aufnehmen m&uuml;ssen. Ob der Einsatz dieses Skriptes vollkommen rechtssicher ist, kann nicht garantiert werden.
    <br /><br /><strong>Der Gebrauch erfolgt auf eigenes Risiko!</strong></i>
  </div>
  <p>Bei Fragen, Problemen oder W&uuml;nschen zu diesem Modul oder auch zu anderen Anliegen rund um die modified eCommerce Shopsoftware nehmen Sie einfach Kontakt zu uns auf:</p> 
  <div style="text-align:center;"><a style="background:#6a9;color:#444" target="_blank" href="https://www.merz-it-service.de/Kontakt.html" class="button" onclick="this.blur();">Kontaktseite auf MerZ-IT-SerVice.de</strong></a></div>
');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS_TITLE', 'DSGVO Video-Embed-Modul aktivieren?');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_STATUS_DESC', 'Das Modul DSGVO Video-Embed aktivieren');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS_TITLE', 'Benutze die Minified-Version des Javascript-Plugins. (empfohlen)');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_JS_DESC', 'Bei Auswahl wird die komprimierte Version <i>dsgvo-video-embed.min.js</i> benutzt, ansonsten die normale <i>dsgvo-video-embed.js</i>.');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS_TITLE', 'Benutze die Minified-Version der Stylesheet-Datei. (empfohlen)');
define('MODULE_MITS_DSGVO_VIDEO_EMBED_USE_MIN_CSS_DESC', 'Bei Auswahl wird die komprimierte Version <i>dsgvo-video-embed.min.css</i> benutzt, ansonsten die normale <i>dsgvo-video-embed.css</i>.');
