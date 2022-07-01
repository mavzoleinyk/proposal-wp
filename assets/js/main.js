

$(function() { 
    $('.testmonails').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
      autoplaySpeed: 4000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      });

      $('.gifts').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        centerMode: true,
        arrows:false,
        autoplay: true,
       
      autoplaySpeed: 4000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      responsive: [
        {
          breakpoint: 961,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: false,
            slidesToShow: 3
          }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: false,
                slidesToShow: 1,
                dots:true

            }
          }
      ]
      });




      $('.reviews').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        centerMode: true,
        arrows:true,
        autoplay: true,
        centerPadding: '21%',
        asNavFor: '.reviews-nav',
      autoplaySpeed: 2000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      responsive: [
        {
          breakpoint: 961,
          settings: {
            centerPadding: '8%',
            centerMode: true,
            
          }
        },
        {
          breakpoint: 650,
          settings: {
            arrows: false,
            centerMode: false,
            centerPadding: '2%',
            dots:true
          }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '0',
                slidesToShow: 1,
                dots:true

            }
          }
      ]
      });

      
      $('.reviews-nav').slick({
        infinite: true,
        slidesToShow: 6,
        asNavFor: '.reviews',
        arrows: false,
        slidesToScroll: 1,
        centerMode: true,
       
        responsive: [
          {
            breakpoint: 992,
            settings: {
              arrows: false,
              centerMode: true,
              slidesToShow: 4
            }
          },
            
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 4
              }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 4,
                    dots:false
    
                }
              }
          ]
      });


      $('.nycproposals').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: false,
        dots: false,
        arrows:true,
        autoplay: true,
      autoplaySpeed: 2000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      responsive: [
        {
          breakpoint: 961,
          settings: {
            arrows: true,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 650,
          settings: {
            arrows: true,
            slidesToShow: 2
          }
        },
        {
            breakpoint: 480,
            settings: "unslick"
          }
      ]
      });

      $('.videos-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows:true,
        autoplay: true,
      autoplaySpeed: 4000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      responsive: [
        {
          breakpoint: 961,
          settings: {
            arrows: false,
            
          }
        },
        {
          breakpoint: 650,
          settings: {
            arrows: false,
       
          }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
            }
          }
      ]
      });

      $('.blogs-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        autoplay: true,
      autoplaySpeed: 2000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      responsive: [
        {
          breakpoint: 961,
          settings: {
            arrows: false,
            slidesToShow: 4,
            
            
          }
        },
        {
          breakpoint: 787,
          settings: {
            arrows: false,
            slidesToShow: 3,
            dots:true
       
          }
        },
        {
            breakpoint: 665,
            settings: {
              arrows: false,
              slidesToShow: 2,
              dots:true
         
            }
          },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots:true
            }
          }
      ]
      });



      $('.portfolio').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows:true,
        autoplay: true,
        customPaging : function(slider, i) {
          var cslides = slider.$slides.length;
          console.log(cslides);
          var thumb = $(slider.$slides[i]).data();
          return '<span class="custom-dots">'+(i+1)+'/'+cslides+'</span>';
        },
      autoplaySpeed: 4000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      responsive: [
        {
          breakpoint: 961,
          settings: {
            arrows: true,
            
          }
        },
        {
          breakpoint: 650,
          settings: {
            arrows: true,
       
          }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
            }
          }
      ]
      });


     


      

      $('.sspcials').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        autoplay: true,
      autoplaySpeed: 4000,
      prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
      </span>`,
      nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
      </svg>
      
      </span>`,
      responsive: [
        {
          breakpoint: 961,
          settings: {
            arrows: false,
            slidesToShow: 2,
            
          }
        },
        {
          breakpoint: 786,
          settings: {
            arrows: false,
            slidesToShow: 2,
       
          }
        },
        {
            breakpoint: 665,
            settings: "unslick"
          },
        {
            breakpoint: 480,
            settings: "unslick"
          }
      ]
      });



  


      function customSlickOnMobile(){

        $('.gallerys_slider').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode:true,
          centerPadding:'5%',
          dots: true,
          arrows:false,
          autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
        </span>`,
        nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
        </svg>
        
        </span>`,
        responsive: [
         
          {
              breakpoint: 665,
              settings: {
  
                slidesToShow: 1,
          slidesToScroll: 1,
          centerMode:true,
         
                
              }
            },
          {
              breakpoint: 480,
              settings: {
  
                slidesToShow: 1,
          slidesToScroll: 1,
          centerMode:true,
                
              }
            }
        ]
        });

      }


      function BlogscustomSlickOnMobile(){

        $('.related-blogs-slider').slick({
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode:true,
              
          dots: true,
          arrows:false,
          autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
        </span>`,
        nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
        </svg>
        
        </span>`,
        responsive: [
         
          {
              breakpoint: 665,
              settings: {
  
                slidesToShow: 2,
          slidesToScroll: 1,
          centerMode:true,
         
                
              }
            },
          {
              breakpoint: 480,
              settings: {
  
                slidesToShow: 1,
          slidesToScroll: 1,
          centerMode:true,
          
                
              }
            }
        ]
        });

      }

      function sidebarBlogs(cslick){

        var dots = true;
        var arrows = false;

        if(cslick.hasClass('row-box-blogs-centeral')){

          var dots = false;
          var arrows = true;

        }


       

        cslick.slick({
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode:true,
              
          dots: dots,
          arrows:arrows,
          autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
        </span>`,
        nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
        </svg>
        
        </span>`,
        responsive: [
         
          {
              breakpoint: 665,
              settings: {
  
                slidesToShow: 2,
          slidesToScroll: 1,
          centerMode:true,
         
                
              }
            },
          {
              breakpoint: 480,
              settings: {
  
                slidesToShow: 1,
          slidesToScroll: 1,
          centerMode:true,
          
                
              }
            }
        ]
        });

      }


      if($(window).width() < 665) {
        customSlickOnMobile();
        }
        
        $(window).on('load resize orientationchange', function() {
            if($(window).width() < 665) {
                if(!$('.gallerys_slider').hasClass('slick-initialized')){
                  customSlickOnMobile();
                }
        
            }else{
                if($('.gallerys_slider').hasClass('slick-initialized')){
                    $('.gallerys_slider').slick('unslick');
                }
            }
        });
        

        if($(window).width() < 786) {
          BlogscustomSlickOnMobile();
          sidebarBlogs($('.sidbar-blogs'));
          sidebarBlogs($('.row-blog-packages'));
          sidebarBlogs($('.row-box-blogs-centeral'));
          sidebarBlogs($('.row_proposal_checkout'));
          
          }
          
          $(window).on('load resize orientationchange', function() {
              if($(window).width() < 786) {

                if(!$('.sidbar-blogs').hasClass('slick-initialized')){
                  sidebarBlogs($('.sidbar-blogs'));
                }
                if(!$('.row-blog-packages').hasClass('slick-initialized')){
                  
                  sidebarBlogs($('.row-blog-packages'));
                }
                if(!$('.row-blog-packages').hasClass('slick-initialized')){
                  
                  sidebarBlogs($('.row-box-blogs-centeral'));
                }
                if(!$('.row_proposal_checkout').hasClass('slick-initialized')){
                  
                  sidebarBlogs($('.row_proposal_checkout'));
                }

                
                  if(!$('.related-blogs-slider').hasClass('slick-initialized')){
                    BlogscustomSlickOnMobile();
                  }
          
              }else{
                  if($('.related-blogs-slider').hasClass('slick-initialized')){
                      $('.related-blogs-slider').slick('unslick');
                  }
                  if($('.sidbar-blogs').hasClass('slick-initialized')){
                    $('.sidbar-blogs').slick('unslick');
                }
                if($('.row-box-blogs-centeral').hasClass('slick-initialized')){
                  $('.row-box-blogs-centeral').slick('unslick');
              }

                if($('.row-blog-packages').hasClass('slick-initialized')){
                  $('.row-blog-packages').slick('unslick');
              }
              if($('.row_proposal_checkout').hasClass('slick-initialized')){
                $('.row_proposal_checkout').slick('unslick');
            }


              }
          });





        
          $('.row_videos_slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows:true,
            autoplay: true,
          autoplaySpeed: 4000,
          prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
          </span>`,
          nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
          </svg>
          
          </span>`,
          responsive: [
            {
              breakpoint: 961,
              settings: {
                arrows: false,
                slidesToShow: 4,
                
              }
            },
            {
              breakpoint: 767,
              settings: "unslick"
            },
            {
                breakpoint: 665,
                settings: "unslick"
              },
            {
                breakpoint: 480,
                settings: "unslick"
              }
          ]
          });


          $('.wrap_product_gallery').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows:false,
            autoplay: true,
          autoplaySpeed: 4000,
          customPaging: function(slick,index) {
            return '<button style="background:url('+$(slick.$slides[index]).data('thumb')+') center center;"></button>';
            }
         
        
          });



          $('.press-slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows:true,
            autoplay: true,
          autoplaySpeed: 4000,
          prevArrow:`<span class="testmonail_arrow prevta"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.1421 29.1421L1 15L15.1421 0.857863" stroke="#0066C9"/>      </svg>
          </span>`,
          nextArrow:`<span class="testmonail_arrow nextta"><svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.857864 0.857864L15 15L0.857863 29.1421" stroke="#0066C9" stroke-width="2"/>
          </svg>
          
          </span>`,
          responsive: [
            {
              breakpoint: 961,
              settings: {
                arrows: true,
                slidesToShow: 4,
                
              }
            },
            {
              breakpoint: 787,
              settings: {
                arrows: true,
                slidesToShow: 3,
           
              }
            },
            {
                breakpoint: 767,
                settings:'unslick'
              },
            {
                breakpoint: 480,
                settings:'unslick'
              }
          ]
          });
      


      $(document).on('click','.btn-menu',function(){
        $(this).toggleClass('menu-open');
        $(this).closest('.col-menu').find('.menu_navigation').slideToggle(300);
      })

      $(document).on('click','.bpt_title',function(e){
        e.preventDefault();
        $(document).find('.bpt_title').removeClass('active');
        $(this).addClass('active');
        var bodyID = $(this).attr('href');
        $(this).closest('.wrap_bp_tabs').find('.bpt_content').removeClass('active').hide();
        $(this).closest('.wrap_bp_tabs').find(bodyID).addClass('active').show();




      });

      $(document).on('click','.acheader',function(){
        
        $(this).closest('.pcordion').find('.acbody').slideToggle(300,function(){
          $(this).closest('.pcordion').toggleClass('open');
        });

      });

      if($(window).width() < 576) {

        $(document).on('click','.term_header',function(e){
          e.stopPropagation();
          
          $(this).closest('.terms_block').find('.term_body').slideToggle(300,function(){
            $(this).closest('.terms_block').toggleClass('open');

          })
        });


      }

      $(window).on('resize orientationchange', function() {
        if($(window).width() < 576) {
          terms_toggle();

         
        }
      });


      function terms_toggle(){
        $(document).on('click','.term_header',function(e){
          e.stopPropagation();
          
          $(this).closest('.terms_block').find('.term_body').slideToggle(300,function(){
            $(this).closest('.terms_block').toggleClass('open');

          })
        });
      }


  

      


 });



