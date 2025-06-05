<?php
/**
 * Template Name: Media Gallery
 * Template Post Type: event
 */
get_header();

$gallery_field = get_field('gallery_images');
$Media_Heading = $gallery_field['page_heading'];
$sabic_technical = $gallery_field['sabic_technical'];
$gitex_global_2023 = $gallery_field['gitex_global_2023'];
$gitex_global_2022 = $gallery_field['gitex_global_2022'];
$technology_and_industry = $gallery_field['technology_and_industry'];
?>

<?php if (!empty($sabic_technical)) : ?>
  <section class="pb-[50px] md:pb-[140px]">
    <div class="container mx-auto px-4">
      <?php if (!empty($Media_Heading)) : ?>
        <div class="flex items-center gap-[32px] mb-[40px] mt-[10px]">
          <img src="http://localhost/motabqah/wp-content/uploads/2025/06/back.png" width="24">
          <h1 class="uppercase text-[25px] md:text-[40px] font-bold tracking-[3px] md:tracking-[4.8px]">
            <?php echo esc_html($Media_Heading); ?>
          </h1>
        </div>
      <?php endif; ?>

      <div class="Gallery_images">
        <?php
        $sabic_heading = $sabic_technical['heading'];
        $sabic_description = $sabic_technical['description'];
        $sabic_images = $sabic_technical['images'];
        ?>

        <?php if (!empty($sabic_heading)) : ?>
          <h1 class="uppercase text-[20px] md:text-[32px] font-bold leading-[24px] md:leading-[40px] tracking-[3.8px] mb-[24px]">
            <?php echo esc_html($sabic_heading); ?>
          </h1>
        <?php endif; ?>

        <?php if (!empty($sabic_description)) : ?>
          <p class="roboto [14px] text-[#000000] mb-[40px]"><?php echo esc_html($sabic_description); ?></p>
        <?php endif; ?>

        <?php if (!empty($sabic_images)) : ?>
          <div class="sabic_technical gallery grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[18px] gap-y-[13px]">
            <?php foreach ($sabic_images as $images) :
              $image = $images['image'];
              if (!empty($image['url'])) :
            ?>
              <img src="<?php echo esc_url($image['url']); ?>" class="h-[200px] md:h-[320px] w-full object-cover rounded-[20px]">
            <?php endif; endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (!empty($gitex_global_2023)) :
  $heading = $gitex_global_2023['heading'];
  $description = $gitex_global_2023['description'];
  $images = $gitex_global_2023['images'];
?>
  <section class="pb-[50px] md:pb-[140px]">
    <div class="container mx-auto px-4">
      <div class="Gallery_images">
        <?php if (!empty($heading)) : ?>
          <h1 class="uppercase text-[20px] md:text-[32px] font-bold leading-[24px] md:leading-[40px] tracking-[3.8px] mb-[24px]">
            <?php echo esc_html($heading); ?>
          </h1>
        <?php endif; ?>

        <?php if (!empty($description)) : ?>
          <p class="roboto [14px] text-[#000000] mb-[40px]"><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <?php if (!empty($images)) : ?>
          <div class="gitex_global_2023 gallery grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-x-[18px] gap-y-[13px]">
            <?php foreach ($images as $img) :
              $image = $img['image'];
              if (!empty($image['url'])) :
            ?>
              <img src="<?php echo esc_url($image['url']); ?>" class="h-[200px] md:h-[320px] w-full object-cover rounded-[20px]" />
            <?php endif; endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (!empty($gitex_global_2022)) :
  $heading = $gitex_global_2022['heading'];
  $description = $gitex_global_2022['description'];
  $images = $gitex_global_2022['images'];
?>
  <section class="pb-[50px] md:pb-[140px]">
    <div class="container mx-auto px-4">
      <div class="Gallery_images">
        <?php if (!empty($heading)) : ?>
          <h1 class="uppercase text-[20px] md:text-[32px] font-bold leading-[24px] md:leading-[40px] tracking-[3.8px] mb-[24px]">
            <?php echo esc_html($heading); ?>
          </h1>
        <?php endif; ?>

        <?php if (!empty($description)) : ?>
          <p class="roboto [14px] text-[#000000] mb-[40px]"><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <?php if (!empty($images)) : ?>
          <div class="gitex_global_2022 gallery grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-x-[18px] gap-y-[13px]">
            <?php foreach ($images as $img) :
              $image = $img['image'];
              if (!empty($image['url'])) :
            ?>
              <img src="<?php echo esc_url($image['url']); ?>" class="h-[200px] md:h-[320px] w-full object-cover rounded-[20px]" />
            <?php endif; endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (!empty($technology_and_industry)) :
  $heading = $technology_and_industry['heading'];
  $description = $technology_and_industry['description'];
  $images = $technology_and_industry['images'];
?>
  <section class="pb-[50px] md:pb-[70px]">
    <div class="container mx-auto px-4">
      <div class="Gallery_images">
        <?php if (!empty($heading)) : ?>
          <h1 class="uppercase text-[20px] md:text-[32px] font-bold leading-[24px] md:leading-[40px] tracking-[3.8px] mb-[24px]">
            <?php echo esc_html($heading); ?>
          </h1>
        <?php endif; ?>

        <?php if (!empty($description)) : ?>
          <p class="roboto [14px] text-[#000000] mb-[40px]"><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <?php if (!empty($images)) : ?>
          <div class="technology_and_industry gallery grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-x-[18px] gap-y-[13px]">
            <?php foreach ($images as $img) :
              $image = $img['image'];
              if (!empty($image['url'])) :
            ?>
              <img src="<?php echo esc_url($image['url']); ?>" class="h-[200px] md:h-[320px] w-full object-cover rounded-[20px]" />
            <?php endif; endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
