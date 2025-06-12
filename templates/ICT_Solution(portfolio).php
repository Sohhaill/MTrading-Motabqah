<?php

/**
 * Template Name: ICT_Solution(portfolio)
 * Template Post Type: portfolio
 * @package WordPress
 * @subpackage motabaqah
 * @since motabaqah 1.0
 */
// Include header
get_header();
?>
<?php
$ict_solutions_portfolio = get_field('ict_solutions_portfolio');
$ict_solutions_portfolio_heading = $ict_solutions_portfolio['page_heading'];
$ict_solutions_portfolio_infrastructure = $ict_solutions_portfolio['infrastructure'];
$ict_solutions_portfolio_features = $ict_solutions_portfolio['features'];
$ict_solutions_portfolio_enterprises = $ict_solutions_portfolio['enterprises'];
$ict_solutions_portfolio_success_stories = $ict_solutions_portfolio['success_stories'];

if ($ict_solutions_portfolio_heading): ?>
  <section>

    <div class="container mx-auto px-4">
      <div class="flex items-center gap-[32px] mb-[40px] mt-[16px]">
        <a class="contents" href="javascript:history.back()">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png" width="24" alt="Back" />

          <h1 class="font-montserrat uppercase text-[25px] md:text-[40px] md:leading-[48px] font-bold tracking-[3px] md:tracking-[4.8px]">
            <?php the_title(); ?>
          </h1>
        </a>
      </div>
      <div class="about_us">

        <div class=" w-[100%] md:w-[572px]">
          <h1
            class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
            <?php echo esc_html($ict_solutions_portfolio_infrastructure['heading']); ?>
          </h1>

        </div>

      </div>
    </div>
  </section>

<?php endif ?>

<?php if ($ict_solutions_portfolio_features): ?>
  <section class="pb-[50px] md:pb-[140px]">
    <div class="container mx-auto px-4">
      <div class="eqipmentall grid lg:grid-cols-4 gap-[20px]">
        <p class="roboto text-[14px] leading-[20px] text-black tracking-[0.84px] col-span-2">
          <?php echo $ict_solutions_portfolio_infrastructure['description']; ?>
        </p>
        <img src=" <?php echo esc_html($ict_solutions_portfolio_infrastructure['image1']['url']); ?>"
          class=" h-[100%] w-full">
        <img src=" <?php echo esc_html($ict_solutions_portfolio_infrastructure['image2']['url']); ?>"
          class=" h-[100%] w-full">
      </div>
      <div class="grid lg:grid-cols-3 gap-[20px] mt-[20px] ">
        <div class="equipment py-[46px] px-[36px] bg-white rounded-[20px]">
          <?php
          $ict_features = $ict_solutions_portfolio_features['feature'];
          ?>
          <?php foreach ($ict_features as $ict_feature): ?>
            <div class="flex flex-col md:flex-row gap-[5px] md:gap-[70px] mb-[30px]">
              <p class="roboto text-[14px] leading-[20px] w-[61px] text-[#05060F] font-normal  text-black tracking-[0.84px]">
                <?php echo esc_html($ict_feature['heading']); ?>
              </p>
              <div class="flex flex-col gap-[8px]">
                <p class="custom-ul-ol roboto text-[14px] leading-[20px] text-[#000000] font-normal  text-black tracking-[0.84px]">
                  <?php echo $ict_feature['description']; ?>
                </p>
              </div>
            </div>
          <?php endforeach ?>
        </div>

        <img src="<?php echo esc_url($ict_solutions_portfolio_features['image']['url']); ?>"
          class="w-full col-span-2 h-[354] rounded-[20px] ">
      </div>
    </div>
  </section>

<?php endif ?>


<?php if ($ict_solutions_portfolio_enterprises): ?>
  <section class="pb-[50px] md:pb-[140px]">


    <div class="container mx-auto px-4">
      <div class="!w-[100%] md:!w-[572px] mb-[40px] ">
        <h1 class="font-montserrat uppercase text-[24px] md:text-[32px] md:leading-[40px] font-bold tracking-[3.6px]  mb-[24px]">
          <?php echo esc_html($ict_solutions_portfolio_enterprises['heading']); ?>
        </h1>
        <p class="roboto text-[#05060F] text-[14px] leading-[20px] text-black tracking-[0.84px]">
          <?php echo $ict_solutions_portfolio_enterprises['description']; ?>
        </p>
      </div>

      <div class="usedall grid grid-col-1 lg:grid-cols-2 gap-[20px]">
        <?php $ict_solutions_portfolio_enterprises_cards = $ict_solutions_portfolio_enterprises['enterprise'] ?>
        <?php foreach ($ict_solutions_portfolio_enterprises_cards as $entercards): ?>
          <div class="used">
            <img src="<?php echo esc_url($entercards['image']['url']); ?>" class="h-[356px] rounded-t-[20px] w-full object-cover">
            <div
              class="bg-white rounded-b-[20px] px-[10px]  md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start">

              <h1
                class="uppercase text-left roboto  text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px]  mb-[20px]">
                <?php echo esc_html($entercards['heading']); ?>
              </h1>
              <p class="custom-ul-ol roboto text-[14px] leading-[20px] text-[#05060F] font-normal text-left text-black tracking-[0.84px]">
                <?php echo $entercards['description']; ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </section>
<?php endif ?>


<?php if ($ict_solutions_portfolio_success_stories): ?>
  <section class=" pb-[50px] md:pb-[108px]">
    <div class="container mx-auto px-4">
      <h1 class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold md:leading-[40px] tracking-[3.6px]  mb-[24px]">
        <?php echo esc_html($ict_solutions_portfolio_success_stories['heading']); ?>
      </h1>
      <div class="flex flex-col gap-[20px]">
        <?php $ict_solutions_portfolio_success_stories_cards = $ict_solutions_portfolio_success_stories['stories'] ?>
        <?php foreach ($ict_solutions_portfolio_success_stories_cards as $successrcards): ?>
          <div class="flex flex-col lg:flex-row rounded-[20px] gap-y-[20px]">
            <div class="apply bg-white py-[40px] px-[20px] md:px-[32px] rounded-[20px] w-[100%] lg:w-[55%]">
              <h1 class="uppercase roboto text-[20px] md:text-[24px] font-bold tracking-[1.2px]  mb-[20px] md:leading-[32px]">
                <?php echo esc_html($successrcards['heading']); ?>
              </h1>

              <div class="applytext">
                <?php $successrcardsinfo = $successrcards['info'];
                foreach ($successrcardsinfo as $successrcardsinfos):
                  ?>
                  <div class="grid grid-cols-1 md:grid-cols-3 mb-[12px] gap-x-[30px]">

                    <p class="roboto text-[14px] leading-[20px]  text-[#000000] font-normal  text-black tracking-[0.84px]">
                      <?php echo esc_html($successrcardsinfos['heading']); ?>
                    </p>
                    <div
                      class="custom-ul-ol text-[14px] leading-[20px] text-[#000000] font-normal  text-black tracking-[0.84px] col-span-2 list-decimal">

                      <?php echo wp_kses_post($successrcardsinfos['description']); ?>

                    </div>
                  </div>

                <?php endforeach ?>
              </div>

            </div>
            <img src="<?php echo esc_url($successrcards['image']['url']); ?>"
              class=" w-[100%] lg:w-[45%] h-[unset] object-cover rounded-tr-[20px] rounded-br-[20px]">
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>
<?php
// Include footer
get_footer();
?>