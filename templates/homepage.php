<?php

/**
 * Template Name: Home Page
 * @package WordPress
 * @subpackage motabaqah
 * @since motabaqah 1.0
 */
// Include header
get_header();
?>

<!-- hero section  -->
<!-- Section 1: Hero -->
 <?php
if (get_field('hero_section')) {
    $hero_section = get_field('hero_section');
    $heading = $hero_section['hero_section_heading'];
    $image = $hero_section['hero_section_background_image'];
    $text = $hero_section['hero_section_heading_text'];
    $button_text = $hero_section['hero_section_button_text'];

?>
<section class="bg-[#F9F9F9]">
    <div class="container mx-auto px-4 sm:px-5 lg:px-6 pb-3 sm:pb-5">
        <div class="relative rounded-[20px] overflow-hidden homebanner_overlay">
            <img src="<?php echo  $image; ?>" alt="Team Presentation"
                class="w-full h-[300px] sm:h-[400px] md:h-[485px] object-cover">

            <div class="absolute inset-0 bg-black bg-opacity-50 px-6 sm:px-10 md:px-20 py-10 md:pt-24 !z-10">
                <h1
                    class="font-montserrat text-white text-xl sm:text-3xl md:text-4xl lg:text-[40px] font-bold md:!leading-[48px] uppercase tracking-widest mb-4 sm:mb-6 max-w-3xl">
                    <?php echo  $heading; ?>
                </h1>
                <p class="text-white text-sm sm:text-base max-w-md mb-6 sm:mb-9">
                    <?php echo $text; ?>
                </p>
                <a href="#"
                    class="book_a_call_popup inline-block bg-[var(--button-bg-red)] hover:bg-red-700 text-white text-xs sm:text-sm font-bold tracking-wider uppercase px-6 sm:px-10 py-3 sm:py-4 rounded-lg shadow-lg shadow-[#E1251B66] transition-all duration-200 w-fit">
                    <?php echo $button_text; ?>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
}
?>

<!-- Section 2: What We Do -->
  <?php
if (get_field('what_we_do_section')) {
    $what_we_do_section = get_field('what_we_do_section');
    $heading = $what_we_do_section['what_we_do_heading'];
    $image = $what_we_do_section['what_we_do_image'];
    $text = $what_we_do_section['what_we_do_description'];
    $video_url = $what_we_do_section['what_we_do_video_url'];

?>
<section class="bg-[#F9F9F9]">
    <div class="container mx-auto px-4 sm:px-5 lg:px-6 py-10 md:py-[70px]">
        <div class="flex flex-col md:flex-row gap-10 md:gap-12 items-center">
            <!-- Left Text Column (40%) -->
            <div class="w-full md:w-[44%]">
                <h2
                    class="font-montserrat font-bold text-2xl sm:text-[32px] md:text-[32px] leading-tight uppercase tracking-widest text-[#05060F] mb-6">
                    <?php echo $heading; ?>
                </h2>
                <div class="text-sm text-[#05060F] leading-[20px] tracking-wider">
                    <?php echo $text; ?>
                </div>
            </div>

            <!-- Right Image + Play Button (60%) -->
            <div class="relative w-full md:w-[56%] rounded-[20px] aspect-video home_videosec">
                <img src="<?php echo $image; ?>" alt="Team Working"
                    class="w-full h-full object-cover rounded-[20px]">

                <?php
                $video_url = $video_url;
                $clean_url = strtok($video_url, '?');
                $final_video_url = $clean_url . '?autoplay=1';
                ?>

                <!-- Play Button Positioned Half Outside Left -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 
            md:-left-10 md:translate-x-0 z-10">
                    <button id="video-play-button" data-video-url="<?php echo esc_url($final_video_url); ?>"
                        class="bg-[#E1251B] p-4 rounded-full shadow-lg shadow-[#E1251B66]">
                        <svg class="w-14 h-14 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>


    </div>

    <!-- Video Modal -->
    <div id="video-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="relative w-[90%] max-w-3xl aspect-video">
            <div id="video-container" class="w-full h-full rounded-lg overflow-hidden"></div>
            <button id="close-video" class="absolute top-[-25px] right-0 text-white text-3xl font-bold">&times;</button>
        </div>
    </div>

</section>
<?php } ?>

<!-- key offerening section  -->
   <?php
