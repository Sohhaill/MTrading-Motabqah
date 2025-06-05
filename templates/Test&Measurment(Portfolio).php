<?php

/**
 * Template Name: Test-Measurment(Portfolio)
 * Template Post Type: portfolio
 * @package WordPress
 * @subpackage motabaqah
 * @since motabaqah 1.0
 */
// Include header
get_header();
?>
<?php get_header() ?>

<!-- Overview of our expertise -->
  <?php
    $test_measurement_portfolio = get_field('test_&_measurement_portfolio');
        $test_measurement_heading = $test_measurement_portfolio['page_heading'];
  if (get_field('test_&_measurement_portfolio')) :?>
<section>
      
  <div class="container mx-auto px-4">
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
      <?php  $overview = $test_measurement_portfolio['overview'];
       $overview_heading = $overview['heading'];
        $overview_description = $overview['description'];
         $overview_image = $overview['image'];
      
      ?>
      <div>
        <h1
          class="font-montserrat uppercase text-[#05060F] text-[20px] md:text-[32px] leading-[20px] md:leading-[40px] font-bold tracking-[3.8px] mb-[24px]">
          <?php echo esc_html($overview_heading); ?>
        </h1>

      </div>

    </div>
  </div>
</section>
 <?php endif?>


   <?php if ($overview_description) :?>
<section class="pb-[50px] md:pb-[140px]">
  <div class="container mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-[20px] mb-[20px] ">
      <div class="equipment">
        <p class="roboto text-[14px] text-black leading-[20px] tracking-[0.84px] col-span-2">
          <?php echo esc_html($overview_description); ?>
        </p>
      </div>
      <img src="<?php echo esc_url($overview_image['url']); ?>" class="w-full  h-[250] rounded-[20px] ">
    </div>
    <div class="eqipmentall flex flex-col lg:flex-row items-center gap-[20px]">
      <?php  $features = $test_measurement_portfolio['features'];
       $feature = $features['feature'];
        $featureimage1 = $features['image1'];
         $featureimage2 = $features['image2'];
      
      ?>
      <div class="equipment py-[46px] px-[36px] bg-white rounded-[20px] w-[100%] lg:w-[33.33%]">
        <?php foreach($feature as $featureone):?>
        <div class="flex flex-col md:flex-row gap-[5px] md:gap-[70px] mb-[30px]">
          <p class="roboto text-[14px] w-[79px] text-[#05060F] font-normal  text-black tracking-[0.84px]">
            <?php echo esc_html($featureone['heading']); ?>
          </p>
          <div>
            <p class="roboto text-[14px] text-[#000000] font-normal  text-black tracking-[0.84px]">
             <?php echo wp_kses_post($featureone['description']); ?>

            </p>
            
          </div>
        </div>
       <?php endforeach?>
      </div>
      <img src="<?php echo esc_url($featureimage1['url']); ?>" class=" h-[100%] w-[100%] lg:h-[346px] lg:w-[42.06%]">
      <img src="<?php echo esc_url($featureimage2['url']); ?>" class=" h-[100%] w-[100%] lg:h-[346px] lg:w-[24.60%]">

    </div>

  </div>
</section>
 <?php endif?>
<!-- completed projects -->

   <?php
   
    $projects = $test_measurement_portfolio['projects'];
       $projects_heading = $projects['heading'];
        $projects_description = $projects['description'];
         $projects_project = $projects['project'];
   if ($projects) :?>
<section class="pb-[50px] md:pb-[140px]">

    
  <div class="container mx-auto px-4">
    <div class="!w-[100%] md:!w-[572px] mb-[40px] ">
      <h1 class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold tracking-[3.6px] mt-[10px] mb-[24px]">
        <?php echo esc_html($projects_heading); ?>
      </h1>
      <p class="roboto text-[#05060F] text-[14px] text-black tracking-[0.84px]">
         <?php echo esc_html($projects_description); ?>
      </p>
    </div>
    <div class="usedall grid grid-col-1 lg:grid-cols-2 gap-[20px]">
        <?php foreach($projects_project as $project):
          
          
          ?>
      <div class="used">
        <img src="<?php echo esc_url($project['image']['url']); ?>" height="356" class="rounded-t-[20px] w-full">
        <div
          class="bg-white rounded-[20px] px-[10px]  md:px-[32px] py-[20px] md:py-[40px] flex flex-col justify-center items-start">

          <h1
            class="uppercase text-left roboto  text-[20px] md:text-[24px] leading-[32px] font-bold tracking-[1px]  mb-[20px]">
            <?php echo wp_kses_post($project['heading']); ?>
          </h1>
          <p class="roboto text-[14px] text-[#05060F] font-normal text-left text-black tracking-[0.84px]">
             <?php echo wp_kses_post($project['description']); ?>
          </p>
        </div>
      </div>
       <?php endforeach?>

    </div>
  </div>
</section>
 <?php endif?>
<!-- case studies -->
    <?php
     $case_studies = $test_measurement_portfolio['case_studies'];
       $case_studies_heading = $case_studies['heading'];
        $case_studies_description = $case_studies['description'];
         $case_studies_all = $case_studies['case'];
    if ($case_studies) :?>
<section class="pb-[50px] md:pb-[70px]">

  <div class="container mx-auto px-4">
    <div class="!w-[100%] md:!w-[572px] mb-[40px] ">
      <h1 class="font-montserrat uppercase text-[24px] md:text-[32px] font-bold tracking-[3.6px] mt-[10px] mb-[24px]">
        <?php echo esc_html($case_studies_heading); ?>
      </h1>
      <p class="roboto text-[#05060F] text-[14px] text-black tracking-[0.84px]">
         <?php echo esc_html($case_studies_description); ?>
      </p>
    </div>
  
    <div class="flex flex-col gap-[20px]">
        <?php foreach($case_studies_all as $case):
      $caseinfo = $case['info'];
      ?>
      <div class="flex flex-col lg:flex-row rounded-[20px] gap-y-[20px]">
        <div class="apply bg-white py-[40px] px-[20px] md:px-[32px] rounded-[20px] w-[100%] lg:w-[55%]">
          <h1 class="uppercase roboto text-[20px] md:text-[24px] font-bold tracking-[1.2px]  mb-[20px]">
            <?php echo esc_html($case['heading']); ?>
          </h1>
          <div class="applytext">
            <?php foreach($caseinfo as $caseach):?>
            <div class="grid grid-cols-1 md:grid-cols-3 mb-[12px] gap-x-[30px]">

              <p class="roboto text-[14px]  text-[#000000] font-normal  text-black tracking-[0.84px]">
               <?php echo esc_html($caseach['heading']); ?>
              </p>
              <p class="roboto text-[14px] text-[#000000] font-normal  text-black tracking-[0.84px] col-span-2">
                <?php echo esc_html($caseach['description']); ?>
              </p>
            </div>
           <?php endforeach?>

          </div>

        </div>
        <img src="<?php echo esc_url($case['image']['url']); ?>"
          class=" w-[100%] lg:w-[45%] h-[unset] object-cover lg:h-[600px] rounded-tr-[20px]">
      </div>
        <?php endforeach?>
    </div>
 
  </div>
</section>
 <?php endif?>
<?php get_footer() ?>