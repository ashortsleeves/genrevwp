<?php

namespace App\Controllers;

use Sober\Controller\Controller;
// use Facebook;
class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function siteLogo()
    {
      return get_field('logo', 'option');
    }

    public function hero()
    {
      return get_field('hero', 'option');
    }

    public function pdf()
    {
      return get_field('gen_rev_pdf', 'option');
    }

    public function favEvents()
    {
      return get_field('favorite_events', 'option');
    }

    public function footer()
    {
      $data = [
        'form'       => get_field('contact_form_footer','option'),
        'content'    => get_field('contact_footer_content','option'),
        'background' => get_field('contact_footer_background', 'option'),
        'site_info'  => get_field('site_info', 'option'),
      ];

      return $data;
    }

    public function basicSettings()
    {
      $data = [
        'hero_section' => get_field('hero_section'),
      ];

      return $data;
    }
}
