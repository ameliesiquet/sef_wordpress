<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="<?= get_bloginfo('name'); ?>">
    <meta name="title" content="SEF - Amélie Siquet">
    <meta name="keywords"
          content="Projet Client, Amélie Siquet, SEF, Webdesign, web, design, development, HEPL">
    <meta name="description"
          content="Projet fait pour le client SEF Huy, fait par Amélie Siquet, étudiante à la HEPL.">
    <link rel="stylesheet" href="<?= dw_asset('css/site.css') ?>">
    <title>SEF - Amélie Siquet</title>
</head>
<body itemscope itemtype="https://schema.org/Person">
<noscript>
    <p class="no-js__message">
        To access all the features of this site, you need to enable JavaScript.<br>
        Here are the <a href="https://www.enable-javascript.com/" title="to the enable-javascript site">instructions
            to enable JavaScript in your web browser</a>.
    </p>
</noscript>
<header role="banner">
    <h1 class="visually_hidden" role="heading" aria-level="1">Projet-SEF
        <span itemprop="name">Amélie</span>
        <span itemprop="familyName">Siquet</span> -
    </h1>
    <?php get_template_part('components/navigation'); ?>
</header>
