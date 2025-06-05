jQuery(document).ready(function ($) {
  $("#mobile-menu-toggle").on("click", function () {
    $("#mobile-menu").stop(true, true).slideToggle(500);
  });

  $("#mobile-menu-close").on("click", function () {
    $("#mobile-menu").slideUp(500);
  });

  // Optional: close when any link inside the mobile menu is clicked
  $("#mobile-menu a").on("click", function () {
    $("#mobile-menu").slideUp(500);
  });

  $("#video-play-button").on("click", function () {
    const videoURL = $(this).data("video-url");

    let embedHTML = "";

    if (
      videoURL.includes("youtube.com/embed") ||
      videoURL.includes("vimeo.com")
    ) {
      embedHTML = `<iframe src="${videoURL}" class="w-full h-full" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>`;
    } else if (videoURL.endsWith(".mp4")) {
      embedHTML = `<video src="${videoURL}" class="w-full h-full" autoplay controls></video>`;
    } else {
      embedHTML = '<p class="text-white">Invalid video URL</p>';
    }

    $("#video-container").html(embedHTML);
    $("#video-modal").removeClass("hidden");
  });

  $("#close-video, #video-modal").on("click", function (e) {
    if (e.target.id === "close-video" || e.target.id === "video-modal") {
      $("#video-container").html("");
      $("#video-modal").addClass("hidden");
    }
  });
});



  const openButtons = document.querySelectorAll('.book_a_call_popup');
  const closeBtn = document.getElementById('closePopup');
  const popupOverlay = document.getElementById('popupOverlay');

  openButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      popupOverlay.classList.remove('hidden');
    });
  });

  closeBtn.addEventListener('click', () => {
    popupOverlay.classList.add('hidden');
  });

  // Optional: close when clicking outside the modal
  popupOverlay.addEventListener('click', (e) => {
    if (e.target === popupOverlay) {
      popupOverlay.classList.add('hidden');
    }
  });


  const applyButtons = document.querySelectorAll('.apply_now_btn');
  const applycloseBtn = document.getElementById('closePopup_apply');
  const applypopupOverlay = document.getElementById('popupOverlayapplynow');

  applyButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      applypopupOverlay.classList.remove('hidden');
    });
  });

  applycloseBtn.addEventListener('click', () => {
    applypopupOverlay.classList.add('hidden');
  });

  // Optional: close when clicking outside the modal
  applypopupOverlay.addEventListener('click', (e) => {
    if (e.target === applypopupOverlay) {
      applypopupOverlay.classList.add('hidden');
    }
  });


