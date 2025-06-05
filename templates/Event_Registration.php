<?php
/**
* Template Name: Event Registration
* Template Post Type: event
*/

?>
<?php get_header() ?>
    <section class="pb-[70px]">
      <?php 
      $event_register = get_field('event_register');
      $event_Heading = $event_register['page_heading'];
    $join_heading = $event_register['heading'];
    $join_description = $event_register['description'];
    $join_image = $event_register['image'];
   

      ?>
      <div class="container mx-auto px-4">
           <div class="flex items-center gap-[32px]  mb-[49px] mt-[10px]">
          <img src="	http://localhost/motabqah/wp-content/uploads/2025/06/back.png" width="24" >
        <h1
          class="uppercase text-[20px] md:text-[32px] font-bold leading-[24px] md:leading-[40px] tracking-[3.8px] "
        >
        <?php echo esc_html($event_Heading); ?>
        </h1>
        </div>
        <div class="contact_us flex flex-col lg:flex-row  gap-[20px]">
          
          <div class="contact_form_main flex !flex-col !w-[100%] lg:!w-[37%]   items-start">
            <div class="form_text mb-[40px]">
            <h1
              class="uppercase text-[20px] md:text-[32px] font-bold leading-[40px] tracking-[3.8px] mb-[24px]"
            >
            <?php echo esc_html($join_heading); ?>
            </h1>
            <p class="roboto text-[14px] text-[#000000]">
             <?php echo esc_html($join_description); ?>
            </p>
          </div>

            <div class="Event_registration_form contact_form w-full">
  <?php echo do_shortcode('[wpforms id="867"]'); ?>
            </div>
          
          </div>
            <img src="<?php echo $join_image['url']?>" class="cover !w-[100%] lg:!w-[63%]" />
        </div>
      </div>
    </section>
    
<?php get_footer() ?>