<?php
/**
* Template Name: Upcoming Event
* Template Post Type: event
*/

?>
<?php get_header() ?>
<section class="bg-[#F8F8F8]">
  <div class="container mx-auto px-4">
    <?php
    $upcoming_event = get_field('upcoming_event');
    $upcoming_event_page_heading = $upcoming_event['page_heading'];
    $upcoming_event_get_ready = $upcoming_event['get_ready'];
    $upcoming_event_annoucment = $upcoming_event['expect_soon'];
    ?>
    <div class="flex items-center gap-[32px]  mb-[40px] mt-[16px]">
      <a class="contents" href="javascript:history.back()">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />

        <h1 class="font-montserrat uppercase text-[25px] md:text-[40px] md:leading-[48px] font-bold tracking-[3px] md:tracking-[4.8px]">
          <?php the_title(); ?>
        </h1>
      </a>
    </div>
    <div class="Past_event">
      <div class="form_text mb-[40px] w-full md:w-[486px]">
        <h1
          class="font-montserrat uppercase text-[20px] md:text-[32px] font-bold leading-[29px] md:leading-[40px] tracking-[3.8px] mb-[24px]">
          <?php echo esc_html($upcoming_event_get_ready['heading']); ?>
        </h1>
        <p class="roboto text-[14px] text-[#05060F] leading-[20px]">
          <?php echo esc_html($upcoming_event_get_ready['description']); ?>
        </p>
      </div>
    </div>
</section>
<section class="bg-[#F8F8F8] pb-[50px] md:pb-[140px]">
  <div class="container mx-auto px-4">
    <div class="grid grid-col-1 md:grid-cols-3 gap-x-[20px]">
      <?php if ($upcoming_event_get_ready_image = $upcoming_event_get_ready['images']): ?>
        <?php foreach ($upcoming_event_get_ready_image as $upcomingimage): ?>
          <img src="<?php echo esc_url($upcomingimage['image']['url']) ?>" height="246" class="rounded-[20px] object-cover">
        <?php endforeach; ?>
      <?php endif; ?>

    </div>
  </div>
</section>
<section class="bg-[#F8F8F8] pb-[50px] md:pb-[70px]">
  <?php
  $upcoming_event = get_field('upcoming_event');
  $upcoming_event_expect_soon = $upcoming_event['expect_soon'];
  $expect_soon_heading = $upcoming_event_expect_soon['heading'];
  $expect_soon_description = $upcoming_event_expect_soon['description'];
  $expect_soon_announcement = $upcoming_event_expect_soon['announcement'];



  ?>
  <div class="Past_event container mx-auto px-4">
    <div class="form_text mb-[40px] w-full md:w-[486px]">
      <h1
        class="font-montserrat uppercase text-[20px] md:text-[32px] font-bold leading-[29px] md:leading-[40px] tracking-[3.8px] mb-[24px]">
        <?php echo esc_html($expect_soon_heading); ?>
      </h1>
      <p class="roboto text-[14px] text-[#000000] leading-[20px]">
        <?php echo esc_html($expect_soon_description); ?>
      </p>
    </div>
  </div>
  <?php if (!empty($expect_soon_announcement) && is_array($expect_soon_announcement)): ?>
    <div class="flex flex-col gap-[20px]">
      <?php foreach ($expect_soon_announcement as $announcement): ?>
        <div class="container mx-auto flex flex-col lg:flex-row rounded-[20px] gap-y-[20px]">
          <div class="apply bg-white py-[40px] px-[20px] md:px-[32px] rounded-l-[20px] w-[100%] lg:w-[50%]">
            <h1 class="uppercase roboto text-[20px] md:text-[24px] font-bold tracking-[1.2px] md:leading-[32px]  mb-[20px]">
              <?php echo esc_html($announcement['heading']); ?>
            </h1>
            <div class="applytext">
              <?php $announcement_information = $announcement['information']; ?>
              <?php if (!empty($announcement_information) && is_array($announcement_information)): ?>
                <?php foreach ($announcement_information as $announcement_info): ?>
                  <div class="grid grid-cols-1 md:grid-cols-3 mb-[12px] gap-x-[30px]">
                    <p class="roboto text-[14px]  text-[#05060F] font-normal  text-black tracking-[0.84px]">
                      <?php echo esc_html($announcement_info['heading']); ?>
                    </p>
                    <p class="roboto text-[14px] text-[#000000] font-normal  text-black tracking-[0.84px] col-span-2">
                      <?php echo esc_html($announcement_info['description']); ?>
                    </p>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <img src="<?php echo esc_url($announcement['image']['url']); ?>"
            class=" w-[100%] lg:w-[50%] h-[unset]  rounded-r-[20px] object-cover">
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

</section>


<?php get_footer() ?>