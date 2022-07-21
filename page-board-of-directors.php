<?php /* Template Name: Staff Page Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="staff-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1>Board of Directors</h1>
        <article class="staff-page-content">
            <aside class="staff-member">
                <img src="https://cnnssa.org/wp-content/themes/cnnssa-parent-theme/img/casey-ketchum.jpeg" alt="#" />
                <h2 class="staff-name">Casey Ketchum
                <span class="staff-title">Job Title</span></h2>
            </aside>
            <aside class="staff-member">
                <img src="https://cnnssa.org/wp-content/themes/cnnssa-parent-theme/img/casey-ketchum.jpeg" alt="#" />
                <h2 class="staff-name">Casey Ketchum
                <span class="staff-title">Job Title</span></h2>
            </aside>
            <aside class="staff-member">
                <img src="https://cnnssa.org/wp-content/themes/cnnssa-parent-theme/img/casey-ketchum.jpeg" alt="#" />
                <h2 class="staff-name">Casey Ketchum
                <span class="staff-title">Job Title</span></h2>
            </aside>
            <aside class="staff-member">
                <img src="https://cnnssa.org/wp-content/themes/cnnssa-parent-theme/img/casey-ketchum.jpeg" alt="#" />
                <h2 class="staff-name">Casey Ketchum
                <span class="staff-title">Job Title</span></h2>
            </aside>
            <aside class="staff-member">
                <img src="https://cnnssa.org/wp-content/themes/cnnssa-parent-theme/img/casey-ketchum.jpeg" alt="#" />
                <h2 class="staff-name">Casey Ketchum
                <span class="staff-title">Job Title</span></h2>
            </aside>
            <aside class="flex-break">
            </aside>
            <aside class="staff-interest">
                <div class="button-container">
                    <a href="#">Board of Directors <span>Interest Application</span></a>
                </div>
            </aside>
        </article>
        <h1>Staff</h1>
    <?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>