if (get_field('key_offering_section')) {
    $key_offering_section = get_field('key_offering_section');
    $heading = $key_offering_section['key_offering_heading'];
    $cards = $key_offering_section['key_offering_content'];

?>
<section class="bg-[#F8F8F8] py-10 md:py-[70px]">
    <div class="container mx-auto px-4 sm:px-5 lg:px-6">
        <!-- Section Heading -->
        <?php if ($heading): ?>
            <h2
                class="font-montserrat font-bold text-2xl sm:text-[32px] md:text-[32px] leading-tight uppercase tracking-widest text-[#05060F] mb-6">
                <?php echo $heading; ?>
            </h2>
        <?php endif; ?>

        <!-- Grid Layout -->
        <?php if ($cards): ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <?php foreach ($cards as $card):
                    $card_heading = $card['heading'];
                    $card_text = $card['text'];
                    ?>
                    <div class="bg-white rounded-2xl py-10 px-8 shadow-sm">
                        <?php if ($card_heading): ?>
                            <h3 class="text-2xl font-bold uppercase text-center mb-5 tracking-wider">
                                <?php echo esc_html($card_heading); ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($card_text): ?>
                            <div class="text-sm text-[#05060F] leading-[20px] tracking-wider text-center">
                                <?php echo $card_text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>


<!-- featured product and solution section  -->

<section class="bg-[#F8F8F8] py-10 md:py-[70px]">
    <div class="container mx-auto px-4 sm:px-5 lg:px-6">
        <h2
            class="font-montserrat max-w-md font-bold text-2xl sm:text-[32px] md:text-[32px] leading-tight uppercase tracking-widest text-[#05060F] mb-6">
            <?php echo get_field("featured_products_and_solutions_heading"); ?>
        </h2>

        <div class="grid gap-[20px] md:grid-cols-2 lg:grid-cols-4 homepage_gridtab">
            <?php
            $args = array(
                'post_type' => 'product-and-solution',
                'posts_per_page' => 4, // Change as needed
                'post_status' => 'publish'
            );
            $featured_query = new WP_Query($args);

            if ($featured_query->have_posts()):
                while ($featured_query->have_posts()):
                    $featured_query->the_post();

                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $excerpt = get_the_excerpt(); // or use a custom field
                    ?>
                    <div class="overflow-hidden flex flex-col relative home_featureproduct">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>"
                                class="mb-8 rounded-xl shadow-md h-[265px] w-full object-cover object-center" />
                        <?php endif; ?>

                        <div class="flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold uppercase mb-4 tracking-wider"><?php the_title(); ?></h3>
                            <div class="text-sm text-[#05060F] h-[140px] leading-[20px] tracking-wider lg:mb-6">
                                <?php echo esc_html(wp_trim_words($excerpt, 30)); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>"
                                class="inline-block bg-[#323334] hover:bg-black text-white text-xs sm:text-sm font-bold tracking-wider uppercase px-6 sm:px-10 py-3 sm:py-4 rounded-lg shadow-lg shadow-[#32333466] transition-all duration-200 w-fit">
                                read more
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="col-span-full text-center text-gray-500">No featured products found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>



<!-- industries served section  -->
   <?php
if (get_field('industries_served_section')) {
    $industries_served_section = get_field('industries_served_section');
    $heading = $industries_served_section['industries_served_section_heading'];
    $cards = $industries_served_section['industries_served_cards'];

?>
<section class="bg-[#F8F8F8] py-10 md:py-[70px]">
    <div class="container mx-auto px-4">
        <?php if ($heading): ?>
            <h2
                class="font-montserrat font-bold text-2xl sm:text-[32px] md:text-[32px] leading-tight uppercase tracking-widest text-[#05060F] mb-6">
                <?php echo esc_html($heading); ?>
            </h2>
        <?php endif; ?>
        <?php if ($cards): ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($cards as $card):
                    $card_icon = $card['card_icon'];
                    $card_heading = $card['card_heading'];
                    ?>
                    <!-- Card -->
                    <div
                        class="bg-white rounded-2xl py-10 px-8 text-center shadow-[0px_4px_4px_0px_#ECECEC40] hover:shadow-lg transition">
                        <?php if ($card_icon): ?>
                            <img src="<?php echo $card_icon; ?>" alt="Aerospace" class="mx-auto mb-4 h-10 w-10 text-red-500" />
                        <?php endif; ?>
                        <?php if ($card_heading): ?>
                            <h3 class="text-2xl font-bold uppercase tracking-wider"><?php echo $card_heading; ?></h3>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>

<!-- news and events section  -->

<section class="bg-[#F8F8F8] py-10 md:py-[70px]">
    <div class="container mx-auto px-4">
        <h2
            class="font-montserrat font-bold text-2xl sm:text-[32px] md:text-[32px] leading-tight uppercase tracking-widest text-[#05060F] mb-6">
            <?php echo esc_html(get_field("news_and_events_section_heading")); ?>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[20px]">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3, // Change as needed
                'post_status' => 'publish'
            );
            $featured_query = new WP_Query($args);

            if ($featured_query->have_posts()):
                while ($featured_query->have_posts()):
                    $featured_query->the_post();

                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $excerpt = get_the_excerpt(); // or use a custom field
                    ?>
                    <!-- Card -->
                    <div class="bg-white rounded-[20px] shadow-[0px_4px_4px_0px_#ECECEC40] overflow-hidden news_event_homesh relative">
                        <?php if ($image_url): ?>
                            <a class="news_overlay" href="<?php the_permalink(); ?>"> <img src="<?php echo esc_url($image_url); ?>"
                                    alt="<?php the_title_attribute(); ?>" class="w-full h-64 object-cover"></a>
                        <?php endif; ?>
                        <div class="p-8">
                            <p class="text-sm text-gray-500 mb-2"><?php echo get_the_date('d.m.Y'); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="text-2xl font-bold uppercase mb-4 tracking-wider"><?php the_title(); ?></h3>
                            </a>
                            <div class="text-sm text-[#05060F] leading-[20px] tracking-wider mb-6">
                                <?php echo esc_html(wp_trim_words($excerpt, 70)); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="text-gray-600">No featured products or solutions found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>






<?php
// Include footer
get_footer();
?>