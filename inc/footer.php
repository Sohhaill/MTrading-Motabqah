<!-- CTA Section -->
<section class="bg-red-600 text-white text-center py-[70px] px-4">
  <h2 class="text-[32px] font-montresrrat font-bold uppercase mb-6 tracking-widest">
    <?php echo get_field('red_box_heading', 'option'); ?>
  </h2>
  <div class="max-w-[525px] mx-auto text-sm mb-8 leading-relaxed tracking-wider">
    <?php echo get_field('red_box_text', 'option'); ?>
</div>
  <a href="#book-call" class="book_a_call_popup inline-block bg-white text-[#05060F] font-semibold px-12 py-4 rounded-[10px] shadow shadow-[#FFFFFF66] hover:bg-gray-100 transition uppercase">
    <?php echo get_field('red_box_button_text', 'option'); ?>
  </a>
</section>

<!-- Footer Section -->
<footer class="bg-white text-center md:py-[100px] py-[50px]">
  <!-- Logo Centered -->
  <div class="mb-10 flex justify-center">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="block w-80">
      <img src="<?php echo get_field('footer_logo', 'option'); ?>" alt="Motabaqah Logo" class="mx-auto w-full h-auto object-contain">
    </a>
  </div>

  <!-- Dynamic Footer Navigation Links -->
  <?php if (have_rows('footer_menu', 'option')) : ?>
    <nav class="mb-10">
      <ul class="flex flex-wrap justify-center gap-6 text-sm font-normal text-[#05060F] tracking-wider uppercase">
        <?php while (have_rows('footer_menu', 'option')) : the_row(); 
          $label = get_sub_field('text');
          $link = get_sub_field('url');
        ?>
          <li><a href="<?php echo esc_url($link); ?>" class="hover:text-red-600"><?php echo esc_html($label); ?></a></li>
        <?php endwhile; ?>
      </ul>
    </nav>
  <?php endif; ?>

  <!-- Copyright -->
  <p class="text-sm text-[#05060F]">
    <?php echo get_field('copyright_text', 'option'); ?>
  </p>
</footer>
