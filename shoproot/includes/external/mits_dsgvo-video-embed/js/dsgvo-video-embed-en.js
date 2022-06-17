/**
 * DSGVO Video Embed, v1.0.3
 * (c) 2021 Arndt von Lucadou
 * MIT License
 * https://github.com/a-v-l/dsgvo-video-embed
 */

 (function() {
   // Config
   var text = {
     youtube: '<strong>Embedded YouTube video</strong><div><p><b>Notice:</b> This embedded video is provided by YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA.<br>When playing, a connection to the YouTube servers is established. YouTube is communicated which pages you visit. If you are logged into your YouTube account, YouTube can personally assign your surfing behavior to you personally. You prevent this by logging out of your YouTube account beforehand.</p><p>If a YouTube video is started, the provider uses cookies that collect information about user behavior.</p><p>Anyone who has deactivated cookies for the Google Ads program will not have to expect such cookies when looking at YouTube videos. YouTube also releases non-person-related usage information in other cookies. If you want to prevent this, you have to block the storage of cookies in the browser.</p><p>Further information on data protection at "YouTube" can be found in the data protection declaration of the provider at: <a href="https://www.google.de/intl/de/policies/privacy/" rel="noopener" target="_blank">https://www.google.de/intl/de/policies/privacy/</a></p></div><a class="video-link" href="https://youtu.be/%id%" rel="noopener" target="_blank" title="Watch video on YouTube">Link to the video: https://youtu.be/%id%</a><button title="Watch the video on this page">play video</button>',
     vimeo: '<strong>Embedded Vimeo video</strong><div><p><b>Notice:</b> This embedded video is provided by Vimeo, Inc., 555 West 18th Street, New York, New York 10011, USA.<br>When playing, a connection to the Vimeo servers is established. Vimeo is communicated which pages you visit. If you are logged into your Vimeo account, Vimeo can personally assign your surfing behavior to you. You prevent this by logging out of your Vimeo account beforehand.</p><p>If a Vimeo video is started, the provider uses cookies that collect information about user behavior.</p><p>Further information on data protection at "Vimeo" can be found in the data protection declaration of the provider at: <a href="https://vimeo.com/privacy" rel="noopener" target="_blank">https://vimeo.com/privacy</a></p></div><a class="video-link" href="https://vimeo.com/%id%" rel="noopener" target="_blank" title="Watch video on Vimeo">Link to the video: https://vimeo.com/%id%</a><button title="Watch the video on this page">play video</button>'
   };
   window.video_iframes = [];
   document.addEventListener("DOMContentLoaded", function() {
     var video_frame, wall, video_platform, video_src, video_id, video_w, video_h;
     for (var i=0, max = window.frames.length - 1; i <= max; i+=1) {
       video_frame = document.getElementsByTagName('iframe')[0];
       video_src = video_frame.src;
       // Only process video iframes [youtube|vimeo]
       if (video_src.match(/youtube|vimeo/) == null) {
         continue;
       }
      
       video_iframes.push(video_frame);
       video_w = video_frame.getAttribute('width');
       video_h = video_frame.getAttribute('height');
       wall = document.createElement('article');
      
      
       // Prevent iframes from loading remote content
       if (typeof (window.frames[0].stop) === 'undefined'){
       	setTimeout(function() {window.frames[0].execCommand('Stop');},1000);
       }else{
       	setTimeout(function() {window.frames[0].stop();},1000);
       }
       video_platform = video_src.match(/vimeo/) == null ? 'youtube' : 'vimeo';
       video_id = video_src.match(/(embed|video)\/([^?\s]*)/)[2];
       wall.setAttribute('class', 'video-wall');
       wall.setAttribute('data-index', i);
       if (video_w && video_h) {
         wall.setAttribute('style', 'width:'+video_w+'px;height:'+video_h+'px');
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
