/**
 * DSGVO Video Embed, v1.0.1
 * (c) 2018 Arndt von Lucadou
 * MIT License
 * https://github.com/a-v-l/dsgvo-video-embed
 */

 (function() {
   // Config
   var text = {
     youtube: '<strong>Eingebettetes YouTube-Video</strong><div><p><b>Hinweis:</b> Dieses eingebettete Video wird von YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA bereitgestellt.<br>Beim Abspielen wird eine Verbindung zu den Servern von Youtube hergestellt. Dabei wird Youtube mitgeteilt, welche Seiten Sie besuchen. Wenn Sie in Ihrem Youtube-Account eingeloggt sind, kann Youtube Ihr Surfverhalten Ihnen pers&ouml;nlich zuzuordnen. Dies verhindern Sie, indem Sie sich vorher aus Ihrem Youtube-Account ausloggen.</p><p>Wird ein Youtube-Video gestartet, setzt der Anbieter Cookies ein, die Hinweise &uuml;ber das Nutzerverhalten sammeln.</p><p>Wer das Speichern von Cookies f&uuml;r das Google-Ad-Programm deaktiviert hat, wird auch beim Anschauen von Youtube-Videos mit keinen solchen Cookies rechnen m&uuml;ssen. Youtube legt aber auch in anderen Cookies nicht-personenbezogene Nutzungsinformationen ab. M&ouml;chten Sie dies verhindern, so m&uuml;ssen Sie das Speichern von Cookies im Browser blockieren.</p><p>Weitere Informationen zum Datenschutz bei &quot;Youtube&quot; finden Sie in der Datenschutzerkl&auml;rung des Anbieters unter: <a href="https://www.google.de/intl/de/policies/privacy/" rel="noopener" target="_blank">https://www.google.de/intl/de/policies/privacy/</a></p></div><a class="video-link" href="https://youtu.be/%id%" rel="noopener" target="_blank" title="Video auf YouTube ansehen">Link zum Video: https://youtu.be/%id%</a><button title="Video auf dieser Seite ansehen">Video abspielen</button>',
     vimeo: '<strong>Eingebettetes Vimeo-Video</strong><div><p><b>Hinweis:</b> Dieses eingebettete Video wird von Vimeo, Inc., 555 West 18th Street, New York, New York 10011, USA bereitgestellt.<br>Beim Abspielen wird eine Verbindung zu den Servern von Vimeo hergestellt. Dabei wird Vimeo mitgeteilt, welche Seiten Sie besuchen. Wenn Sie in Ihrem Vimeo-Account eingeloggt sind, kann Vimeo Ihr Surfverhalten Ihnen pers&ouml;nlich zuzuordnen. Dies verhindern Sie, indem Sie sich vorher aus Ihrem Vimeo-Account ausloggen.</p><p>Wird ein Vimeo-Video gestartet, setzt der Anbieter Cookies ein, die Hinweise &uuml;ber das Nutzerverhalten sammeln.</p><p>Weitere Informationen zum Datenschutz bei $quot;Vimeo$quot; finden Sie in der Datenschutzerkl&auml;rung des Anbieters unter: <a href="https://vimeo.com/privacy" rel="noopener" target="_blank">https://vimeo.com/privacy</a></p></div><a class="video-link" href="https://vimeo.com/%id%" rel="noopener" target="_blank" title="Video auf Vimeo ansehen">Link zum Video: https://vimeo.com/%id%</a><button title="Video auf dieser Seite ansehen">Video abspielen</button>'
   };
   window.video_iframes = [];
   document.addEventListener("DOMContentLoaded", function() {
     var video_frame, wall, video_platform, video_src, video_id, video_w, video_h;
     for (var i=0, max = window.frames.length - 1; i <= max; i+=1) {
       video_frame = document.getElementsByTagName('iframe')[0];
       video_w = video_frame.getAttribute('width');
       video_h = video_frame.getAttribute('height');
       video_iframes.push(video_frame);
       wall = document.createElement('article');
       // Only proccess video iframes [youtube|vimeo]
       if (video_frame.src.match(/youtube|vimeo/) == null) {
         continue;
       }
       // Prevent iframes from loading remote content
       if(navigator.appName == 'Microsoft Internet Explorer') {
         window.frames[0].document.execCommand('Stop');
       } else {
         window.frames[0].stop();
       }
       video_platform = video_frame.src.match(/vimeo/) == null ? 'youtube' : 'vimeo';
       video_id = video_frame.src.match(/(embed|video)\/([^?\s]*)/)[2];
       wall.setAttribute('class', 'video-wall');
       wall.setAttribute('data-index', i);
       if (video_w && video_h) {
         wall.setAttribute('style', 'width:100%;height:'+video_h+'px');
       }
       wall.innerHTML = text[video_platform].replace(/\%id\%/g, video_id);
       video_frame.parentNode.replaceChild(wall, video_frame);
       document.querySelectorAll('.video-wall button')[i].addEventListener('click', function() {
         var video_frame = this.parentNode,
             index = video_frame.getAttribute('data-index');
         video_iframes[index].src = video_iframes[index].src.replace(/www\.youtube\.com/, 'www.youtube-nocookie.com');
         video_frame.parentNode.replaceChild(video_iframes[index], video_frame);
       }, false);
     }
   });
 })();
