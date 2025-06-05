<?php
/**
* Template Name: Past Event
* Template Post Type: event
*/
?>
<?php get_header() ?>
<section class="bg-[#F8F8F8]">
  <div class="container mx-auto px-4">
    <?php
    $event_page_heading = get_field('event_page_heading');
    $event_summery = get_field('summery');
    $summery_heading = $event_summery['heading'];
    $summery_description = $event_summery['description'];
    $summery_all_events = $event_summery['all_events'];
    ?>
    <div class="flex items-center gap-[32px]  mb-[40px] mt-[10px]">
      <a class="contents" href="javascript:history.back()">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />

        <h1 class="font-montserrat uppercase text-[25px] md:text-[40px] font-bold tracking-[3px] md:tracking-[4.8px]">
          <?php the_title(); ?>
        </h1>
      </a>
    </div>
    <div class="Past_event">
      <div class="form_text mb-[40px] w-full md:w-[486px]">
        <?php if (!empty($summery_heading)): ?>
          <h1
            class="font-montserrat uppercase text-[20px] md:text-[32px] font-bold leading-[24px] md:leading-[40px] tracking-[3.8px] mb-[24px]">
            <?php echo esc_html($summery_heading); ?>
          </h1>
        <?php endif; ?>
        <?php if (!empty($summery_description)): ?>
          <p class="roboto [14px] text-[#000000]">
            <?php echo esc_html($summery_description); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
</section>
<?php if($summery_all_events){ ?>
<section class="pb-[50px] md:pb-[70px]">
  <div class="flex flex-col gap-[20px]">
    <?php foreach ($summery_all_events as $past): ?>
      <div class="container mx-auto px-4 flex flex-col lg:flex-row rounded-[20px] gap-y-[20px]">
        <div class="apply bg-white md:py-[40px]  md:px-[32px] rounded-[20px] w-[100%] lg:w-[55%]">
          <?php if (!empty($past['heading'])): ?>
            <h1 class="uppercase roboto text-[20px] md:text-[24px] font-bold tracking-[1.2px]  mb-[20px]">
              <?php echo esc_html($past['heading']); ?>
            </h1>
          <?php endif; ?>
          <div class="applytext">
            <?php
            $past_information = $past['information'];
            ?>
            <?php foreach ($past_information as $past_info): ?>
              <?php if (!empty($past_info['heading']) || !empty($past_info['description'])): ?>
                <div class="grid grid-cols-1 md:grid-cols-3 mb-[12px] gap-x-[30px]">
                  <?php if (!empty($past_info['heading'])): ?>
                    <p class="roboto text-[14px]  text-[#000000] font-normal  text-black tracking-[0.84px]">
                      <?php echo esc_html($past_info['heading']); ?>
                    </p>
                  <?php endif; ?>
                  <?php if (!empty($past_info['description'])): ?>
                    <p class="roboto text-[14px] text-[#000000] font-normal  text-black tracking-[0.84px] col-span-2">
                      <?php echo $past_info['description']; ?>
                    </p>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            <?php endforeach ?>
          </div>
        </div>
        <?php if (!empty($past['image']['url'])): ?>
          <img src="<?php echo esc_url($past['image']['url']); ?>"
            class=" w-[100%] lg:w-[45%] h-[unset] lg:h-[540px] rounded-tr-[20px]">
        <?php endif; ?>
      </div>
    <?php endforeach ?>
  </div>
</section>
<?php } ?>
<?php get_footer() ?>