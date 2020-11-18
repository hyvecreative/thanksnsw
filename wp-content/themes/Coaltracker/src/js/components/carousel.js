'use strict';
import $ from 'jquery';
import slick from 'slick-carousel';

export default class Carousel {
  constructor() {
  }

  init() {
      $(".hero-slider").slick({

          // normal options...
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          infinite: true,
          accessibility: true,
          speed: 1000,

          // the magic
          responsive: [{

              breakpoint: 1024,
              settings: {
                  slidesToShow: 1,
                  infinite: true
              }

          }, {

              breakpoint: 600,
              settings: {
                  slidesToShow: 1,
                  dots: true
              }

          }, {

              breakpoint: 300,
              settings: "unslick" // destroys slick

          }]
      });
  }
}