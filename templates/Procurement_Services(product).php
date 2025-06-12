<?php

/**
 * Template Name: Procurement Services (products)
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
    $section_heading = $hero_section['hero_section_title'];
    $section_description = $hero_section['hero_section_description'];
    $left_heading = $hero_section['content_left_side_heading'];
    $left_description = $hero_section['content_left_side_description'];
    $center_image = $hero_section['center_image'];
    $right_heading = $hero_section['content_right_side_heading'];
    $right_description = $hero_section['content_rightside_description'];

    ?>
    <section class="bg-[#F8F8F8]">
        <div class="container mx-auto px-4 pb-[40px]">
            <div class="flex items-center gap-[32px] mb-[40px] mt-[16px]">
                <a class="contents" href="javascript:history.back()">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />

                    <h1
                        class="font-montserrat uppercase text-[25px] md:text-[40px] md:leading-[48px] font-bold tracking-[3px] md:tracking-[4.8px]">
                        <?php the_title(); ?>
                    </h1>
                </a>
            </div>
            <div class="about_us">
                <div class=" w-[100%] md:w-[832px]">
                    <h1
                        class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                        <?php echo $section_heading; ?>
                    </h1>
                    <div class="roboto text-[14px] leading-[20px] text-[#05060F] md:w-[583px]">
                        <?php echo $section_description; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content section -->
    <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
        <div class="container mx-auto px-4">
            <div class="eqipmentall lg:grid grid-cols-3 gap-[20px]">
                <div class="equipment  md:py-[40px] !px-[20px] !py-[25px] md:px-[32px] bg-white rounded-[20px]">
                    <h1
                        class="uppercase roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                        <?php echo $left_heading; ?>
                    </h1>
                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] list-disc list-inside">
                        <?php echo wp_kses_post($left_description); ?>
                    </div>
                </div>
                <img src="<?php echo $center_image; ?>" class="h-[400px] rounded-[20px] object-cover" />
                <div class="equipment md:py-[40px] !px-[20px] !py-[25px] md:px-[32px] bg-white rounded-[20px]">
                    <h1
                        class="uppercase roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                        <?php echo $right_heading; ?>
                    </h1>
                    <div class="roboto custom-ul-ol text-[14px] text-[#05060F] list-disc list-inside">
                        <?php echo wp_kses_post($right_description); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<!-- procurement process section  -->
<?php
if (get_field('procurement_process_section')) {
    $procurement_process_section = get_field('procurement_process_section');
    $section_heading = $procurement_process_section['section_tiltle'];
    $section_description = $procurement_process_section['section_description'];
    $content_cards = $procurement_process_section['content_cards'];

    ?>
    <section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
        <div class="container mx-auto px-4">
            <div class="about_us">
                <div class="mb-[40px] w-[100%] md:w-[543px]">
                    <h1
                        class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                        <?php echo $section_heading; ?>
                    </h1>
                    <div class="roboto text-[14px] leading-[20px] text-[#05060F]">
                        <?php echo $section_description; ?>
                    </div>
                </div>
                <?php if ($content_cards) { ?>
                    <div class="grid !grid-cols-1 lg:!grid-cols-3 gap-[20px] md:!grid-cols-2">
                        <?php
                        foreach ($content_cards as $card) {
                            $step = $card['step_text'];
                            $heading = $card['card_heading'];
                            $desription = $card['card_description'];
                            ?>
                            <div class="bg-white rounded-[20px] !px-[15px] md:px-[32px] h-[179px] flex flex-col justify-center items-start">
                                <div class="assesment mb-[20px] flex gap-[31px] items-center justify-start">
                                    <p
                                        class="roboto text-[14px] text-[#05060F] font-normal text-center text-black tracking-[0.84px]">
                                        <?php echo $step; ?>
                                    </p>
                                    <h1
                                        class="uppercase text-center roboto font-400 text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px]">
                                        <?php echo $heading; ?>
                                    </h1>
                                </div>
                                <div class="roboto text-[14px] text-[#05060F] font-normal text-left text-black tracking-[0.84px]">
                                    <?php echo $desription; ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>


<!-- suppliers section  -->
<?php
if (get_field('supplier_section')) {
    $supplier_section = get_field('supplier_section');
    $section_heading = $supplier_section['section_tiltle'];
    $section_description = $supplier_section['section_description'];
    $content_cards = $supplier_section['content_cards'];

    ?>
    <section class="bg-[#F8F8F8] pb-[70px]">
        <div class="container mx-auto px-4">
            <div class="about_us">
                <div class="mb-[40px] w-[100%] md:w-[554px]">
                    <h1
                        class="uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                        <?php echo $section_heading; ?>
                    </h1>
                    <div class="roboto text-[14px] leading-[20px] text-[#05060F]">
                        <?php echo $section_description; ?>
                    </div>
                </div>
                <?php if ($content_cards) { ?>
                    <div class="grid !grid-cols-1 lg:!grid-cols-3 gap-[20px] md:!grid-cols-2">
                        <?php
                        foreach ($content_cards as $card) {
                            $icon = $card['card_icon'];
                            $heading = $card['card_heading'];
                            $desription = $card['card_description'];
                            ?>
                            <div class="bg-white rounded-[20px] px-[32px] h-[257px] flex flex-col justify-center items-center">
                                <img src="<?php echo $icon; ?>" width="45" />
                                <h1
                                    class="uppercase text-center roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] my-[20px]">
                                    <?php echo $heading; ?>
                                </h1>
                                <div class="roboto text-[14px] text-[#000000] font-normal text-center text-black tracking-[0.84px]">
                                    <?php echo $desription; ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
get_footer();
?>