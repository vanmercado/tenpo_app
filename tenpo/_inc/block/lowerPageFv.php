<section class="secHero">
    <div class="secHero__inner wow animate__animated animate__fadeInUp">
        <div class="secHero__head">
            <?php if(get_query_var('hero_subtitle') !=''): ?><span class="secHero__subtitle"><?php echo get_query_var('hero_subtitle'); ?></span><?php endif; ?>
            <h1 class="secHero__heading"><?php echo get_query_var('hero_heading'); ?></h1>
        </div>
        <p class="secHero__description"><?php echo get_query_var('hero_desc1'); ?></p>
    </div>
</section>