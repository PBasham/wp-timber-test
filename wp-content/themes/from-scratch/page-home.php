<?php
    /*
      * Template Name: Home Page
    */

    get_header();

    $context = Timber::get_context();
    Timber::render("templates/pages/home.twig", $context);

?>


<?php


// get_footer();
