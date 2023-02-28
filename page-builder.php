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

<?php get_template_part('parts/section', 'builder-title'); ?>
<?php get_template_part('parts/section', 'builder'); ?>
<?php get_template_part('parts/section', 'sproposal'); ?>
<?php get_template_part('parts/section', 'team'); ?>
<?php get_template_part('parts/section', 'blog', ['header'=>'Proposal blog']); ?>

<?php get_footer(); ?>