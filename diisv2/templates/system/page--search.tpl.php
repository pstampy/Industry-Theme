<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['branding']: Items for the branding region.
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see omega_preprocess_page()
 */
?>
<div class="l-page">
  <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  <header class="l-header" role="banner">
    <div class="l-top-bar-wrapper">
      <div class="l-top-bar">
            <div class="l-top-menu-right">
             <?php print radwaste_2016_block_render('menu', 'menu-top-menu'); ?> 
            </div>
            <div class="l-search-wrapper">
              <div class="l-search" role="search">
                <?php print radwaste_2016_block_render('search', 'search-block-form'); ?>
              </div>
            </div>
      </div>
    </div>
    <div class="l-branding-wrapper">
      <div class="l-branding">
        <div class="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <img src="<?php print base_path() . path_to_theme() . '/images/australian-government-stacked.svg' ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
        <div class="site-name">
          <h1 class="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="main-menu">
        <?php print radwaste_2016_block_render('superfish', '1'); ?>     
      </div>
    </div>
  </header>

  <div class="l-main">
    <div class="l-content" role="main">
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <h1>Search results</h1>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
  </div>

  <footer class="l-footer" role="contentinfo">
    <div class="footer-wrapper">
      <?php if(!$is_front): ?>
          <div class="share">
            <?php 
              $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              $title = drupal_get_title();
              ?>
              <div id="social">
              <h2>Share this page</h2>
              <ul class="no-bullet">
                <li><a <?php echo'href="https://www.facebook.com/sharer/sharer.php?u='.$actual_link.'"';  ?> class="icon-social-facebook"><span class="show-for-sr">Facebook</span></a></li>
               <li><a <?php echo 'href="mailto:?subject='.$title.'&body='.$actual_link.'"'; ?> class="icon-mail"><span class="show-for-sr">Email</span></a></li>        
              <li><a href="javascript:window.print()" class="icon-print"><span class="show-for-sr">Print</span></a></li>
                     
              </ul> 
            </div>
          </div>
        <?php endif ?>
      <div class="subscribe">
        <?php print radwaste_2016_block_render('block', '1'); ?>   
      </div>
    </div>
    <div class="sub-footer-wrapper">
      <div class="footer-menu">
       <?php print radwaste_2016_block_render('menu', 'menu-footer-menu'); ?>   
      </div>
      <!--<div class="copyright">
        <?php print radwaste_2016_block_render('copyright_block', 'copyright_block'); ?>      
      </div>-->
      <p class="rap">The department acknowledges the traditional owners of the country throughout Australia and their continuing connection to land, sea and community. We pay our respect to them and their cultures and to the elders past and present.</p> 
  </div>
  </footer>
</div>
