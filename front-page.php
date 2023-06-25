<!-- front-page.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: Frontpage
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

?>

<?php get_header(); ?>
<?php get_template_part('parts/top', 'navigation'); ?>

<?php get_template_part('parts/section', 'hero'); ?>
<?php get_template_part('parts/section', 'testmonail-parteners',['block'=>false,]); ?>
<?php get_template_part('parts/section', 'packages'); ?>
<?php get_template_part('parts/section', 'marriage'); ?>
<?php get_template_part('parts/section', 'gifts', ['category_slug'=>'shop']); ?>
<?php get_template_part('parts/section', 'team'); ?>
<?php get_template_part('parts/section', 'reviews'); ?>
<?php get_template_part('parts/section', 'how'); ?>
<?php get_template_part('parts/section', 'nyc', ['num'=>1]); ?>
<?php get_template_part('parts/section', 'mpnyc'); ?>
<?php get_template_part('parts/section', 'pvideo'); ?>
<?php get_template_part('parts/section', 'ptext1'); ?>
<?php get_template_part('parts/section', 'ptext2'); ?>
<?php get_template_part('parts/section', 'ptext3'); ?>
<?php get_template_part('parts/section', 'ptext4'); ?>
<?php get_template_part('parts/section', 'faq'); ?>
<?php get_template_part('parts/section', 'blog', ['header'=>'Proposal blog']); ?>

<?php get_footer(); ?>