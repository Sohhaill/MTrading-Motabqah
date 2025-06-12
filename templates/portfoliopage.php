<?php

/**
 * Template Name: Portfolio Page
 * @package WordPress
 * @subpackage motabaqah
 * @since motabaqah 1.0
 */
// Include header
get_header();
?>

<section class="bg-[#F8F8F8]">
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-[32px] mb-6 mt-4">
            <h1 class="font-montserrat uppercase text-[25px] md:text-[40px] md:leading-[48px] font-bold tracking-[3px] md:tracking-[4.8px]">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
</section>

<section class="bg-[#F8F8F8] pb-[70px]">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-[20px]">

            <?php
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1,
                'order'          => 'ASC' 
            );
            $product_query = new WP_Query($args);

            if ($product_query->have_posts()) :
                while ($product_query->have_posts()) : $product_query->the_post(); ?>

                    <div class="events bg-white rounded-[20px] flex flex-col md:flex-row">
                        <div class="text py-[25px] !px-[15px] md:py-[47px] md:px-[32px] w-[100%] md:w-[55%]">
                            <h1 class="uppercase text-[20px] md:text-[24px] md:leading-[32px] font-bold tracking-[1.2px] mb-[16px]">
                                <?php the_title(); ?>
                            </h1>
                            <div class="text-[14px] text-[#05060F] leading-[20px] font-normal tracking-[0.84px]">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <button type="button"
                                    class="roboto mt-[10px] md:mt-[40px] w-[130px] md:w-[195px] md:h-[56px] py-[16px] bg-[#323334] rounded-[10px] uppercase text-[14px] text-white font-bold tracking-[1.2px] shadow-lg">
                                    learn more
                                </button>
                            </a>
                        </div>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="w-[100%] md:w-[45%] rounded-r-[20px] overflow-hidden  portfolioimage_overlay relative">
                                <?php the_post_thumbnail('full', ['class' => 'w-full h-[369px] rounded-r-[20px] object-cover']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-center col-span-2">No products found.</p>
            <?php endif; ?>

        </div>
    </div>
</section>



<?php
// Include footer
get_footer();
?>