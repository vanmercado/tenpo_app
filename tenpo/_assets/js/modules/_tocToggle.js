export const tocToggle = () => {
    jQuery(document).ready(function($) {
        $('.ez-toc-toggle').each(function() {
            $(this).attr('href', 'javascript:void(0);');
        });
        
        $(document).off('click.toc').on('click.toc', '.ez-toc-title-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const $this = $(this);
            const hasClass = $this.hasClass('toc_open');
            
            if (hasClass) {
                $this.removeClass('toc_open');
            } else {
                $this.addClass('toc_open');
            }
            
            return false;
        });
        
        $(document).off('click.toc-orig').on('click.toc-orig', '.ez-toc-toggle', function(e) {

            const $titleToggle = $('.ez-toc-title-toggle');
            if ($titleToggle.length) {
                $titleToggle.toggleClass('toc_open');
            } else {
                console.log('No .ez-toc-title-toggle found');
            }
            
            return false;
        });
        
        setTimeout(function() {
            const $titleToggle = $('.ez-toc-title-toggle');
            console.log('After timeout - title toggle elements:', $titleToggle.length);
            
            if ($titleToggle.length) {
                $titleToggle.off('click').on('click.direct', function(e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    $(this).toggleClass('toc_open');
                    return false;
                });
                
                $titleToggle.on('mousedown.backup', function(e) {
                    $(this).toggleClass('toc_open');
                });
            }
        }, 100);
    });
}