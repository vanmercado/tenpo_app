export const hamMenuToggle = () => {
    $(document).ready(function() {
        $('.hamMenuBtn').click(function(e) {
            e.preventDefault();
            
            const $menu = $('.siteHeader__innerSp');
            const $btn = $(this);
            
            $menu.toggleClass('is-open');
            $btn.toggleClass('is-active');
            $('body').toggleClass('no-scroll');
        });
    });
}