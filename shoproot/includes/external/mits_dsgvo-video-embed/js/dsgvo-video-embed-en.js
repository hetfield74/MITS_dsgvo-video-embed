/**
 * DSGVO Video Embed, v1.0.1
 * (c) 2018 Arndt von Lucadou
 * MIT License
 * https://github.com/a-v-l/dsgvo-video-embed
 */

 (function() {
   // Config
   var text = {
     youtube: '<strong>Embedded YouTube video</strong><div><p><b>Note:</b> This embedded video is provided by YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA. When playing a connection to the servers of Youtube is made. Youtube will be informed which pages you visit. If you are logged into your Youtube account, Youtube can assign your surfing behavior to you personally. This can be prevented by logging out of your Youtube account beforehand.</p><p>If a Youtube video is started, the provider uses cookies that collect information about user behavior.</p><p>Anyone who has disabled the storage of cookies for the Google Ad program will not have to expect such cookies when watching YouTube videos. Youtube also stores non-personal usage information in other cookies. If you want to prevent this, you must block the storage of cookies in the browser.</p><p>Further information on data protection at "Youtube" can be found in the privacy policy of the provider under: <a href="https://www.google.de/intl/de/policies/privacy/" rel="noopener" target="_blank">https://www.google.de/intl/de/policies/privacy/</a></p></div><a class="video-link" href="https://youtu.be/%id%" rel="noopener" target="_blank" title="Watch video on YouTube">Link to the video: https://youtu.be/%id%</a><button title="Watch the video on this page">play video</button>',
     vimeo: '<strong>Embeddes Vimeo video</strong><div><p><b>Note:</b> This embedded video is provided by Vimeo, Inc., 555 West 18th Street, NY, New York 10011, USA.<br>When playing, a connection is established to the servers of Vimeo. It tells Vimeo which pages you visit. If you are logged into your Vimeo account, Vimeo will be able to personalize your browsing behavior. This can be prevented by logging out of your Vimeo account beforehand.</p><p>If a Vimeo video is started, the provider uses cookies that collect information about user behavior.</p><p>Further information on data protection at "Vimeo" can be found in the provider\'s privacy policy at: <a href="https://vimeo.com/privacy" rel="noopener" target="_blank">https://vimeo.com/privacy</a></p></div><a class="video-link" href="https://vimeo.com/%id%" rel="noopener" target="_blank" title="Watch video on Vimeo">Link to the video: https://vimeo.com/%id%</a><button title="Watch the video on this page">play video</button>'
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
