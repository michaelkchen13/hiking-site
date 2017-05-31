<?php 
  //note: taken from https://code.tutsplus.com/tutorials/roll-your-own-templating-system-in-php--net-16596
/** * Loads entries from the Envato API for a given site 
* * @link https://marketplace.envato.com/api/documentation 
* * @param string $site The site from which entries should be loaded 
*  @return array An array of objects containing entry data */ 
function load_envato_blog_posts( $site=&#39;themeforest&#39; ) 
{ // Set up the request for the Envato API
  $url = &#39;http://marketplace.envato.com/api/edge/blog-posts:&#39;.$site.&#39;.json&#39;; 
  
 // Initialize an empty array to store entries $entries = array(); 
  
 // Load the data from the API
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $ch_data = curl_exec($ch);
  curl_close($ch); 
  
 // If entries were returned, load them into the array
    if(!empty($ch_data)) { 
  // Convert the JSON into an array of entry objects 
      $json_data = json_decode($ch_data, TRUE);
      foreach( $json_data[&#39;blog-posts&#39;] as $entry ) 
      {
        $entries[] = (object) $entry; 
      }  
      return $entries; 
   }
    else { 
      die(&#39;Something went wrong with the API request!&#39;);
   }
}

?>