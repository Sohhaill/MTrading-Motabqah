<header class="bg-[#F9F9F9] relative z-50">
  <div class="container mx-auto px-4 sm:px-5 pb-5 pt-4 sm:pt-5 sm:pb-7 flex items-center justify-between">

    <!-- Logo -->
    <div class="flex items-center gap-2 sm:gap-4 h-8 w-24 sm:h-10 sm:w-28 md:h-12 md:w-32 flex-shrink-0">
      <a class="h-full w-full" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_field('website_logo', 'option'); ?>" alt="Motabaqah Logo"
          class="w-full h-full object-cover">
      </a>
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden lg:flex text-xs xl:text-sm font-normal text-[#05060F] tracking-wider uppercase">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '<ul class="flex gap-4 xl:gap-8 list-none">%3$s</ul>',
        'depth' => 2,
        'fallback_cb' => false,
      ]);
      ?>
    </nav>

    <!-- Tablet Menu (md to lg) -->
    <nav class="tab_menu_Am hidden md:flex lg:hidden text-xs font-normal text-[#05060F] tracking-wider uppercase">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '<ul class="flex gap-3 list-none">%3$s</ul>',
        'depth' => 1,
        'fallback_cb' => false,
      ]);
      ?>
    </nav>

    <!-- Hamburger Button (Mobile & Small Tablet) -->
    <button id="mobile-menu-toggle" class="md:hidden text-[#05060F] focus:outline-none p-2 -mr-2"
      aria-label="Toggle mobile menu">
      <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>

    <!-- Desktop CTA -->
   <a href="#"  class="book_a_call_popup hidden lg:inline-block bg-[var(--button-bg-red)] hover:bg-red-700 text-white 
      text-xs xl:text-sm font-bold tracking-wider uppercase px-6 xl:px-12 py-3 xl:py-4 
      rounded-lg shadow-lg shadow-[#E1251B66] transition-all duration-200 whitespace-nowrap">
      Book a Call
</a>

    <!-- Tablet CTA (smaller) -->
    <a href="#"
      class="hidden md:inline-block lg:hidden bg-[var(--button-bg-red)] hover:bg-red-700 text-white text-xs font-bold tracking-wider uppercase px-4 py-3 rounded-lg shadow-lg shadow-[#E1251B66] transition-all duration-200 whitespace-nowrap">
      <?php echo get_field('button_text', 'option'); ?>
    </a>
  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu"
    class="fixed inset-0 w-full h-full hidden bg-white flex-col items-center justify-center text-center text-sm sm:text-base font-normal text-[#05060F] tracking-wider uppercase z-50 px-5 sm:px-8">

    <!-- Close Button -->
    <button id="mobile-menu-close"
      class="absolute top-4 sm:top-5 right-4 sm:right-5 text-[#05060F] focus:outline-none p-2"
      aria-label="Close mobile menu">
      <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <!-- Mobile Menu Content -->
    <div class="flex flex-col items-center justify-center min-h-screen w-full max-w-sm mx-auto">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '<ul class="flex flex-col gap-6 sm:gap-8 list-none mb-8 sm:mb-12">%3$s</ul>',
        'depth' => 1,
        'fallback_cb' => false,
      ]);
      ?>

      <!-- Mobile CTA Button -->
      <a href="#"
        class="book_a_call_popup inline-block bg-[var(--button-bg-red)] hover:bg-red-700 text-white text-sm sm:text-base font-bold tracking-wider uppercase px-8 sm:px-12 py-4 sm:py-5 rounded-lg shadow-lg shadow-[#E1251B66] transition-all duration-200 w-full max-w-xs text-center">
        <?php echo get_field('button_text', 'option'); ?>
      </a>
    </div>
  </div>

 <div id="popupOverlay" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-50 hidden">
  <div class="book_a_call flex flex-col w-[318px] md:w-[452px] px-[20px] rounded-[20px] bg-white  relative">
    <img src="https://localdev.mi6.global/wp-content/uploads/2025/06/close.png"
         width="24" id="closePopup"
         class="mt-[32px] ml-auto cursor-pointer" alt="Close">

    <h2 class="font-montserrat uppercase text-[20px] md:text-[32px] font-bold leading-[40px] tracking-[3.8px] mb-[24px]">
      Contact us
    </h2>

    <div class="book_a_call">
      <?php echo do_shortcode('[wpforms id="865"]'); ?>
    </div>
  </div>
</div>
</header>