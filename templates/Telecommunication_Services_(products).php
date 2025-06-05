<?php

/**
 * Template Name: Telecommunication Services (products)
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
if (get_field('telecom_services_section')) {
    $telecom_services_section = get_field('telecom_services_section');
    $section_heading = $telecom_services_section['telecom_services_section_heading'];
    $section_description = $telecom_services_section['telecom_services_section_discription'];
    $product_cards = $telecom_services_section['telecom_services_section_card'];

    ?>
    <section class="bg-[#F8F8F8]">
        <div class="container mx-auto px-4 pb-[40px]">
            <div class="flex items-center gap-[15px] md:gap-[32px] mb-[40px] mt-[10px]">
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
                        class="font-montserrat max-w-2xl uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                        <?php echo $section_heading; ?>
                    </h1>
                    <div class="max-w-2xl roboto [14px] text-[#05060F]">
                        <?php echo $section_description; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if (!empty($product_cards)): ?>
        <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
            <div class="container mx-auto px-4">
                <div class="usedall grid grid-cols-1 lg:grid-cols-2 gap-[20px]">
                    <?php foreach ($product_cards as $card):
                        $heading = $card['telecom_services_card_title'] ?? '';
                        $image = $card['telecom_services_card_image'] ?? '';
                        $description = $card['telecom_services_card_discription'] ?? '';
                        ?>
                        <div class="used">
                            <?php if ($image): ?>
                                <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" height="288"
                                    class="rounded-t-[20px] object-cover w-full" />
                            <?php endif; ?>
                            <div
                                class="bg-white rounded-[20px] px-[10px] md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start">
                                <?php if ($heading): ?>
                                    <h1
                                        class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                                        <?php echo esc_html($heading); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if ($description): ?>
                                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] mb-[12px] list-disc list-inside">
                                        <?php echo wp_kses_post($description); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php } ?>
<?php
if (get_field('solution_for_4g5g')) {
    $solution_for_4g5g = get_field('solution_for_4g5g');
    $section_heading = $solution_for_4g5g['section_heading'];
    $section_description = $solution_for_4g5g['section_description'];
    $center_image = $solution_for_4g5g['center_image'];
    $features = $solution_for_4g5g['feature_list'];
    $bottom_left_image = $solution_for_4g5g['bottom_left_image'];
    $integrated_sol_title = $solution_for_4g5g['integrated_solution_title'];
    $integrated_sol_description = $solution_for_4g5g['integrated_description_solution'];


    ?>
    <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
        <div class="container mx-auto px-4">
            <h1
                class="uppercase text-[#05060F] text-[20px] w-[100%] lg:w-[858px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                <?php echo $section_heading; ?>
            </h1>

            <div class="grid lg:grid-cols-3 gap-[20px] mb-[32px]">
                <div class="roboto text-[14px] text-[#000000] font-normal text-black tracking-[0.84px]">
                    <?php echo $section_description; ?>
                </div>
                <img src="<?php echo $center_image; ?>" class="rounded-[20px] mx-auto h-[360px] w-full object-cover" />
                <?php if ($features) { ?>
                    <div class="equipment py-[46px] px-[36px] bg-white rounded-[20px]">
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
            <div class="grid lg:grid-cols-3 gap-[20px] h-[324]">
                <img src="<?php echo $bottom_left_image; ?>" class="w-full h-[324] object-cover rounded-[20px]" />
                <div
                    class="bg-white rounded-[20px] px-[10px] md:px-[32px] flex flex-col justify-center items-start col-span-2">
                    <h1
                        class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                        <?php echo $integrated_sol_title; ?>
                    </h1>
                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] mb-[12px] list-disc list-inside">
                        <?php echo wp_kses_post($integrated_sol_description); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<?php
if (get_field('product_brochures_section')) {
    $product_brochures_section = get_field('product_brochures_section');
    $section_heading = $product_brochures_section['section_title'];
    $section_description = $product_brochures_section['section_secription'];
    $image = $product_brochures_section['right_image'];
    $file = $product_brochures_section['download_file'];
    ?>
    <section class="bg-[#F8F8F8] pb-[70px]">
        <div class="container mx-auto px-4">
            <h1
                class="uppercase w-full lg:w-[560px] text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                <?php echo $section_heading; ?>
            </h1>
            <div class="grid lg:grid-cols-2 gap-[20px] mb-[20px]">
                <div class="rounded-[20px] flex flex-col justify-center items-start">
                    <div class="roboto text-[14px] text-[#000000] font-normal text-black tracking-[0.84px]">
                        <?php echo $section_description; ?>
                    </div>

                    <?php if ($file): ?>
                        <div class="mt-[16px] p-[15px] bg-white rounded-lg flex items-center gap-[16px]">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/download.png'); ?>"
                                width="24" alt="Download icon">
                            <a href="<?php echo $file; ?>"
                                class="rounded-[10px] roboto uppercase text-[14px] text-black font-bold tracking-[1.2px]"
                                download>
                                Download File
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <img src="<?php echo $image; ?>" class="w-full h-[230px] rounded-[20px] object-cover" />
            </div>
        </div>
    </section>
<?php } ?>


<?php
get_footer();
?>