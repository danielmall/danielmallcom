<!-- http://particletree.com/notebook/automatically-version-your-css-and-javascript-files/ -->
    <?php 
        if ( isset($_COOKIE['full-css']) ) {

            echo '<link rel="stylesheet" href="' . autoVer('/-/c/main.css') . '" />';

        } else { 
    ?>
    <style type="text/css"><?php require($_SERVER["DOCUMENT_ROOT"]."/-/c/critical.css"); ?></style>
    <script>
        function loadCSS(e,n,o,t){"use strict";var d=window.document.createElement("link"),i=n||window.document.getElementsByTagName("script")[0],r=window.document.styleSheets;return d.rel="stylesheet",d.href=e,d.media="only x",t&&(d.onload=t),i.parentNode.insertBefore(d,i),d.onloadcssdefined=function(e){for(var n,o=0;o<r.length;o++)r[o].href&&r[o].href===d.href&&(n=!0);n?e():setTimeout(function(){d.onloadcssdefined(e)})},d.onloadcssdefined(function(){d.media=o||"all"}),d} function cookie(e,i,o){if(void 0===i){var t="; "+window.document.cookie,n=t.split("; "+e+"=");return 2===n.length?n.pop().split(";").shift():null}i===!1&&(o=-1);var r;if(o){var c=new Date;c.setTime(c.getTime()+24*o*60*60*1e3),r="; expires="+c.toGMTString()}else r="";window.document.cookie=e+"="+i+r+"; path=/"} 
        if( ! cookie( 'full-css' ) ) { 
            loadCSS( "/-/c/main.css" ); 
            cookie( 'full-css', true, 7 ); 
        }
    </script>
    <noscript><link rel="stylesheet" href="<?php echo autoVer('/-/c/main.css'); ?>" /></noscript>

    <?php 
		} 
    ?>


    <!-- Mint -->
    <script src="http://stats.danielmall.com/mint/?js"></script>   

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" site="GZXIEMXW" defer></script>
    <!-- / Fathom -->