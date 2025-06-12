<?php

/**
 * Template Name: Telecommunication Services(Portfolio)
 * Template Post Type: portfolio
 * @package WordPress
 * @subpackage motabaqah
 * @since motabaqah 1.0
 */
// Include header
get_header();
?>
<?php

$telecommunication_services_title = get_field('telecommunication_services_title');
if (get_field('telecommunication_services_title')): ?>
  <div class="w-full justify-center flex pt-4 bg-[#f9f9f9]">

    <div class="flex flex-row sm:gap-8 gap-0 container mx-auto px-4 items-center">
      <a class="contents" href="javascript:history.back()">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />

        <h1 class="font-montserrat uppercase text-[25px] md:text-[40px] font-bold tracking-[1px] md:leading-[48px] sm:tracking-[3px] md:tracking-[4.8px]">
          <?php the_title(); ?>
        </h1>
      </a>
    </div>
  </div>
<?php endif ?>
<?php if (get_field('telecom_services_section')): ?>
  <section class="pt-[40px] md:pb-[70px]">

    <div class="container mx-auto px-4">
      <div class="!w-[100%] md:!w-[572px] mb-[40px]">
        <?php
        $telecom_services_section = get_field('telecom_services_section');

        ?>
        <h1 class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold tracking-[3.6px] md:leading-[40px] mb-[24px]">
          <?php echo esc_html($telecom_services_section['telecom_services_section_heading']); ?>
        </h1>
        <p class="roboto text-[#05060F] text-[14px] text-black tracking-[0.84px]">
          <?php echo $telecom_services_section['telecom_services_section_discription']; ?>
        </p>
      </div>
      <div class="usedall grid grid-col-1 lg:grid-cols-3 gap-[20px]">
        <?php $telecom_services_section_card = $telecom_services_section['telecom_services_section_card'] ?>
        <?php foreach ($telecom_services_section_card as $cards): ?>
          <div class="used">
            <img src="<?php echo esc_url($cards['telecom_services_card_image']['url']); ?>"
              class="rounded-t-[20px] w-full h-[158px]" />
            <div
              class="bg-white rounded-b-[20px] px-[10px] md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start">
              <h1
                class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                <?php echo esc_html($cards['telecom_services_card_title']); ?>
              </h1>
              <p
                class="custom-ul-ol roboto text-[14px] text-[#05060F] font-normal text-left text-black tracking-[0.84px] w-full h-[117px]">
                <?php echo $cards['telecom_services_card_discription']; ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>

<?php if (get_field('key_projects_handled_section')): ?>
  <section class="pb-[50px] pt-[70px] md:pb-[70px]">
    <?php
    $key_projects_handled_section = get_field('key_projects_handled_section');



    ?>
    <div class="container mx-auto px-4">
      <div class="!w-[100%] md:!w-[572px] mb-[40px]">
        <?php $Key_projects_handled_section_heading = $key_projects_handled_section['Key_projects_handled_section_heading'];
        $key_projects_handled_section_description = $key_projects_handled_section['key_projects_handled_section_description'];
        $key_projects_handled_section_card = $key_projects_handled_section['key_projects_handled_section_card'];


        ?>
        <h1 class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold tracking-[3.6px] md:leading-[40px] mb-[24px]">
          <?php echo esc_html($Key_projects_handled_section_heading); ?>
        </h1>
        <p class="roboto text-[#05060F] text-[14px] text-black tracking-[0.84px]">
          <?php echo esc_html($key_projects_handled_section_description); ?>
        </p>
      </div>
      <div class="usedall grid grid-col-1 lg:grid-cols-2 gap-[20px]">
        <?php foreach ($key_projects_handled_section_card as $projectcards): ?>
          <div class="used">
            <img src="<?php echo esc_url($projectcards['key_projects_handled_card_image']['url']); ?>"
              class="md:h-[356px] h-[250px] rounded-t-[20px] w-full" />
            <div
              class="bg-white rounded-b-[20px] px-[10px] md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start">
              <h1
                class="uppercase text-left roboto text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px] mb-[20px]">
                <?php echo esc_html($projectcards['key_projects_handled_card_title']); ?>
              </h1>
              <p class="roboto text-[14px] text-[#05060F] font-normal text-left text-black tracking-[0.84px]">
                <?php echo esc_html($projectcards['key_projects_handled_card_description']); ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>

<?php if (get_field('successful_installations_section')): ?>
  <section class="py-[70px] justify-center">
    <?php
    $successful_installations_section = get_field('successful_installations_section');
    $successful_installations_discription = $successful_installations_section['successful_installations_discription'];
    $successful_installations_heading = $successful_installations_section['heading'];
    $successful_installations_image = $successful_installations_section['successful_installations_image'];
    $successful_installations_discription_button = $successful_installations_section['button'];
    $gallery_images = $successful_installations_section['gallery_images'];



    ?>
    <div class="container mx-auto px-4">
      <h1
        class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
        <?php echo esc_html($successful_installations_heading); ?>
      </h1>

      <div class="flex md:flex-row flex-col gap-5 justify-between items-start">
        <div class="flex flex-col md:w-[40.75%] gap-4">
          <?php foreach ($successful_installations_discription as $description): ?>
            <p class="roboto text-[14px] text-[#05060F] font-normal text-left text-black tracking-[0.84px] w-full">
              <?php echo esc_html($description['successful_installations_discription']); ?>
            </p>
          <?php endforeach ?>
        </div>

        <div class="relative w-full md:w-[54.24%] rounded-[20px] aspect-video">
          <img src="<?php echo esc_url($successful_installations_image['url']); ?>" alt="Team Working"
            class="w-full h-full rounded-[20px]" />

          <!-- Play Button Positioned Half Outside Left -->

          <?php
          $video_url = $successful_installations_discription_button;
          $clean_url = strtok($video_url, '?');
          $final_video_url = $clean_url . '?autoplay=1';
          ?>
          <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 md:-left-10 md:translate-x-0 z-10">
            <button id="video-play-button" data-video-url="<?php echo esc_url($final_video_url); ?>"
              class="bg-[#E1251B] p-4 rounded-full shadow-[3px_-3px_23.7px_0px_rgba(255,255,255,0.5),_-3px_3px_23.7px_0px_#7B0F1E80]">
              <svg class="w-14 h-14 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <div class="Successful_installations gallery_imgrid grid md:grid-cols-4 gap-5 griddd pt-[20px]">
        <?php foreach ($gallery_images as $gallery_image): ?>
          <img src="<?php echo esc_url($gallery_image['image']['url']); ?>" class="md:h-[268px] h-[170]" />
        <?php endforeach ?>
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
<?php endif ?>
<?php
// Include footer
get_footer();
?>