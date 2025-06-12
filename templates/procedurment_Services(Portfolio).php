<?php

/**
 * Template Name: procedurment_Services(Portfolio)
 * Template Post Type: portfolio
 * @package WordPress
 * @subpackage motabaqah
 * @since motabaqah 1.0
 */
// Include header
get_header();
?>
<section class="pb-[140px]">

    <?php
    $procurement_services_portfolios = get_field('procurement_services_portfolios');
    $procurement_services_heading = $procurement_services_portfolios['heading'];
    $procurement_services_supply_chain = $procurement_services_portfolios['supply_chain'];
    $procurement_services_major_procurement = $procurement_services_portfolios['major_procurement'];
    $procurement_services_key_partnerships = $procurement_services_portfolios['key_partnerships'];
    ?>
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-[32px] mb-[40px] mt-[16px]">
            <a class="contents" href="javascript:history.back()">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />

                <h1
                    class="font-montserrat uppercase text-[25px] md:text-[40px] font-bold md:leading-[48px] tracking-[3px] md:tracking-[4.8px]">
                    <?php the_title(); ?>
                </h1>
            </a>
        </div>
        <?php if (!empty($procurement_services_supply_chain)): ?>
            <div class="about_us">
                <div class="mb-[40px] w-[100%] md:w-[717px]">
                    <?php if (!empty($procurement_services_supply_chain['heading'])): ?>
                        <h1
                            class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
                            <?php echo esc_html($procurement_services_supply_chain['heading']); ?>
                        </h1>
                    <?php endif; ?>
                    <?php if (!empty($procurement_services_supply_chain['description'])): ?>
                        <p class="roboto text-[14px] leading-[20px] text-[#05060F]">
                            <?php echo $procurement_services_supply_chain['description']; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <?php if (!empty($procurement_services_supply_chain['chain'])): ?>
                    <div class="grid !grid-cols-1 lg:!grid-cols-3 gap-[20px] md:!grid-cols-2">
                        <?php
                        foreach ($procurement_services_supply_chain['chain'] as $chain):
                            if (empty($chain['image']['url']) && empty($chain['heading']) && empty($chain['description']))
                                continue;
                            ?>
                            <div
                                class="bg-white rounded-[20px]  px-[10px] py-[20px] md:px-[32px] md:py-[40px]  flex flex-col justify-center items-center">
                                <?php if (!empty($chain['image']['url'])): ?>
                                    <img src="<?php echo esc_url($chain['image']['url']); ?>" width="45">
                                <?php endif; ?>
                                <?php if (!empty($chain['heading'])): ?>
                                    <h1
                                        class="uppercase text-center roboto  text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px] mt-[16px]">
                                        <?php echo esc_html($chain['heading']); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if (!empty($chain['description'])): ?>
                                    <p
                                        class="custom-ul-ol roboto text-[14px] text-[#000000] font-normal text-center text-black tracking-[0.84px]">
                                        <?php echo $chain['description']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="pb-[140px]">
    <div class="container mx-auto px-4">
        <?php if (!empty($procurement_services_major_procurement)): ?>
            <div class="!w-[100%] md:!w-[680px] mb-[40px] ">
                <?php if (!empty($procurement_services_major_procurement['heading'])): ?>
                    <h1
                        class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold tracking-[3.6px]  mb-[24px] md:leading-[40px]">
                        <?php echo esc_html($procurement_services_major_procurement['heading']); ?>
                    </h1>
                <?php endif; ?>
                <?php if (!empty($procurement_services_major_procurement['description'])): ?>
                    <p class="roboto text-[#05060F] text-[14px] text-black tracking-[0.84px]">
                        <?php echo $procurement_services_major_procurement['description']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if (!empty($procurement_services_major_procurement['major_projects'])): ?>
                <div class="usedall grid grid-col-1 lg:grid-cols-2 gap-[20px]">
                    <?php
                    foreach ($procurement_services_major_procurement['major_projects'] as $major_procurement_alls):
                        if (empty($major_procurement_alls['image']['url']) && empty($major_procurement_alls['heading']) && empty($major_procurement_alls['description']))
                            continue;
                        ?>
                        <div class="used">
                            <?php if (!empty($major_procurement_alls['image']['url'])): ?>
                                <img src="<?php echo esc_url($major_procurement_alls['image']['url']); ?>"
                                    class="rounded-t-[20px] w-full h-[336px]">
                            <?php endif; ?>
                            <div
                                class="bg-white rounded-b-[20px] px-[10px]  md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start">
                                <?php if (!empty($major_procurement_alls['heading'])): ?>
                                    <h1
                                        class="uppercase text-left roboto  text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px]  mb-[20px]">
                                        <?php echo esc_html($major_procurement_alls['heading']); ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if (!empty($major_procurement_alls['description'])): ?>
                                    <p
                                        class="custom-ul-ol roboto text-[14px] text-[#05060F] font-normal text-left text-black tracking-[0.84px]">
                                        <?php echo $major_procurement_alls['description']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>
<section class="pb-[70px]">
    <div class="container mx-auto px-4">
        <?php if (!empty($procurement_services_key_partnerships)): ?>
            <div class="!w-[100%] md:!w-[680px] mb-[40px] ">
                <?php if (!empty($procurement_services_key_partnerships['heading'])): ?>
                    <h1
                        class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold tracking-[3.6px] md:leading-[40px] mb-[24px]">
                        <?php echo esc_html($procurement_services_key_partnerships['heading']); ?>
                    </h1>
                <?php endif; ?>
                <?php if (!empty($procurement_services_key_partnerships['description'])): ?>
                    <p class="roboto text-[14px] text-black tracking-[0.84px]">
                        <?php echo $procurement_services_key_partnerships['description']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if (!empty($procurement_services_key_partnerships['partners'])): ?>
                <div class="allpartners grid !grid-cols-2 lg:!grid-cols-4 gap-[20px] md:!grid-cols-2">
                    <?php
                    foreach ($procurement_services_key_partnerships['partners'] as $partner):
                        if (empty($partner['image']['url']))
                            continue;
                        ?>
                        <div class="partner bg-white rounded-[20px] p-[24px] h-[143px] flex items-center">
                            <img src="<?php echo esc_url($partner['image']['url']); ?>" width="177" height="57" class="m-auto">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>
<?php
// Include footer
get_footer();
?>