# Shortcodes

> Bagian ini diletakkan di theme's plugin agar tidak terpengaruh oleh modifikasi themes.

``` php
/**
 * Add Shortcodes -> tobe moved
 */
function lead_shortcode($atts = [], $content = null)
{
  $return  = '<div class="lead-border bg-primary my-2">&nbsp;</div>';  
  $return .= '<p class="lead">' . $content. '</p>';
  $return .= '<div class="lead-border bg-primary my-2">&nbsp;</div>';  
  return $return;
}
add_shortcode('lead', 'lead_shortcode');

function l_shortcode($atts = [], $content = null)
{
  $return  = '<span class="latin">'.$content.'</span>';  
  return $return;
}
add_shortcode('l', 'l_shortcode');

```
