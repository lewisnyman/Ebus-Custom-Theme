<!doctype html<?php print $rdf_header; ?>>
<!--[if IE 7 ]>    <html class="no-js ie7 oldie" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?>><![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 oldie" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?>><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="<?php print $language->language; ?>"> <!--<![endif]-->
<head<?php print $rdf_profile?>>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]>
  <script src="<?php print drupal_get_path('theme', 'ebusco'); ?>/scripts/html5.js"></script>
<![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>

  <?php print $page_top; //stuff from modules always render first ?>

  <?php print $page; // uses the page.tpl ?>

  <?php print $page_bottom; //stuff from modules always render last ?>

</body>
</html>