<?php

/**
 * Template Name: ICT Solution (products)
 * Template Post Type: product
 * @package WordPress
 * @subpackage motabaqah
 * @since motabaqah 1.0
 */
// Include header
get_header();
?>

<!-- hero section  -->
<?php
if (get_field('ict_hero_section')) {
    $ict_hero_section = get_field('ict_hero_section');
    $section_heading = $ict_hero_section['ict_hero_section_heading'];
    $section_description = $ict_hero_section['ict_hero_section_discription'];
    $solution_cards = $ict_hero_section['ict_solution_cards'];

    ?>
    <section class="bg-[#F8F8F8]">
        <div class="container mx-auto px-4 pb-[40px]">
            <div class="flex items-center gap-[32px] mb-[40px] mt-[10px]">
                <a class="contents" href="javascript:history.back()">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />

                    <h1
                        class="font-montserrat uppercase text-[25px] md:text-[40px] font-bold tracking-[3px] md:tracking-[4.8px]">
                        <?php the_title(); ?>
                    </h1>
                </a>
            </div>
            <div class="about_us">
                <div class="w-[100%] md:w-[838px]">
                    <h1
                        class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                        <?php echo $section_heading; ?>
                    </h1>
                    <div class="roboto [14px] text-[#05060F]">
                        <?php echo $section_description; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content cards section -->
    <?php if ($solution_cards) { ?>
        <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
            <div class="container mx-auto px-4">
                <div class="usedall grid grid-col-1 lg:grid-cols-3 gap-[20px]">
                    <?php
                    foreach ($solution_cards as $card) {
                        $image = $card['card_image'];
                        $heading = $card['card_title'];
                        $description = $card['card_discription'];
                        ?>
                        <div class="used">
                            <img src="<?php echo $image; ?>" class="h-[158px] rounded-t-[20px] w-full object-cover" />
                            <div
                                class="bg-white rounded-[20px] px-[10px] md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start">
                                <h1
                                    class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                                    <?php echo $heading; ?>
                                </h1>
                                <div class="roboto text-[14px] text-[#05060F] font-normal text-left text-black tracking-[0.84px]">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
<?php } ?>

<!-- cybersecurity -->
<?php
if (get_field('cyber_security_section')) {
    $cyber_security_section = get_field('cyber_security_section');
    $section_heading = $cyber_security_section['section_heading'];
    $left_description = $cyber_security_section['left_side_description'];
    $right_title = $cyber_security_section['right_side_title'];
    $right_description = $cyber_security_section['right_side_description'];
    $left_image = $cyber_security_section['left_image'];
    $center_image = $cyber_security_section['center_image'];
    $features = $cyber_security_section['feature_list'];

    ?>
    <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
        <div class="container mx-auto px-4">
            <h1
                class="font-montserrat uppercase text-[#05060F] text-[20px] w-[100%] lg:w-[838px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                <?php echo $section_heading; ?>
            </h1>

            <div class="flex gap-[20px] mb-[32px]">
                <div
                    class="custom_paragraph md:w-[35%] w-full roboto text-[14px] text-[#000000] font-normal tracking-[0.84px]">
                    <?php echo $left_description; ?>
                </div>

                <div
                    class="md:w-[65%] w-full bg-white md:h-[252px] rounded-[20px] px-[10px] md:px-[32px] flex flex-col justify-center items-start">
                    <h1
                        class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[10px]">
                        <?php echo $right_title; ?>
                    </h1>
                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] list-disc list-inside">
                        <?php echo wp_kses_post($right_description); ?>
                    </div>
                </div>
            </div>
            <div class="eqipmentall grid lg:grid-cols-3 gap-[20px]">
                <img src="<?php echo $left_image ?>" class="h-[100%] lg:h-[346px] w-full rounded-[20px]" />
                <img src="<?php echo $center_image ?>" class="h-[100%] lg:h-[346px] w-full rounded-[20px]" />
                <?php if ($features) { ?>
                    <div class="equipment py-[46px] px-[36px] bg-white rounded-[20px] content-center">
                        <?php foreach ($features as $feature) {
                            $title = $feature['feature_title'];
                            $text = $feature['feature_text'];
                            ?>
                            <div class="flex flex-row gap-[5px] md:gap-[70px] mb-[30px]">
                                <p
                                    class="roboto text-[14px] w-[120px] md:w-[79px] text-[#05060F] font-normal text-black tracking-[0.84px]">
                                    <?php echo $title; ?>
                                </p>
                                <div class="flex flex-col gap-[8px]">
                                    <div class="roboto text-[14px] text-[#000000] font-normal text-black tracking-[0.84px]">
                                        <?php echo $text; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>


<!-- featured brands section  -->
<?php
if (get_field('featured_brand_section')) {
    $featured_brand_section = get_field('featured_brand_section');
    $section_heading = $featured_brand_section['section_title'];
    $section_description = $featured_brand_section['section_secription'];
    $feature_brand_content = $featured_brand_section['featured_brands_section_content'];

    ?>
    <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
        <div class="container mx-auto px-4">
            <div class="w-[100%] md:w-[559px] mb-[40px]">
                <h1
                    class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                    <?php echo $section_heading; ?>
                </h1>
                <div class="roboto [14px] text-[#05060F]">
                    <?php echo $section_description; ?>
                </div>
            </div>
            <?php if ($feature_brand_content): ?>
                <?php foreach ($feature_brand_content as $index => $content): ?>
                    <?php
                    $title = $content['title'];
                    $description = $content['description'];
                    $image = $content['image'];
                    ?>

                    <?php if ($index % 2 === 0): ?>
                        <!-- EVEN index: Text first, Image second -->
                        <div class="flex gap-[20px] mb-[20px]">
                            <div
                                class="custom_paragraph md:w-[35%] w-full bg-white rounded-[20px] px-[10px] md:px-[32px] flex flex-col justify-center items-start">
                                <?php if ($title): ?>
                                    <h1
                                        class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[10px]">
                                        <?php echo esc_html($title); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if ($description): ?>
                                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] list-disc list-inside">
                                        <?php echo wp_kses_post($description); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <img src="<?php echo $image; ?>"
                                class="md:w-[65%] w-full col-span-2 h-[250px] object-cover rounded-[20px]" />
                        </div>
                    <?php else: ?>
                        <!-- ODD index: Image first, Text second -->
                        <div class="flex gap-[20px]">
                            <img src="<?php echo $image; ?>" class="md:w-[35%] w-full  h-[324px] object-cover rounded-[20px]" />
                            <div
                                class="custom_paragraph md:w-[65%] w-full bg-white rounded-[20px] px-[10px] md:px-[32px] flex flex-col justify-center items-start lg:col-span-2">
                                <?php if ($title): ?>
                                    <h1
                                        class="max-w-2xl uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                                        <?php echo esc_html($title); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if ($description): ?>
                                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] list-disc list-inside">
                                        <?php echo wp_kses_post($description); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </section>
<?php } ?>


<?php
get_footer();
?>