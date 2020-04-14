!function(e,t,s){"use strict";t.extend(MediaElementPlayer.prototype,{buildaudiothememark:function(e,s,i,n){t(i).append('<a href="https://audiotheme.com/?utm_source=wordpress-plugin&utm_medium=link&utm_content=cue-logo&utm_campaign=plugins" target="_blank" class="mejs-audiotheme-mark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 40"><path d="M10,40C4.5,40,0,35.5,0,30s4.5-10,10-10s10,4.5,10,10S15.5,40,10,40z M0,0l40,40V20L20,0H0z M80,0H40v14h40V0z M74,40L60,18L46,40H74z"/></svg></a>')},buildcuebackground:function(e,s,i,n){var a=t(e.container).append(t("<img />",{class:"mejs-player-background",src:e.options.cueBackgroundUrl})).find(".mejs-player-background");t.each(e.options.cuePlaylistTracks,function(t,s){e.options.cuePlaylistTracks[t].thumb.src=s.thumb.src||e.options.cueBackgroundUrl}),t(e.node).on("setTrack.cue",function(e,t,s){t.thumb=t.thumb||{},""===s.options.cueBackgroundUrl&&a.attr("src",t.thumb.src)}).trigger("backgroundCreate.cue",e)}})}(0,jQuery),function(e,t,s){"use strict";var i,n=t([]),a=!0;(i={init:function(){t(e).on("resize.cue",i.resize)},initEl:function(e){var s,n,a,u,c=t(e),r=c.data("cueMediaClasses"),o=[];if(r.breakpoints.length){for(n=0;n<r.breakpoints.length;n++)a=(s=r.breakpoints[n]).type||"min-width",u=s.size||s,o[n]={type:a,size:u,className:s.className||a+"-"+u};r.breakpoints=o,c.data("cueMediaSettings",r),i.update(c)}},resize:function(){a&&n.length&&(a=!1,setTimeout(function(){i.update(n),a=!0},t.fn.cueMediaClasses.defaults.resizeDelay))},update:function(e){e.each(function(){var e,s,i=t(this),n=i.outerWidth(),a=i.data("cueMediaClasses");if(a.breakpoints.length)for("number"!=typeof n&&(n=i.width()),s=0;s<a.breakpoints.length;s++)e=a.breakpoints[s],i.toggleClass(e.className,"min-width"===e.type?n>=e.size:n<=e.size)})}}).init(),t.fn.cueMediaClasses=function(e){var s=t.extend({breakpoints:[]},e);return this.each(function(){var e=t(this);e.data("cueMediaClasses",s),n=n.add(e),i.initEl(e)})},t.fn.cueMediaClasses.defaults={resizeDelay:800}}(this,jQuery),window.cue=window.cue||{},function(e,t,s){"use strict";var i=" -webkit- -moz- -o- -ms- ".split(" "),n={},a=t("html");cue.l10n=t.extend(cue.l10n,_cueSettings.l10n),cue.settings.hasCssFilters=function(){var e=document.createElement("div");return e.style.cssText=i.join("filter:blur(2px); "),!!e.style.length&&(void 0===document.documentMode||document.documentMode>9)}(),cue.settings.hasSvgFilters=function(){var t=!1;try{t="SVGFEColorMatrixElement"in e&&2===SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE}catch(e){}return t&&!/(MSIE|Trident)/.test(e.navigator.userAgent)}(),cue.settings.isTouch=function(){return"ontouchstart"in e||e.DocumentTouch&&document instanceof e.DocumentTouch}(),a.toggleClass("no-css-filters",!cue.settings.hasCssFilters).toggleClass("no-svg-filters",!cue.settings.hasSvgFilters),t.extend(cue,{initialize:function(){t(".cue-playlist").each(function(){var s={},i=t(this),n=i.closest(".cue-playlist-container").find(".cue-playlist-data");i.addClass(cue.settings.isTouch?"touch":"no-touch"),n.length&&(s=t.parseJSON(n.first().html())),!cue.settings.hasCssFilters&&cue.settings.hasSvgFilters&&(t("#cue-filter-blur").length||t("body").append('<svg id="cue-filter-svg" style="position: absolute; bottom: 0"><filter id="cue-filter-blur"><feGaussianBlur class="blur" stdDeviation="20" color-interpolation-filters="sRGB"/></filter></svg>'),i.on("backgroundCreate.cue",function(s,i){t(i.container).find(".mejs-player-background").css("filter","url('"+e.location.href+"#cue-filter-blur')")})),i.cuePlaylist({classPrefix:"mejs-",cueBackgroundUrl:s.thumbnail||"",cueDisableControlsSizing:!0,cueEmbedLink:s.embed_link||"",cuePermalink:s.permalink||"",cuePlaylistLoop:!1,cueResponsiveProgress:!0,cueSelectors:{playlist:".cue-playlist"},cueSkin:s.skin||"cue-skin-default",defaultAudioHeight:0,enableAutosize:!1,features:t.fn.cuePlaylist.features,setDimensions:!1,timeFormat:"m:ss"}).cueMediaClasses({breakpoints:[{type:"max-width",size:480},{type:"max-width",size:380},{type:"max-width",size:300},{type:"max-width",size:200}]})})}}),t.fn.cuePlaylist.features=["cuebackground","cueartwork","cuecurrentdetails","cueprevioustrack","playpause","cuenexttrack","volume","progress","current","duration","cueplaylist","audiothememark"],t(document).ready(cue.initialize).on("pjax:end",cue.initialize)}(this,jQuery);