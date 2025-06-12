<?php

/**
 * Template Name: Test and Measurement (products)
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
if (get_field('hero_section')) {
    $hero_section = get_field('hero_section');
    $section_heading = $hero_section['product_hero_section_heading'];
    $section_description = $hero_section['product_hero_section_description'];
    $product_cards = $hero_section['product_cards'];

    ?>
    <section class="bg-[#F8F8F8]">
        <div class="container mx-auto px-4">
            <div class="flex items-center gap-[15px] md:gap-[32px] mb-[40px] mt-[16px]">
                <a class="contents" href="javascript:history.back()">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />
                
                <h1
                    class="font-montserrat uppercase text-[25px] md:text-[40px] font-bold tracking-[3px] md:leading-[48px] md:tracking-[4.8px]">
                    <?php the_title(); ?>
                </h1>
                </a>
            </div>
            <div class="about_us">
                <div class=" w-[100%] md:w-[635px]">
                    <h1
                        class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                        <?php echo $section_heading; ?>
                    </h1>
                    <div class="roboto text-[14px] text-[#05060F] leading-[20px]">
                        <?php echo $section_description; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- cards section  -->
    <section class="bg-[#F8F8F8] pt-[50px] pb-[50px] md:pb-[140px]">
        <div class="container mx-auto px-4">
            <div class="usedall grid !grid-cols-1 lg:!grid-cols-3 gap-[20px] md:!grid-cols-2 gap-[20px]">
                <?php if ($product_cards): ?>
                    <?php foreach ($product_cards as $card):
                        $image = $card['image'];
                        $heading = $card['heading'];
                        $text = $card['text'];
                        ?>
                        <div class="used">
                            <?php if ($image): ?>
                                <img src="<?php echo $image; ?>" alt="" class="rounded-t-[20px] object-cover w-full h-[257px]">
                            <?php endif; ?>
                            <div
                                class="bg-white rounded-b-[20px] px-[10px] md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start md:h-[405px]">
                                <?php if ($heading): ?>
                                    <h1
                                        class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                                        <?php echo esc_html($heading); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if ($text): ?>
                                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] mb-[12px] list-disc list-inside">
                                        <?php echo $text; // WYSIWYG output is already safe ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php } ?>



<!-- key manufactures section  -->
<?php
if (get_field('key_manufacture_section')) {
    $key_manufacture_section = get_field('key_manufacture_section');
    $section_heading = $key_manufacture_section['key_manufactures_section_heading'];
    $section_description = $key_manufacture_section['key_manufactures_section_description'];
    $key_manufacture_cards = $key_manufacture_section['key_manufactures_section_cards'];
    ?>
    <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
        <div class="container mx-auto px-4">
            <div class="!w-[100%] md:!w-[635px] mb-[40px] ">
                <h1
                    class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold tracking-[3.6px] mb-[24px] md:leading-[40px]">
                    <?php echo $section_heading; ?>
                </h1>
                <div class="roboto text-[14px] text-black tracking-[0.84px] md:leading-[20px]">
                    <?php echo $section_description; ?>
                </div>
            </div>
            <?php
            if ($key_manufacture_cards) {
                ?>
                <div class="allpartners grid !grid-cols-1 lg:!grid-cols-3 gap-[20px] md:!grid-cols-2">
                    <?php
                    foreach ($key_manufacture_cards as $card) {
                        $logo = $card['logo'];
                        $text = $card['key_manufactures_text'];
                        ?>
                        <div class="partner bg-white rounded-[20px] py-[40px] px-[32px] flex flex-col items-center">
                            <img src="<?php echo $logo; ?>" class="h-[54px] object-contain w-[373px]">
                            <div class="mt-4 roboto text-[14px] text-center text-[#05060F] text-black tracking-[0.84px]">
                                <?php echo $text; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

<?php } ?>


<!-- downloadable section  -->
<?php
if ($downloadable_section = get_field('downloadable_section')) {
    $section_heading = $downloadable_section['downloadable_section_heading'] ?? 'Downloadable datasheets and specifications';
    $section_description = $downloadable_section['downloadable_section_description'] ?? 'Explore our comprehensive range of telecom products and solutions through downloadable brochures and catalogs.';
    $file = $downloadable_section['download_file'];
    $image = $downloadable_section['downloadable_section_image'];
    $image_alt = $downloadable_section['downloadable_section_image'] ?? 'Download Section Image';
    ?>

    <section class="bg-[#F8F8F8] pb-[70px]">
        <div class="container mx-auto px-4">
            <h1
                class="font-montserrat uppercase w-full lg:w-[630px] text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                <?php echo esc_html($section_heading); ?>
            </h1>
            <div class="grid lg:grid-cols-2 gap-[20px]">
                <div class="rounded-[20px] flex flex-col justify-center items-start roboto text-[14px] text-[#000000] font-normal text-black tracking-[0.84px] md:leading-[20px]">
                    <p class="roboto text-[14px] text-[#000000] font-normal text-black tracking-[0.84px] md:leading-[20px]">
                        <?php echo wp_kses_post($section_description); ?>
                    </p>

                    <?php if ($file): ?>
                        <div class="mt-[16px] p-[15px] bg-white rounded-lg flex items-center gap-[16px]">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/download.png'); ?>"
                                width="24" alt="Download icon">
                            <a href="<?php echo esc_url($file['url']); ?>"
                                class="rounded-[10px] roboto uppercase text-[14px] text-black font-bold tracking-[1.2px]"
                                download>
                                Download File
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
<div class="downlaod_btnoverlay relative" >
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>"
                    class="w-full h-[248px] rounded-[20px] object-cover ">
                    </div>
            </div>
        </div>
    </section>
<?php } ?>




<?php
// Include footer
get_footer();
?>