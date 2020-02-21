<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
  public function genRevEvents()
  {
    $args = array(
    'orderby' => 'title',
    'post_type' => 'wp_events',
    );
    $query = new WP_Query( $args );

    return $query;
  }
}
