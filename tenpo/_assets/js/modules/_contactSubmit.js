export const contactSubmit = () => {
    jQuery(document).ready(function($) {
        $(document).on('wpcf7mailsent', function(event) {
            window.location.href = '/contact/thanks';
        });
    });
};