<?php
session_set_cookie_params(0);
session_start();
include ('includes/config.php');
error_reporting(0);
$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="pingback" href="https://blog.gripinvest.in/xmlrpc.php">

  <style id="jetpack-custom-fonts-css"></style>
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <script>document.documentElement.className = document.documentElement.className.replace("no-js", "js");</script>

  <!-- This site is optimized with the Yoast SEO plugin v17.8 - https://yoast.com/wordpress/plugins/seo/ -->
  <title>Grip | Blog -</title>
  <link rel="canonical" href="https://blog.gripinvest.in/" />
  <link rel="next" href="https://blog.gripinvest.in/page/2/" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Grip | Blog" />
  <meta property="og:url" content="https://blog.gripinvest.in/" />
  <meta property="og:site_name" content="Grip | Blog" />
  <meta name="twitter:card" content="summary_large_image" />
  <script type="application/ld+json"
    class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://blog.gripinvest.in/#website","url":"https://blog.gripinvest.in/","name":"Grip | Blog","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://blog.gripinvest.in/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"CollectionPage","@id":"https://blog.gripinvest.in/#webpage","url":"https://blog.gripinvest.in/","name":"Grip | Blog -","isPartOf":{"@id":"https://blog.gripinvest.in/#website"},"breadcrumb":{"@id":"https://blog.gripinvest.in/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://blog.gripinvest.in/"]}]},{"@type":"BreadcrumbList","@id":"https://blog.gripinvest.in/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]}]}</script>
  <!-- / Yoast SEO plugin. -->

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- font awesome -->
  <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

  <link rel='dns-prefetch' href='//secure.gravatar.com' />
  <link rel='dns-prefetch' href='//www.googletagmanager.com' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <link rel='dns-prefetch' href='//widgets.wp.com' />
  <link rel='dns-prefetch' href='//jetpack.wordpress.com' />
  <link rel='dns-prefetch' href='//s0.wp.com' />
  <link rel='dns-prefetch' href='//public-api.wordpress.com' />
  <link rel='dns-prefetch' href='//0.gravatar.com' />
  <link rel='dns-prefetch' href='//1.gravatar.com' />
  <link rel='dns-prefetch' href='//2.gravatar.com' />
  <link rel='dns-prefetch' href='//i0.wp.com' />
  <link rel='dns-prefetch' href='//c0.wp.com' />
  <link rel="alternate" type="application/rss+xml" title="Grip | Blog &raquo; Feed"
    href="https://blog.gripinvest.in/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Grip | Blog &raquo; Comments Feed"
    href="https://blog.gripinvest.in/comments/feed/" />
  <link id="hu-user-gfont" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=latin-ext"
    rel="stylesheet" type="text/css">
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel='stylesheet' id='all-css-0289dc4c452f4fc48b78d7dfcf786856'
    href='https://blog.gripinvest.in/_static/??-eJyNUltuAjEMvFCDoar6+Kh6ljzMYnCSVZx0tbevoaxEKbvwk2Riz9gZZ+iNz6liqtBz6ygJdE2hw9KBa8QBHGd/MEyu2DKC1JFx5UWehv9UtmNu1XSFwt9ESp5bQIG9QMRAFhnjkXkJeqVjMYyd9eMqUrrL1tglvuRct+bz6R0CgaT+NmemuzkOWhlNtU5T83aKCnxjCrkA+RxzTueHLpSekbEiqJuSQHxBTEsae6y99QeIOTRWJ7wtuQkyyEC9muZaCvNzmWWfA2a6eFSgEmMwnWVG/RML6FFBpoOuNz9X3elwBXYNo02Ta9ui0ZN30dJN5+7QtnowdkDJcXF4141Kczot6ivldIXuSRzLns/H1K/4uXl9WW/e128fzz+trVsm'
    type='text/css' media='all' />
  <style id='wp-block-library-inline-css'>
    .has-text-align-justify {
      text-align: justify;
    }
  </style>
  <style id='ez-toc-inline-css'>
    div#ez-toc-container p.ez-toc-title {
      font-size: 120%;
    }

    div#ez-toc-container p.ez-toc-title {
      font-weight: 500;
    }

    div#ez-toc-container ul li {
      font-size: 95%;
    }
  </style>
  <style id='hueman-main-style-inline-css'>
    body {
      font-family: 'Poppins', sans-serif;
      font-size: 1.00rem
    }

    @media only screen and (min-width: 720px) {
      .nav>li {
        font-size: 1.00rem;
      }
    }

    ::selection {
      background-color: #00b8b7;
    }

    ::-moz-selection {
      background-color: #00b8b7;
    }

    a,
    a>span.hu-external::after,
    .themeform label .required,
    #flexslider-featured .flex-direction-nav .flex-next:hover,
    #flexslider-featured .flex-direction-nav .flex-prev:hover,
    .post-hover:hover .post-title a,
    .post-title a:hover,
    .sidebar.s1 .post-nav li a:hover i,
    .content .post-nav li a:hover i,
    .post-related a:hover,
    .sidebar.s1 .widget_rss ul li a,
    #footer .widget_rss ul li a,
    .sidebar.s1 .widget_calendar a,
    #footer .widget_calendar a,
    .sidebar.s1 .alx-tab .tab-item-category a,
    .sidebar.s1 .alx-posts .post-item-category a,
    .sidebar.s1 .alx-tab li:hover .tab-item-title a,
    .sidebar.s1 .alx-tab li:hover .tab-item-comment a,
    .sidebar.s1 .alx-posts li:hover .post-item-title a,
    #footer .alx-tab .tab-item-category a,
    #footer .alx-posts .post-item-category a,
    #footer .alx-tab li:hover .tab-item-title a,
    #footer .alx-tab li:hover .tab-item-comment a,
    #footer .alx-posts li:hover .post-item-title a,
    .comment-tabs li.active a,
    .comment-awaiting-moderation,
    .child-menu a:hover,
    .child-menu .current_page_item>a,
    .wp-pagenavi a {
      color: #00b8b7;
    }

    input[type="submit"],
    .themeform button[type="submit"],
    .sidebar.s1 .sidebar-top,
    .sidebar.s1 .sidebar-toggle,
    #flexslider-featured .flex-control-nav li a.flex-active,
    .post-tags a:hover,
    .sidebar.s1 .widget_calendar caption,
    #footer .widget_calendar caption,
    .author-bio .bio-avatar:after,
    .commentlist li.bypostauthor>.comment-body:after,
    .commentlist li.comment-author-admin>.comment-body:after {
      background-color: #00b8b7;
    }

    .post-format .format-container {
      border-color: #00b8b7;
    }

    .sidebar.s1 .alx-tabs-nav li.active a,
    #footer .alx-tabs-nav li.active a,
    .comment-tabs li.active a,
    .wp-pagenavi a:hover,
    .wp-pagenavi a:active,
    .wp-pagenavi span.current {
      border-bottom-color: #00b8b7 !important;
    }

    .sidebar.s2 .post-nav li a:hover i,
    .sidebar.s2 .widget_rss ul li a,
    .sidebar.s2 .widget_calendar a,
    .sidebar.s2 .alx-tab .tab-item-category a,
    .sidebar.s2 .alx-posts .post-item-category a,
    .sidebar.s2 .alx-tab li:hover .tab-item-title a,
    .sidebar.s2 .alx-tab li:hover .tab-item-comment a,
    .sidebar.s2 .alx-posts li:hover .post-item-title a {
      color: #00357c;
    }

    .sidebar.s2 .sidebar-top,
    .sidebar.s2 .sidebar-toggle,
    .post-comments,
    .jp-play-bar,
    .jp-volume-bar-value,
    .sidebar.s2 .widget_calendar caption {
      background-color: #00357c;
    }

    .sidebar.s2 .alx-tabs-nav li.active a {
      border-bottom-color: #00357c;
    }

    .post-comments::before {
      border-right-color: #00357c;
    }

    .search-expand,
    #nav-topbar.nav-container {
      background-color: #00357c
    }

    @media only screen and (min-width: 720px) {
      #nav-topbar .nav ul {
        background-color: #00357c;
      }
    }

    #header {
      background-color: #00357c;
    }

    @media only screen and (min-width: 720px) {
      #nav-header .nav ul {
        background-color: #00357c;
      }
    }

    #header #nav-mobile {
      background-color: #00357c;
    }

    #nav-header.nav-container,
    #main-header-search .search-expand {
      background-color: #00357c;
    }

    @media only screen and (min-width: 720px) {
      #nav-header .nav ul {
        background-color: #00357c;
      }
    }

    #footer-bottom {
      background-color: #0e357c;
    }

    img {
      -webkit-border-radius: 5px;
      border-radius: 5px;
    }

    .sidebar.expanding,
    .sidebar.collapsing,
    .sidebar .sidebar-content,
    .sidebar .sidebar-toggle,
    .container-inner>.main::before,
    .container-inner>.main::after {
      background-color: #ffffff;
    }

    @media only screen and (min-width: 480px) and (max-width: 1200px) {
      .s2.expanded {
        background-color: #ffffff;
      }
    }

    @media only screen and (min-width: 480px) and (max-width: 960px) {
      .s1.expanded {
        background-color: #ffffff;
      }
    }

    body {
      background-color: #ffffff;
    }
  </style>
  <style id='global-styles-inline-css'>
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
      --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
      --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
      --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
      --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
      --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
      --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
      --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
      --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }
  </style>
  <style id='jetpack-global-styles-frontend-style-inline-css'>
    :root {
      --font-headings: unset;
      --font-base: unset;
      --font-headings-default: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      --font-base-default: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }
  </style>
  <script type='text/javascript'
    src='https://blog.gripinvest.in/wp-content/plugins/jetpack/_inc/build/tiled-gallery/tiled-gallery/tiled-gallery.min.js?m=1638896208'></script>
  <script src='https://blog.gripinvest.in/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>


  <!-- End Google Analytics snippet added by Site Kit -->
  <link rel="https://api.w.org/" href="https://blog.gripinvest.in/wp-json/" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://blog.gripinvest.in/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml"
    href="https://blog.gripinvest.in/wp-includes/wlwmanifest.xml" />

  <link rel='shortlink' href='https://wp.me/c6Z8N' />
  <meta name="generator" content="Site Kit by Google 1.48.1" />
  <style type='text/css'>
    img#wpstats {
      display: none
    }
  </style>
  <!--[if lt IE 9]>
