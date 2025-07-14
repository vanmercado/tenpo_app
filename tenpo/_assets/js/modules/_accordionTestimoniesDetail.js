export const accordionTestimoniesDetail = () => {
  const $tocToggle = $('.js-tocToggle');
  const $tocContent = $('#tocContent');
  const $tocCloseButton = $('.secCaseDetail__body--tocClose');
  const $tocContainer = $('.js-tocContainer');

  if ($tocToggle.length && $tocContent.length) {
    $tocContent.hide(); // Start hidden

    $tocToggle.on('click', function () {
      const isExpanded = $tocToggle.attr('aria-expanded') === 'true';

      $tocContent.stop(true, true).slideToggle(200, function () {
        const isVisible = $tocContent.is(':visible');

        $tocToggle.attr('aria-expanded', isVisible ? 'true' : 'false');
        $tocToggle.text(isVisible ? '閉じる' : '表示する');
        $tocContainer.toggleClass('is-active', isVisible);
      });
    });
  }

  if ($tocCloseButton.length && $tocToggle.length && $tocContent.length) {
    $tocCloseButton.on('click', function () {
      $tocContent.stop(true, true).slideUp(200, function () {
        $tocToggle.attr('aria-expanded', 'false').text('表示する');
        $tocContainer.removeClass('is-active');
      });
    });
  }
};