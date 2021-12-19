export default class ModDemo {
    constructor () {
      this.$this = $('.slider')
    }
    
    init () {
      if (this.$this.length) {
        this.addSlick()
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
  }
  new ModDemo().init()
  