<script src="https://blog.gripinvest.in/wp-content/themes/hueman/assets/front/js/ie/html5shiv-printshiv.min.js"></script>
<script src="https://blog.gripinvest.in/wp-content/themes/hueman/assets/front/js/ie/selectivizr.js"></script>
<![endif]-->
  <meta name="onesignal" content="wordpress-plugin" />
  <script>

    window.OneSignal = window.OneSignal || [];

    OneSignal.push(function () {
      OneSignal.SERVICE_WORKER_UPDATER_PATH = "OneSignalSDKUpdaterWorker.js.php";
      OneSignal.SERVICE_WORKER_PATH = "OneSignalSDKWorker.js.php";
      OneSignal.SERVICE_WORKER_PARAM = { scope: "/" };
      OneSignal.setDefaultNotificationUrl("https://blog.gripinvest.in");
      var oneSignal_options = {};
      window._oneSignalInitOptions = oneSignal_options;

      oneSignal_options['wordpress'] = true;
      oneSignal_options['appId'] = '4551948a-1ffe-4ab3-bba3-82d8790519f3';
      oneSignal_options['allowLocalhostAsSecureOrigin'] = true;
      oneSignal_options['welcomeNotification'] = {};
      oneSignal_options['welcomeNotification']['disable'] = true;
      oneSignal_options['path'] = "https://blog.gripinvest.in/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/";
      oneSignal_options['safari_web_id'] = "web.onesignal.auto.15df0189-2d21-4404-bd16-e27bc91473d8";
      oneSignal_options['persistNotification'] = false;
      oneSignal_options['promptOptions'] = {};
      oneSignal_options['promptOptions']['actionMessage'] = "Want to read more such articles? Click on Allow!";
      oneSignal_options['promptOptions']['acceptButtonText'] = "Allow";
      oneSignal_options['promptOptions']['cancelButtonText'] = "No Thanks";
      oneSignal_options['notifyButton'] = {};
      oneSignal_options['notifyButton']['enable'] = true;
      oneSignal_options['notifyButton']['position'] = 'bottom-right';
      oneSignal_options['notifyButton']['theme'] = 'default';
      oneSignal_options['notifyButton']['size'] = 'large';
      oneSignal_options['notifyButton']['displayPredicate'] = function () {
        return OneSignal.isPushNotificationsEnabled()
          .then(function (isPushEnabled) {
            return !isPushEnabled;
          });
      };
      oneSignal_options['notifyButton']['showCredit'] = true;
      oneSignal_options['notifyButton']['text'] = {};
      oneSignal_options['notifyButton']['text']['tip.state.unsubscribed'] = 'We are sorry to let you go! Click on the bell icon to re-subscribe.';
      oneSignal_options['notifyButton']['text']['tip.state.subscribed'] = 'Thanks for subscribing! We&#039;ll keep you updated about the financial world.';
      oneSignal_options['notifyButton']['text']['tip.state.blocked'] = 'Seems like your browser notification is disabled. Click here to enable it.';
      OneSignal.init(window._oneSignalInitOptions);
      OneSignal.showSlidedownPrompt();
    });

    function documentInitOneSignal() {
      var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

      var oneSignalLinkClickHandler = function (event) { OneSignal.push(['registerForPushNotifications']); event.preventDefault(); }; for (var i = 0; i < oneSignal_elements.length; i++)
        oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
    }

    if (document.readyState === 'complete') {
      documentInitOneSignal();
    }
    else {
      window.addEventListener("load", function (event) {
        documentInitOneSignal();
      });
    }
  </script>
  <!-- There is no amphtml version available for this URL. -->
  <style type="text/css">
    /* If html does not have either class, do not show lazy loaded images. */
    html:not(.jetpack-lazy-images-js-enabled):not(.js) .jetpack-lazy-image {
      display: none;
    }
  </style>
  <script>
    document.documentElement.classList.add(
      'jetpack-lazy-images-js-enabled'
    );
  </script>
  <link rel="icon"
    href="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2020/06/cropped-grip-logo.png?fit=32%2C32&#038;ssl=1"
    sizes="32x32" />
  <link rel="icon"
    href="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2020/06/cropped-grip-logo.png?fit=192%2C192&#038;ssl=1"
    sizes="192x192" />
  <link rel="apple-touch-icon"
    href="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2020/06/cropped-grip-logo.png?fit=180%2C180&#038;ssl=1" />
  <meta name="msapplication-TileImage"
    content="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2020/06/cropped-grip-logo.png?fit=270%2C270&#038;ssl=1" />
  <style type="text/css" id="wp-custom-css">
    .page-title {
      display: none
    }

    #header .hu-pad {
      padding: 0px !important
    }

    #header {
      padding-bottom: unset !important;
    }

    #page {
      margin-top: unset !important;
    }

    .header-ads-desktop #header-widgets {
      float: unset !important;
      display: block !important;
    }

    #footer-bottom {
      display: none
    }
  </style><!-- Your Google Analytics Plugin is missing the tracking ID -->

  <script>
    var article = '<article id="post-650" class="group grid-item post-650 post type-post status-publish format-standard has-post-thumbnail hentry category-economy-and-markets"> <div class="post-inner post-hover"> <div class="post-thumbnail"> <a href="https://blog.gripinvest.in/the-changing-landscape-of-warehousing-and-logistics-sector-in-india/"> <img width="938" height="457" src="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?fit=938%2C457&amp;ssl=1" class="attachment-full size-full wp-post-image jetpack-lazy-image" alt="" loading="lazy" data-attachment-id="665" data-permalink="https://blog.gripinvest.in/the-changing-landscape-of-warehousing-and-logistics-sector-in-india/warehouse-and-logistics-4/" data-orig-file="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?fit=938%2C457&amp;ssl=1" data-orig-size="938,457" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;Warehouse with cargo vehicle truck scenery vector illustration graphic design&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;Warehouse and logistics&quot;,&quot;orientation&quot;:&quot;1&quot;}" data-image-title="Warehouse and logistics" data-image-description="" data-image-caption="&lt;p&gt;Warehouse &lt;/p&gt;" data-medium-file="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?fit=300%2C146&amp;ssl=1" data-large-file="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?fit=938%2C457&amp;ssl=1" data-lazy-srcset="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?w=938&amp;ssl=1 938w, https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?resize=300%2C146&amp;ssl=1 300w, https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?resize=768%2C374&amp;ssl=1 768w" data-lazy-sizes="(max-width: 938px) 100vw, 938px" data-lazy-src="https://i0.wp.com/blog.gripinvest.in/wp-content/uploads/2021/03/Final.jpg?fit=938%2C457&amp;ssl=1&amp;is-pending-load=1" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" /> </a> </div> <!--/.post-thumbnail--> <div class="post-meta group"> <p class="post-category"><a href="https://blog.gripinvest.in/category/economy-and-markets/" rel="category tag">Economy and Markets</a></p> <p class="post-date"> <time class="published updated" datetime="2021-03-25 13:44:24">March 25, 2021</time> </p> <p class="post-date"> &nbsp;by&nbsp;<a href="https://blog.gripinvest.in/author/gripforum/" title="Posts by Forum Bhatt" rel="author">Forum Bhatt</a> </p> </div> <!--/.post-meta--> <h2 class="post-title entry-title"> <a href="https://blog.gripinvest.in/the-changing-landscape-of-warehousing-and-logistics-sector-in-india/" rel="bookmark" title="Permalink to The Changing Landscape Of Warehousing And Logistics Sector In India">The Changing Landscape Of Warehousing And Logistics Sector In India</a> </h2> <!--/.post-title--> <div class="entry excerpt entry-summary"> <p>The need for a sophisticated warehousing and logistics ecosystem has significantly increased over the years with the evolution of the Indian economy. The warehousing and the logistics sector was already on the growth trajectory,&#46;&#46;&#46;</p> </div> <!--/.entry--> </div> <!--/.post-inner--> </article>'

    var rowhtml = '<div class="post-row"></div>'
    // $(document).ready(function () {

    var count = 0;
    function create() {
      let row = $("div.post-row");
      // let length = row.length - 1;
      let lastRow = row[row.length - 1];
      let childrenCount = lastRow.children.length;
      if (childrenCount == 2) {
        $("div#grid-wrapper").append(rowhtml)
      }
      row = $("div.post-row");
      lastRow = row[row.length - 1];
      console.log(article);
      article = $.parseHTML(article);
      console.log(article);
      console.log(count);
      lastRow.append(article[count]);
      count++;


      // let lastRow = $("div.post-row");
      // length_lastRow = lastRow.length - 1;

      // let childrenCount = lastRow[length_lastRow].children.length;
      // console.log(childrenCount);
      // if (childrenCount == 2) {
      //   $("div#grid-wrapper").append(row);
      // }
      // lastRow = $("div.post-row");
      // length_lastRow = lastRow.length - 1;
      // lastRow = lastRow[length_lastRow];
      // console.log(lastRow);
      // lastRow.append(article);
    }

    // })
  </script>



  <link rel="stylesheet" href="assets/style.css">
