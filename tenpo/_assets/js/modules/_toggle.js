export const toggle = () => {
  $(".secQuestion__listQuestion").on("click", function () {
    const $this = $(this);
    const $answer = $this.find(".secQuestion__boxAnswer");
    const $title = $this.find(".secQuestion__questionTtl");

    $answer.slideToggle(300);
    $title.toggleClass("is-open");
    
  });
};
