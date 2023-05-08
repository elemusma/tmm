<?php
echo '<footer>';
echo '<section>';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12" style="text-align:center;">';

echo do_shortcode('[divider style="margin-top:115px;margin-bottom:65px;"]');

echo '<p style="margin-bottom:68px;">Copyright &copy; ' . do_shortcode('[currentyear]') . ' TELL ME MORE<span class="rights-reserved" style="font-size:9px;transform: translate(0px, -5px);display: inline-block;">&reg;</span>. All rights reserved.</p>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

echo '</footer>';

wp_footer();

echo '</body>';
echo '</html>';
?>