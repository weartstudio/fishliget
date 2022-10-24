<?php
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$context['booking'] = do_shortcode('[wpbs id="1" title="yes/no" legend="yes/no" language="auto" form_id="1"]');

Timber::render( 'frontPage.twig', $context );