</head>

<body class="home blog wp-embed-responsive col-2cl full-width header-desktop-sticky hu-header-img-full-width unknown">
  <?php 
        include('includes/preloader.php')
    ?>

  <?php 
    include('includes/header.php')
  ?>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-dark-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0.49803921568627" />
          <feFuncG type="table" tableValues="0 0.49803921568627" />
          <feFuncB type="table" tableValues="0 0.49803921568627" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-red">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 0.27843137254902" />
          <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-midnight">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0" />
          <feFuncG type="table" tableValues="0 0.64705882352941" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-magenta-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.78039215686275 1" />
          <feFuncG type="table" tableValues="0 0.94901960784314" />
          <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-green">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.44705882352941 0.4" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-orange">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.098039215686275 1" />
          <feFuncG type="table" tableValues="0 0.66274509803922" />
          <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg>



























  <div id="wrapper">
    <a class="screen-reader-text skip-link" href="#content">Skip to content</a>

    <!-- <header id="header" class="both-menus-mobile-on two-mobile-menus both_menus header-ads-desktop   no-header-img">
      
      
      <div class="container group">
        <div class="container-inner">

          <div class="group hu-pad central-header-zone">
            <div class="logo-tagline-group">
            </div>

            <div id="header-widgets">
              <div id="custom_html-3" class="widget_text widget widget_custom_html">
                <div class="textwidget custom-html-widget">
                  <html>

                  <head> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164529810-1"></script>
                    <script>
                      window.dataLayer = window.dataLayer || [];
                      function gtag() {
                        dataLayer.push(arguments);
                      }
                      gtag("js", new Date());

                      gtag("config", "UA-164529810-1");
                    </script>

                    <script>
                      window.isSideMenuOpen = false;
                      function myFunction() {
                        if (!window.isSideMenuOpen) {
                          window.isSideMenuOpen = true;
                          var x = document.getElementById("dropdown");
                          if (x.className === "container header-dropdown") {
                            x.className = "container header-responsive";
                          }
                        } else {
                          window.isSideMenuOpen = false;
                          var x = document.getElementById("dropdown");
                          if (x.className === "container header-responsive") {
                            x.className = "container header-dropdown";
                          }
                        }
                      }
                    </script>
                    <style>
                      .header-data {
                        display: flex;
                        justify-content: flex-end;
                        align-items: center;
                        font-family: "Poppins";
                        padding: 0px;
                      }

                      .icon-header {
                        display: none;
                      }

                      .grip-image {
                        height: auto;
                        width: 90px;
                        max-width: unset;
                      }

                      .header-dropdown {
                        display: none;
                      }

                      .header-responsive {
                        background-color: white !important;
                        display: flex;
                        position: absolute;
                        top: 75px;
                        flex-direction: column;
                        left: 0;
                        width: 100%;
                      }

                      .get-started a {
                        color: #fff;
                      }

                      .get-started a:visited {
                        color: #fff;
                      }

                      .get-started a:hover,
                      .get-started a:focus,
                      .get-started a:active {
                        color: #fff;
                      }

                      .get-started a:focus {
                        outline: thin dotted;
                      }

                      .get-started a:hover,
                      .get-started a:active {
                        outline: 0;
                      }

                      .grip-link a {
                        color: #fff;
                      }

                      .grip-link a:visited {
                        color: #fff;
                      }

                      .grip-link a:hover,
                      .grip-link a:focus,
                      .grip-link a:active {
                        color: #fff;
                      }

                      .grip-link a:focus {
                        outline: thin dotted;
                      }

                      .grip-link a:hover,
                      .grip-link a:active {
                        outline: 0;
                      }

                      .header-container {
                        display: flex;
                        height: 80px;
                        justify-content: space-between;
                        align-items: center;
                      }

                      .grip-link {
                        padding: 0 24px;
                        font-size: 14px;
                        font-weight: 600;
                      }

                      .grip-link.active {
                        color: white;
                      }

                      .grip-link.active a {
                        color: white;
                      }

                      .get-started {
                        background-color: rgb(0, 184, 183);
                        height: 48px;
                        width: 160px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 16px;
                        font-weight: 600;
                        border-radius: 2px;
                        color: white;
                      }

                      @media screen and (max-width: 766px) {
                        .grip-link a {
                          color: #fff !important;
                          font-weight: 600;
                        }

                        .header-data span {
                          display: none;
                        }

                        .icon-header {
                          float: right;
                          display: block;
                          color: #4286f4;
                        }

                        .icon-header img {
                          height: 24px;
                          width: 24px;
                        }

                        .icon-header:hover {
                          color: #4286f4;
                        }

                        .grip-link {
                          font-size: 12px !important;
                          padding: 12px 0px !important;
                        }

                        .header-responsive {
                          padding: 0px 20px;
                        }

                        .header-container {
                          padding: 0 20px;
                        }

                        .header-data.responsive {
                          position: relative;
                        }

                        .header-data.responsive .icon {
                          position: absolute;
                          right: 0;
                          top: 0;
                        }

                        .header-data.responsive span {
                          float: none;
                          display: block;
                          text-align: left;
                        }

                        .get-started {
                          margin: 20px 0;
                        }
                      }

                      @media screen and (max-width: 499px) {
                        .grip-link {
                          font-size: 16px !important;
                        }
                      }
                    </style>
                  </head>

                  <body>
                    <div class="header-container">
                      <div class="grip">
                        <a href="https://blog.gripinvest.in"><img
                            src="https://i0.wp.com/s3.ap-south-1.amazonaws.com/gripinvest.in/home/grip_logo.png?ssl=1"
                            alt="chatgen logo" class="grip-image jetpack-lazy-image" data-recalc-dims="1"
                            data-lazy-src="https://i0.wp.com/s3.ap-south-1.amazonaws.com/gripinvest.in/home/grip_logo.png?ssl=1&amp;is-pending-load=1"
                            srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"><noscript><img
                              src="https://i0.wp.com/s3.ap-south-1.amazonaws.com/gripinvest.in/home/grip_logo.png?ssl=1"
                              alt="chatgen logo" class="grip-image" data-recalc-dims="1" /></noscript></a>
                      </div>
                      <!-- 			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button> -->
    <!-- <div class="container header-data" style="background-color: transparent;" id="head">
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in">Home</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#how-grip-works">How Grip Works</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#why-grip">Why Grip</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#how-to-invest">How to Invest</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#about0us">About Us</a>
                        </span>
                        <span class="get-started">
                          <a href="https://www.gripinvest.in/login">Get Started</a>
                        </span>

                        <a href="javascript:void(0);" class="icon-header" onclick="myFunction()">
                          <img alt="drop-icon"
                            src="https://storage.googleapis.com/chatgen-static-files/chatgen-ssr/assets/menu.svg"
                            data-lazy-src="https://storage.googleapis.com/chatgen-static-files/chatgen-ssr/assets/menu.svg?is-pending-load=1"
                            srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                            class=" jetpack-lazy-image"><noscript><img alt="drop-icon"
                              src="https://storage.googleapis.com/chatgen-static-files/chatgen-ssr/assets/menu.svg" /></noscript>
                        </a>
                      </div>
                      <div class="container header-dropdown" style="background-color: #0e357c !important;"
                        id="dropdown">
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in">Home</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#how-grip-works">How Grip Works</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#why-grip">Why Grip</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#how-to-invest">How to Invest</a>
                        </span>
                        <span class="grip-link" onclick="gtag('event', 'Use Cases', {'event_category': 'Blog',});">
                          <a href="https://www.gripinvest.in/#about0us">About Us</a>
                        </span>
                        <span class="get-started">
                          <a href="https://gripinvest.in/login">Get Started</a>
                        </span>
                      </div>
                    </div>
                  </body>

                  </html>
                </div>
              </div>
            <!-- </div>  -->
    <!--/#header-ads-->
    <!-- </div> -->


    <!-- </div> -->
    <!--/.container-inner-->
    <!-- </div> -->
    <!--/.container-->

    <!-- </header> -->
    <!--/#header-->

    <style>
      div#page {
        margin-top: 80px;
      }
    </style>


    <div class="container" id="page">
      <div class="container-inner">
        <div class="main">
          <div class="main-inner group">

            <section class="content" id="content">
              <div class="page-title hu-pad group">


              </div>
              <!--/.page-title-->
              <div class="hu-pad group">


                <div class="featured">

                  <article id="post-676"
                    class="group post-676 post type-post status-publish format-standard has-post-thumbnail hentry category-economy-and-markets">
                    <div class="post-inner post-hover">
                      <div class="post-thumbnail featured-img-thumb-xlarge">
                        <a href="https://blog.gripinvest.in/indias-foodtech-play-more-than-just-delivery/">
                          <img width="909" height="508"
                            src="assets/img/postimages/1641636246.png" />
                        </a>
                      </div>
                      <!--/.post-thumbnail-->
                      <div class="post-meta group">
                        <p class="post-category"><a href="https://blog.gripinvest.in/category/economy-and-markets/"
                            rel="category tag">Economy and Markets</a></p>
                        <p class="post-date">
                          <time class="published updated" datetime="2021-05-26 18:42:54">May 26, 2021</time>
                        </p>
                        <p class="post-date">
                          &nbsp;by&nbsp;<a href="https://blog.gripinvest.in/author/gripforum/"
                            title="Posts by Forum Bhatt" rel="author">Forum Bhatt</a> </p>

                      </div>
                      <!--/.post-meta-->

                      <h2 class="post-title entry-title">
                        <a href="https://blog.gripinvest.in/indias-foodtech-play-more-than-just-delivery/"
                          rel="bookmark" title="Permalink to India’s FoodTech Play: More Than Just Delivery">India’s
                          FoodTech Play: More Than Just Delivery</a>
                      </h2>
                      <!--/.post-title-->

                      <div class="entry excerpt entry-summary">
                        <p>&nbsp; The FoodTech story in India has been fascinating to track with rapid expansion in
                          volumes. What is equally interesting but has received less attention is the distinct evolution
                          of business models in this&#46;&#46;&#46;</p>
                      </div>
                      <!--/.entry-->

                    </div>
                    <!--/.post-inner-->
                  </article>
                  <!--/.post-->
                </div>
                <!--/.featured-->

                <!-- <div id="grid-wrapper" class="post-list group"> -->


                <!-- TESTING CODE -->
                <!-- <article>
      <div class="container">
        <div class="row"> -->
                <div id="grid-wrapper" class="post-list group">
                  <?php
