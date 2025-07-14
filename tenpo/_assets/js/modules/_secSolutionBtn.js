export const openModal = () => {
    $(document).ready(function() {
        initializeAccordion();
        
        $('.listItemSp .secSolution__button').on('click', function() {
            const currentItem = $(this).closest('.secSolution__listItem.listItemSp');
            const targetFullItem = getCorrespondingFullItem(currentItem);
            
            if (targetFullItem) {
                const isCurrentlyOpen = targetFullItem.hasClass('is-visible');
                const button = $(this);
                
                if (isCurrentlyOpen) {
                    targetFullItem.removeClass('is-visible');
                    
                    targetFullItem.slideUp(400, function() {
                        $(this).hide();
                    });
                    
                    button.removeClass('is-active');
                } else {
                    targetFullItem.insertAfter(currentItem);
                    
                    targetFullItem.hide().slideDown(400, function() {
                        $(this).addClass('is-visible');
                    });
                    
                    button.addClass('is-active');
                }
            }
        });
        
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.secSolution__listItem.listItemSp').length) {
                $('.secSolution__listItem.u-full.listItemSp.is-visible').each(function() {
                    const $this = $(this);
                    
                    $this.removeClass('is-visible');
                    
                    $this.slideUp(400, function() {
                        $(this).hide();
                    });
                });
                
                $('.listItemSp .secSolution__button').removeClass('is-active');
            }
        });
    });

    function initializeAccordion() {
        const buttonItems = $('.secSolution__listItem.listItemSp:not(.u-full)');
        
        buttonItems.each(function() {
            let modalClass = '';
            
            if ($(this).hasClass('u-sol01')) {
                modalClass = 'modal01';
            } else if ($(this).hasClass('u-sol02')) {
                modalClass = 'modal02';
            } else if ($(this).hasClass('u-sol03')) {
                modalClass = 'modal03';
            }
            
            $(this).data('modal-class', modalClass);
        });
        
        $('.secSolution__listItem.u-full.listItemSp').removeClass('is-visible').hide();
    }

    function getCorrespondingFullItem(buttonItem) {
        const modalClass = buttonItem.data('modal-class');
        if (modalClass) {
            return $('.secSolution__listItem.u-full.listItemSp.' + modalClass);
        }
        return null;
    }

    const toggleAccordion = (buttonElement) => {
        if ($(buttonElement).closest('.listItemSp').length) {
            $(buttonElement).trigger('click');
        }
    };

    const openAccordionItem = (modalClass) => {
        const buttonItem = $('.secSolution__listItem.listItemSp:not(.u-full)').filter(function() {
            return $(this).data('modal-class') === modalClass;
        });
        if (buttonItem.length) {
            buttonItem.find('.secSolution__button').trigger('click');
        }
    };

    const closeAccordionItem = (modalClass) => {
        const modalItem = $('.secSolution__listItem.u-full.listItemSp.' + modalClass);
        const buttonItem = $('.secSolution__listItem.listItemSp:not(.u-full)').filter(function() {
            return $(this).data('modal-class') === modalClass;
        });
        
        if (modalItem.length && buttonItem.length && modalItem.hasClass('is-visible')) {
            modalItem.removeClass('is-visible');
            
            modalItem.slideUp(400, function() {
                $(this).hide();
            });
            
            buttonItem.find('.secSolution__button').removeClass('is-active');
        }
    };

    const closeAllAccordion = () => {
        $('.secSolution__listItem.u-full.listItemSp.is-visible').each(function() {
            const $this = $(this);
            
            $this.removeClass('is-visible');
            
            $this.slideUp(400, function() {
                $(this).hide();
            });
        });
        
        $('.listItemSp .secSolution__button').removeClass('is-active');
    };

    const openMultipleModals = (modalClasses) => {
        modalClasses.forEach(modalClass => {
            openAccordionItem(modalClass);
        });
    };

    const getOpenModals = () => {
        const openModals = [];
        $('.secSolution__listItem.u-full.listItemSp.is-visible').each(function() {
            if ($(this).hasClass('modal01')) openModals.push('modal01');
            if ($(this).hasClass('modal02')) openModals.push('modal02');
            if ($(this).hasClass('modal03')) openModals.push('modal03');
        });
        return openModals;
    };

    return {
        toggleAccordion,
        openAccordionItem,
        closeAccordionItem,
        closeAllAccordion,
        openMultipleModals,
        getOpenModals
    };
};