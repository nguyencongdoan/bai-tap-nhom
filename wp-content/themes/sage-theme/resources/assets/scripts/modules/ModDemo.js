export default class ModDemo {
    constructor () {
      this.$this = $('.slider')
      this.$btn = $('icomoon-btn');
    }
    
    init () {
      if (this.$this.length) {
        this.addSlick();
        this.Clicked();
      }
    }

    addSlick () {
      $('.slider').slick({
        rows: 0,
        adaptiveHeight: true,
        arrows: false, //tắt previous vs next
        // prevArrow: '<button type="button" class="slick-prev arrows"><span class="icomoon h1 icon-chevron-left"></span></button>',
        // nextArrow: '<button type="button" class="slick-next arrows"><span class="icomoon h1 icon-chevron-right"></span></button>'
      })
    }

    Clicked(){
      $('.icomoon-btn').click(function(){
        const input = $('#input-search');
        
        if(input.hasClass('hidden')){
          input.removeClass('hidden');
          input.addClass('block');
        }
        else{
          input.removeClass('block');
          input.addClass('hidden');
        }
      })
    }
  }
  new ModDemo().init()
  