if (isset($_GET['page_no']) && $_GET['page_no'] != "")
{
    $page_no = $_GET['page_no'];
}
else
{
    $page_no = 1;
}

$total_records_per_page = 6;
$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$sql1 = "SELECT * FROM `posts` WHERE posts.status=1 ";
$stmt1 = $dbh->prepare($sql1);
$stmt1->execute();
$total_records = $stmt1->rowCount();

$sql2 = "SELECT * FROM `posts` WHERE posts.status=1 ORDER BY posts.id DESC LIMIT $offset, $total_records_per_page";
$stmt2 = $dbh->prepare($sql2);
$stmt2->execute();
$datas = $stmt2->fetchAll(PDO::FETCH_OBJ);
$data_count = $stmt2->rowCount();


$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;

$s = 1;
$sql = "SELECT posts.*,categories.catname FROM posts JOIN categories ON categories.id=posts.category WHERE posts.status=:s ORDER BY posts.id DESC LIMIT $offset, $total_records_per_page";
$query = $dbh->prepare($sql);
$query->bindParam(':s', $s, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
// if ($query->rowCount() > 0) {
if ($data_count > 0)
{
    $count = 0;
    // foreach ($results as $result) {
    foreach ($datas as $data)
    {
        if ($count % 2 == 0)
        {
            if ($count != 0)
            {
                echo '</div>';
            }

            echo '<div class="post-row">';
        }
?>


                  <article id="post-650"
                    class="group grid-item post-650 post type-post status-publish format-standard has-post-thumbnail hentry category-economy-and-markets">
                    <div class="post-inner post-hover">
                      <div class="post-thumbnail"> <a
                          href="post-details-1.php?id= <?php echo htmlentities($data->id); ?>">
                          <img width="938" height="457" src="assets/img/postimages/<?php echo $data->image1 ;?>"
                            class="attachment-full size-full wp-post-image jetpack-lazy-image" alt="" loading="lazy" />
                        </a>
                        <!-- <img src="assets/img/postimages/<?php echo $data->image1 ;?>" /> -->
                      </div>
                      <!--/.post-thumbnail-->
                      <div class="post-meta group">
                        <!-- <p class="post-category"><a href="https://blog.gripinvest.in/category/economy-and-markets/"
                            rel="category tag">Economy and Markets</a></p> -->
                        <!-- <p class="post-date" style="padding-right: 15px"><a
                            href="https://blog.gripinvest.in/author/gripforum/" title="Posts by Forum Bhatt"
                            rel="author">By Admin </a> </p> -->
                        <p class="post-date"> <time class="published updated" datetime="2021-03-25 13:44">

                            <!-- <?php echo htmlentities($data->creationdate); ?> -->
                            <?php echo date('d F Y', strtotime($data->creationdate)); ?>
                          </time> </p>
                      </div>
                      <!--/.post-meta-->

                      <h2 class="post-title entry-title"><a
                          href="post-details-1.php?id= <?php echo htmlentities($data->id); ?>" rel="bookmark"
                          title="Permalink to The Changing Landscape Of Warehousing And Logistics Sector In India">
                          <?php echo htmlentities($data->title); ?>
                        </a></h2>

                      <!--/.post-title-->
                      <div class="entry excerpt entry-summary">
                        <p>
                          <?php echo htmlentities($data->grabber); ?>
                        </p>
                      </div>

                      <!--/.entry-->
                    </div>
                    <!--/.post-inner-->
                  </article>

                  <?php
        $count = $count + 1;

    }
} ?>

                </div>

                <!-- <div style='padding: 10px 20px 0;'>
                  <strong>Page
                    <?php echo $page_no . " of " . $total_no_of_pages; ?>
                  </strong>
                </div> -->

              </div>

              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li <?php if ($page_no <=1) { echo "class='page-item disabled'" ; } ?>>
                    <a style="border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;" class="page-link" <?php if ($page_no> 1)
                      {
                      echo "href='?page_no=$previous_page'";
                      } ?>><i class="fas fa-chevron-left"></i></a>
                  </li>

                  <?php
if ($total_no_of_pages <= 10)
{
    for ($counter = 1;$counter <= $total_no_of_pages;$counter++)
    {
        if ($counter == $page_no)
        {
            echo "<li class='page-item active'><a style='border:none; border-radius: 2em; background-color: rgb(40 135 158);color:white;' class='page-link'>$counter</a></li>";
        }
        else
        {
            echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white' class='page-link' href='?page_no=$counter'>$counter</a></li>";
        }
    }
}
elseif ($total_no_of_pages > 10)
{
    if ($page_no <= 4)
    {
        for ($counter = 1;$counter < 8;$counter++)
        {
            if ($counter == $page_no)
            {
                echo "<li class='page-item active'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158); color:white;'>$counter</a></li>";
            }
            else
            {
                echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=$counter'>$counter</a></li>";
            }
        }
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;'>...</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    }
    elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4)
    {
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=1'>1</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=2'>2</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;'>...</a></li>";
        for ($counter = $page_no - $adjacents;$counter <= $page_no + $adjacents;$counter++)
        {
            if ($counter == $page_no)
            {
                echo "<li class='page-item active'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link'>$counter</a></li>";
            }
            else
            {
                echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=$counter'>$counter</a></li>";
            }
        }
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;'>...</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    }
    else
    {
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=1'>1</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=2'>2</a></li>";
        echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;'>...</a></li>";
        for ($counter = $total_no_of_pages - 6;$counter <= $total_no_of_pages;$counter++)
        {
            if ($counter == $page_no)
            {
                echo "<li class='page-item active'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link'>$counter</a></li>";
            }
            else
            {
                echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;' class='page-link' href='?page_no=$counter'>$counter</a></li>";
            }
        }
    }
}
?>

                  <li <?php if ($page_no>= $total_no_of_pages)
                    {
                    echo "class='page-item disabled'";
                    } ?>>
                    <a style="border:none; border-radius: 2em;background-color: rgb(40 135 158);color:white;" class="page-link" <?php if ($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'" ;
                      } ?>><i class="fas fa-chevron-right"></i></a>
                  </li>
                  <?php if ($page_no < $total_no_of_pages)
{
    // echo "<li class='page-item'><a style='border:none; border-radius: 2em;background-color: rgb(40 135 158); border-radius: 2em;' class='page-link' href='?page_no=$total_no_of_pages'><i class='fas fa-angle-double-right'></i></a></li>";
} ?>
                </ul>
              </nav>
          </div>
          </article>


























          <!-- TESTING CODE -->





















        </div>
        <!--/.post-list-->

        <!-- <nav class="pagination group">
          <ul class="group">
            <li class="prev left"></li>
            <li class="next right"><a href="https://blog.gripinvest.in/page/2/">Next Page &raquo;</a></li>
          </ul>
        </nav> -->
        <!--/.pagination-->

      </div>
      <!--/.hu-pad-->
      </section>
      <!--/.content-->


      <!-- <div class="sidebar s1 collapsed" data-position="right" data-layout="col-2cl" data-sb-id="s1">
              <button class="sidebar-toggle" title="Expand Sidebar"><i class="fas sidebar-toggle-arrows"></i></button>
              <div class="sidebar-content">
              </div> -->
      <!--/.sidebar-content-->

      <!-- </div> -->
      <!--/.sidebar-->



    </div>
    <!--/.main-inner-->
  </div>
  <!--/.main-->
  </div>
  <!--/.container-inner-->
  </div>
  <!--/.container-->
  <!-- <footer id="footer">

      <section class="container" id="footer-full-width-widget">
        <div class="container-inner">
          <div id="custom_html-4" class="widget_text widget widget_custom_html">
            <div class="textwidget custom-html-widget">
              <html>
              <style>
                #footer-full-width-widget {
                  padding: 0;
                }

                #footer .widget {
                  padding-bottom: 0;
                }

                #footer-full-width-widget .container-inner {
                  max-width: unset !important;
                }

                .chatgen-website-footer-container {
                  background: rgb(18, 45, 81);
                  display: flex;
                  padding: 32px 208px;
                  justify-content: center;
                  flex-direction: column;
                }

                .chatgen-website-section-container {
                  display: flex;
                }

                .chatgen-website-section-large {
                  flex: 2;
                  box-sizing: border-box;
                  text-align: left;
                }

                .chatgen-website-section {
                  flex: 1;
                }

                .chatgen-website-section-heading {
                  color: #fff !important;
                  font-weight: 600;
                  font-size: 22px !important;
                  margin: 5px 0 18px;
                  text-align: left;
                }

                .chatgen-website-footer-text {
                  color: #fff !important;
                  margin-left: 12px;
                  font-size: 16px;
                }

                .chatgen-website-section-column {
                  display: flex;
                  margin-top: -5px;
                  flex-direction: column;
                }

                .chatgen-website-border-line {
                  border-bottom: 1px solid #fff !important;
                  margin: 16px 0;
                }

                .chatgen-website-footer-link {
                  text-decoration: none;
                  color: #fff !important;
                  cursor: pointer;
                  font-size: 16px;
                  margin: 8px 0;
                  width: fit-content;
                }

                .chatgen-website-footer-link:hover {
                  text-decoration: underline !important;
                }

                .chatgen-website-copy-right-container {
                  display: flex;
                  flex-direction: row;
                  align-items: center;
                  padding: 4px;
                }

                .hard {
                  opacity: 1 !important;
                }

                .chatgen-website-link {
                  margin-bottom: 10px;
                  margin-right: 20px;
                  opacity: 0.5;
                  cursor: pointer;
                  font-size: 14px;
                  text-decoration: none;
                  color: #fff !important;
                }

                .chatgen-website-link:hover {
                  text-decoration: none !important;
                }

                .footer-logo {
                  height: 50px;
                  width: auto;
                }

                .section-text {
                  width: 70%;
                  text-align: left;
                  margin-top: 30px;
                  opacity: 0.5;
                  font-size: 16px;
                  color: white;
                }

                @media (min-width: 1700px) {
                  .chatgen-website-footer-container {
                    padding: 40px 260px;
                  }

                  .chatgen-website-footer-link {
                    font-size: 20px;
                  }

                  .chatgen-website-footer-text {
                    font-size: 20px;
                  }
                }

                @media (min-width: 1025px) and (max-width: 1300px) {
                  .chatgen-website-footer-container {
                    padding: 32px 128px;
                  }
                }

                @media (min-width: 1000px) and (max-width: 1024px) {
                  .chatgen-website-footer-container {
                    padding: 14px 70px;
                  }

                  .chatgen-website-footer-link {
                    font-size: 14px;
                  }

                  .chatgen-website-section-heading {
                    font-size: 16px;
                  }

                  .chatgen-website-footer-text {
                    font-size: 14px;
                    margin-left: 10.5px;
                  }
                }

                @media (min-width: 767px) and (max-width: 999px) {
                  .chatgen-website-footer-container {
                    padding: 12px 36px;
                  }

                  .chatgen-website-footer-link {
                    font-size: 12px;
                  }

                  .chatgen-website-section-heading {
                    font-size: 14px;
                  }

                  .chatgen-website-footer-text {
                    font-size: 12px;
                    margin-left: 9px;
                  }
                }

                @media (max-width: 766px) {
                  .chatgen-selekt-link {
                    text-decoration: none;
                    margin-left: 3px;
                    color: rgb(255, 0, 137) !important;
                  }

                  .chatgen-website-section {
                    margin: 20px 0;
                  }

                  .chatgen-website-section-container {
                    flex-direction: column;
                  }

                  .chatgen-website-footer-link {
                    font-size: 16px;
                    margin: 10px 0;
                  }

                  .chatgen-website-section-heading {
                    font-size: 18px;
                  }

                  .chatgen-website-footer-text {
                    font-size: 16px;
                    margin-left: 7.5px;
                  }

                  .chatgen-website-footer-container {
                    padding: 10px 30px;
                  }

                  .section-text {
                    width: 100%;
                  }
                }
              </style>

              <body>
                <div class="chatgen-website-footer-container">
                  <div class="chatgen-website-section-container">
                    <div class="chatgen-website-section-large">
                      <img src="https://i2.wp.com/s3.ap-south-1.amazonaws.com/gripinvest.in/home/grip_logo.png"
                        class="footer-logo jetpack-lazy-image"
                        data-lazy-src="https://i2.wp.com/s3.ap-south-1.amazonaws.com/gripinvest.in/home/grip_logo.png?is-pending-load=1"
                        srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"><noscript><img
                          src="https://i2.wp.com/s3.ap-south-1.amazonaws.com/gripinvest.in/home/grip_logo.png"
                          class="footer-logo" /></noscript>
                      <p class="section-text">
                        Grip is a platform that offers curated opportunities to invest in
                        physical assets like vehicles, equipment and furniture, which are
                        leased to corporates, to earn great returns
                      </p>
                    </div>
                    <div class="chatgen-website-section">
                      <div class="chatgen-website-section-heading">Quick Links</div>
                      <div class="chatgen-website-section-column">
                        <div class="chatgen-website-footer-link">
                          <a class="chatgen-website-link" href="https://www.gripinvest.in/#what-is-it">
                            What it is
                          </a>
                        </div>
                        <div class="chatgen-website-footer-link">
                          <a class="chatgen-website-link" href="https://www.gripinvest.in/#why-grip">
                            Why Grip
                          </a>
                        </div>
                        <div class="chatgen-website-footer-link">
                          <a class="chatgen-website-link" href="https://www.gripinvest.in/#how-to-invest">
                            How to Invest
                          </a>
                        </div>
                        <div class="chatgen-website-footer-link">
                          <a class="chatgen-website-link" href="https://www.gripinvest.in/#about-us">
                            Who we are
                          </a>
                        </div>
                        <div class="chatgen-website-footer-link">
                          <a class="chatgen-website-link" href="https://www.gripinvest.in/#contact-us">
                            Contact Us
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="chatgen-website-section">
                      <div class="chatgen-website-section-heading">Company</div>
                      <div class="chatgen-website-section-column">
                        <div class="chatgen-website-footer-link">
                          <a class="chatgen-website-link">Gurgaon, NCR, IN</a>
                        </div>
                        <div class="chatgen-website-footer-link">
                          <a class="chatgen-website-link" href="mailto:invest@gripinvest.in">invest@gripinvest.in</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chatgen-website-border-line"></div>
                  <div class="chatgen-website-section-column">
                    <div class="chatgen-website-copy-right-container">
                      <div class="chatgen-website-footer-link">
                        <a class="chatgen-website-link hard" href="https://www.gripinvest.in/terms-and-conditions">
                          Terms
                        </a>
                      </div>
                      <div class="chatgen-website-footer-link">
                        <a class="chatgen-website-link hard" href="https://www.gripinvest.in/privacy-policy">
                          Privacy
                        </a>
                      </div>
                      <div class="chatgen-website-footer-link">
                        <a class="chatgen-website-link hard" href="https://www.gripinvest.in/faq">
                          FAQs
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </body>

              </html>
            </div>
          </div>
        </div> -->
  <!--/.container-inner-->
  <!-- </section> -->
  <!--/.container-->



  <!-- <section class="container" id="footer-bottom">
        <div class="container-inner">

          <a id="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>

          <div class="hu-pad group">

            <div class="grid one-half">

              <div id="copyright">
                <p></p>
              </div> -->
  <!--/#copyright-->


  <!-- </div>

            <div class="grid one-half last">
            </div>

          </div> -->
  <!--/.hu-pad-->

  <!-- </div> -->
  <!--/.container-inner-->
  <!-- </section> -->
  <!--/.container-->

  <!-- </footer> -->
  <!--/#footer-->

  </div>
  <!--/#wrapper-->

  <!--  -->
  <script defer id='bilmur' data-provider='wordpress.com' data-service='atomic'
    src='https://s0.wp.com/wp-content/js/bilmur.min.js?m=202201'></script>
  <div id="jp-carousel-loading-overlay">
    <div id="jp-carousel-loading-wrapper">
      <span id="jp-carousel-library-loading">&nbsp;</span>
    </div>
  </div>
  <div class="jp-carousel-overlay" style="display: none;">

    <div class="jp-carousel-container">
      <!-- The Carousel Swiper -->
      <div class="jp-carousel-wrap swiper-container jp-carousel-swiper-container jp-carousel-transitions" itemscope
        itemtype="https://schema.org/ImageGallery">
        <div class="jp-carousel swiper-wrapper"></div>
        <div class="jp-swiper-button-prev swiper-button-prev">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="maskPrev" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="9" height="12">
              <path d="M16.2072 16.59L11.6496 12L16.2072 7.41L14.8041 6L8.8335 12L14.8041 18L16.2072 16.59Z"
                fill="white" />
            </mask>
            <g mask="url(#maskPrev)">
              <rect x="0.579102" width="23.8823" height="24" fill="#FFFFFF" />
            </g>
          </svg>
        </div>
        <div class="jp-swiper-button-next swiper-button-next">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="maskNext" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="8" height="12">
              <path d="M8.59814 16.59L13.1557 12L8.59814 7.41L10.0012 6L15.9718 12L10.0012 18L8.59814 16.59Z"
                fill="white" />
            </mask>
            <g mask="url(#maskNext)">
              <rect x="0.34375" width="23.8822" height="24" fill="#FFFFFF" />
            </g>
          </svg>
        </div>
      </div>
      <!-- The main close buton -->
      <div class="jp-carousel-close-hint">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <mask id="maskClose" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="15" height="14">
            <path
              d="M19.3166 6.41L17.9135 5L12.3509 10.59L6.78834 5L5.38525 6.41L10.9478 12L5.38525 17.59L6.78834 19L12.3509 13.41L17.9135 19L19.3166 17.59L13.754 12L19.3166 6.41Z"
              fill="white" />
          </mask>
          <g mask="url(#maskClose)">
            <rect x="0.409668" width="23.8823" height="24" fill="#FFFFFF" />
          </g>
        </svg>
      </div>
      <!-- Image info, comments and meta -->
      <div class="jp-carousel-info">
        <div class="jp-carousel-info-footer">
          <div class="jp-carousel-pagination-container">
            <div class="jp-swiper-pagination swiper-pagination"></div>
            <div class="jp-carousel-pagination"></div>
          </div>
          <div class="jp-carousel-photo-title-container">
            <h2 class="jp-carousel-photo-caption"></h2>
          </div>
          <div class="jp-carousel-photo-icons-container">
            <a href="#" class="jp-carousel-icon-btn jp-carousel-icon-info"
              aria-label="Toggle photo metadata visibility">
              <span class="jp-carousel-icon">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="maskInfo" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="21" height="20">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M12.7537 2C7.26076 2 2.80273 6.48 2.80273 12C2.80273 17.52 7.26076 22 12.7537 22C18.2466 22 22.7046 17.52 22.7046 12C22.7046 6.48 18.2466 2 12.7537 2ZM11.7586 7V9H13.7488V7H11.7586ZM11.7586 11V17H13.7488V11H11.7586ZM4.79292 12C4.79292 16.41 8.36531 20 12.7537 20C17.142 20 20.7144 16.41 20.7144 12C20.7144 7.59 17.142 4 12.7537 4C8.36531 4 4.79292 7.59 4.79292 12Z"
                      fill="white" />
                  </mask>
                  <g mask="url(#maskInfo)">
                    <rect x="0.8125" width="23.8823" height="24" fill="#FFFFFF" />
                  </g>
                </svg>
              </span>
            </a>
            <a href="#" class="jp-carousel-icon-btn jp-carousel-icon-comments"
              aria-label="Toggle photo comments visibility">
              <span class="jp-carousel-icon">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="maskComments" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="21"
                    height="20">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M4.3271 2H20.2486C21.3432 2 22.2388 2.9 22.2388 4V16C22.2388 17.1 21.3432 18 20.2486 18H6.31729L2.33691 22V4C2.33691 2.9 3.2325 2 4.3271 2ZM6.31729 16H20.2486V4H4.3271V18L6.31729 16Z"
                      fill="white" />
                  </mask>
                  <g mask="url(#maskComments)">
                    <rect x="0.34668" width="23.8823" height="24" fill="#FFFFFF" />
                  </g>
                </svg>

                <span class="jp-carousel-has-comments-indicator" aria-label="This image has comments."></span>
              </span>
            </a>
          </div>
        </div>
        <div class="jp-carousel-info-extra">
          <div class="jp-carousel-info-content-wrapper">
            <div class="jp-carousel-photo-title-container">
              <h2 class="jp-carousel-photo-title"></h2>
            </div>
            <div class="jp-carousel-comments-wrapper">
              <div id="jp-carousel-comments-loading">
                <span>Loading Comments...</span>
              </div>
              <div class="jp-carousel-comments"></div>
              <div id="jp-carousel-comment-form-container">
                <span id="jp-carousel-comment-form-spinner">&nbsp;</span>
                <div id="jp-carousel-comment-post-results"></div>
                <form id="jp-carousel-comment-form">
                  <label for="jp-carousel-comment-form-comment-field" class="screen-reader-text">Write a
                    Comment...</label>
                  <textarea name="comment" class="jp-carousel-comment-form-field jp-carousel-comment-form-textarea"
                    id="jp-carousel-comment-form-comment-field" placeholder="Write a Comment..."></textarea>
                  <div id="jp-carousel-comment-form-submit-and-info-wrapper">
                    <div id="jp-carousel-comment-form-commenting-as">
                      <fieldset>
                        <label for="jp-carousel-comment-form-email-field">Email (Required)</label>
                        <input type="text" name="email"
                          class="jp-carousel-comment-form-field jp-carousel-comment-form-text-field"
                          id="jp-carousel-comment-form-email-field" />
                      </fieldset>
                      <fieldset>
                        <label for="jp-carousel-comment-form-author-field">Name (Required)</label>
                        <input type="text" name="author"
                          class="jp-carousel-comment-form-field jp-carousel-comment-form-text-field"
                          id="jp-carousel-comment-form-author-field" />
                      </fieldset>
                      <fieldset>
                        <label for="jp-carousel-comment-form-url-field">Website</label>
                        <input type="text" name="url"
                          class="jp-carousel-comment-form-field jp-carousel-comment-form-text-field"
                          id="jp-carousel-comment-form-url-field" />
                      </fieldset>
                    </div>
                    <input type="submit" name="submit" class="jp-carousel-comment-form-button"
                      id="jp-carousel-comment-form-button-submit" value="Post Comment" />
                  </div>
                </form>
              </div>
            </div>
            <div class="jp-carousel-image-meta">
              <div class="jp-carousel-title-and-caption">
                <div class="jp-carousel-photo-info">
                  <h3 class="jp-carousel-caption" itemprop="caption description"></h3>
                </div>

                <div class="jp-carousel-photo-description"></div>
              </div>
              <ul class="jp-carousel-image-exif" style="display: none;"></ul>
              <a class="jp-carousel-image-download" target="_blank" style="display: none;">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="19" height="18">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M5.84615 5V19H19.7775V12H21.7677V19C21.7677 20.1 20.8721 21 19.7775 21H5.84615C4.74159 21 3.85596 20.1 3.85596 19V5C3.85596 3.9 4.74159 3 5.84615 3H12.8118V5H5.84615ZM14.802 5V3H21.7677V10H19.7775V6.41L9.99569 16.24L8.59261 14.83L18.3744 5H14.802Z"
                      fill="white" />
                  </mask>
                  <g mask="url(#mask0)">
                    <rect x="0.870605" width="23.8823" height="24" fill="#FFFFFF" />
                  </g>
                </svg>
                <span class="jp-carousel-download-text"></span>
              </a>
              <div class="jp-carousel-image-map" style="display: none;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>






















  </div>


  <?php 
    include('includes/footer.php')
  ?>
  <?php 
    include('includes/header1.php')
  ?>

  <script>
    $(document).ready(function () {
      $("button.mobile-nav-toggle").click(function () {
        $("body").toggleClass("mobile-nav-active")


      })
    })

  </script>


















  <script id='jetpack-carousel-js-extra'>
    var jetpackSwiperLibraryPath = { "url": "https:\/\/blog.gripinvest.in\/wp-content\/plugins\/jetpack\/_inc\/build\/carousel\/swiper-bundle.min.js" };
    var jetpackCarouselStrings = { "widths": [370, 700, 1000, 1200, 1400, 2000], "is_logged_in": "", "lang": "en", "ajaxurl": "https:\/\/blog.gripinvest.in\/wp-admin\/admin-ajax.php", "nonce": "7eab4d3642", "display_exif": "1", "display_comments": "1", "display_geo": "1", "single_image_gallery": "1", "single_image_gallery_media_file": "", "background_color": "black", "comment": "Comment", "post_comment": "Post Comment", "write_comment": "Write a Comment...", "loading_comments": "Loading Comments...", "download_original": "View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>", "no_comment_text": "Please be sure to submit some text with your comment.", "no_comment_email": "Please provide an email address to comment.", "no_comment_author": "Please provide your name to comment.", "comment_post_error": "Sorry, but there was an error posting your comment. Please try again later.", "comment_approved": "Your comment was approved.", "comment_unapproved": "Your comment is in moderation.", "camera": "Camera", "aperture": "Aperture", "shutter_speed": "Shutter Speed", "focal_length": "Focal Length", "copyright": "Copyright", "comment_registration": "0", "require_name_email": "1", "login_url": "https:\/\/blog.gripinvest.in\/wp-login.php?redirect_to=https%3A%2F%2Fblog.gripinvest.in%2Fthe-changing-landscape-of-warehousing-and-logistics-sector-in-india%2F", "blog_id": "1", "meta_data": ["camera", "aperture", "shutter_speed", "focal_length", "copyright"] };
  </script>
  <script src='https://blog.gripinvest.in/wp-includes/js/underscore.min.js?ver=1.13.1' id='underscore-js'></script>
  <script id='hu-front-scripts-js-extra'>
    var HUParams = { "_disabled": [], "SmoothScroll": { "Enabled": false, "Options": { "touchpadSupport": false } }, "centerAllImg": "1", "timerOnScrollAllBrowsers": "1", "extLinksStyle": "", "extLinksTargetExt": "1", "extLinksSkipSelectors": { "classes": ["btn", "button"], "ids": [] }, "imgSmartLoadEnabled": "", "imgSmartLoadOpts": { "parentSelectors": [".container .content", ".container .sidebar", "#footer", "#header-widgets"], "opts": { "excludeImg": [".tc-holder-img"], "fadeIn_options": 100, "threshold": 0 } }, "goldenRatio": "1.618", "gridGoldenRatioLimit": "350", "sbStickyUserSettings": { "desktop": true, "mobile": true }, "sidebarOneWidth": "340", "sidebarTwoWidth": "260", "isWPMobile": "", "menuStickyUserSettings": { "desktop": "stick_up", "mobile": "no_stick" }, "mobileSubmenuExpandOnClick": "", "submenuTogglerIcon": "<i class=\"fas fa-angle-down\"><\/i>", "isDevMode": "", "ajaxUrl": "https:\/\/blog.gripinvest.in\/?huajax=1", "frontNonce": { "id": "HuFrontNonce", "handle": "293244cbc4" }, "isWelcomeNoteOn": "", "welcomeContent": "", "i18n": { "collapsibleExpand": "Expand", "collapsibleCollapse": "Collapse" }, "deferFontAwesome": "", "fontAwesomeUrl": "https:\/\/blog.gripinvest.in\/wp-content\/themes\/hueman\/assets\/front\/css\/font-awesome.min.css?3.6.4", "mainScriptUrl": "https:\/\/blog.gripinvest.in\/wp-content\/themes\/hueman\/assets\/front\/js\/scripts.min.js?3.6.4", "flexSliderNeeded": "1", "flexSliderOptions": { "is_rtl": false, "has_touch_support": true, "is_slideshow": true, "slideshow_speed": 5000 } };
  </script>
  <script id='jetpack-lazy-images-js-extra'>
    var jetpackLazyImagesL10n = { "loading_warning": "Images are still loading. Please cancel your print and try again." };
  </script>
  <script src='https://cdn.onesignal.com/sdks/OneSignalSDK.js?ver=5.8.2' async='async' id='remote_sdk-js'></script>

  <script>
    $(window).on('load', function () { // makes sure the whole site is loaded 
      $('#status').fadeOut(); // will first fade out the loading animation 
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
      $('body').delay(350).css({ 'overflow': 'visible' });
    })
  </script>

</body>

</html>