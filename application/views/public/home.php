<!DOCTYPE html>
  <head>
    <title>Alke</title>
    <?php $this->load->view('public/fragments/common/header'); ?>
      
  </head>
  <body class="gradient-bg">

    <a href="#" class="ak-logo">
      <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" >
    </a>

    <div class="main-container container-fluid animated fadeIn">
      <div class="row">

        <a href="#" class="col-lg-3 main-col">
          <div class="main-col-title">
            <div>
              <h2>Hakkımızda</h2>
              <hr>
              <p>Şekerleme makineleri ve üretim hatları imal eden bir firmayız. Daha detaylı bilgi için bu bölüme tıklayın.</p>
            </div>
          </div>
        </a>

        <a href="<?php echo base_url(); ?>portfolio" class="col-lg-3 main-col">
          <div class="main-col-title">
            <div>
              <h2>Ürünlerimiz</h2>
              <hr>
              <p>Alke kalitesiyle geliştirdiğimiz projelerimizin görsellerini ve detaylarını bu alanda inceleyebilirsiniz. </p>
            </div>
          </div>

          <div class="main-col-content portfolio-content">
            <div class="card portfolio-card" style="background-image:url('img/portfolio/sm/p1.jpg');">
              <div class="portfolio-backdrop"></div>
              <h3>Tarih</h3><p>Deneme Kart</p>
            </div>
            <div class="card portfolio-card" style="background-image:url('img/portfolio/sm/p2.jpg');">
              <div class="portfolio-backdrop"></div>
              <h3>Tarih</h3><p>Deneme Kart</p>
            </div>
            <div class="card portfolio-card" style="background-image:url('img/portfolio/sm/p3.jpg');">
              <div class="portfolio-backdrop"></div>
              <h3>Tarih</h3><p>Deneme Kart</p>
            </div>
            <div class="card portfolio-card" style="background-image:url('img/portfolio/sm/p4.jpg');">
              <div class="portfolio-backdrop"></div>
              <h3>Tarih</h3><p>Deneme Kart</p>
            </div>
          </div>

          <div class="main-col-arrows">
            <div style="background-image:url('<?php echo base_url(); ?>assets/img/arrow_down.png');"  class="arrow-down"></div>
          </div>

        </a>

        <div class="col-lg-3 main-col">
          <div class="main-col-title">
            <div>
              <h2><a href="news">Haberler</a></h2>
              <hr>
              <p>Müşterilerimizin memnuniyetini maksimum düzeyde tutmak üzere yürüttüğümüz faaliyetleri inceleyin ve firmamızı takip edin.</p>
            </div>
          </div>
          <div class="main-col-content">
            <a href="news.html" class="card news-card"><h3>Alke</h3><p>Tümünü Gör ...</p></a>
            <div class="card news-card"><h3>Tarih</h3><p>Deneme Kart</p></div>
            <div class="card news-card"><h3>Tarih</h3><p>Deneme Kart</p></div>
            <div class="card news-card"><h3>Tarih</h3><p>Deneme Kart</p></div>
            <div class="card news-card"><h3>Tarih</h3><p>Deneme Kart</p></div>
            <div class="card news-card"><h3>Tarih</h3><p>Deneme Kart</p></div>
            <div class="card news-card"><h3>Tarih</h3><p>Deneme Kart</p></div>
            <div class="card news-card"><h3>Tarih</h3><p>Deneme Kart</p></div>
          </div>
          
          <div class="main-col-arrows">
            <div style="background-image:url('<?php echo base_url(); ?>assets/img/arrow_down.png');"  class="arrow-down"></div>
          </div>
        </div>

        <a href="#" class="col-lg-3 main-col">
          <div class="main-col-title">
            <div>
              <h2>İletişim</h2>
              <hr>
              <p>Fikir almak ya da projenizi bizimle gerçekleştirmek istiyorsanız bu bölüme tıklayarak iletişim kanallarımıza ulaşabilirsiniz.</p>
            </div>
          </div>
        </a>


      </div>

    </div>

    
    <div class="lang-container">
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TR
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">TR</a>
          <a class="dropdown-item" href="#">EN</a>
          <a class="dropdown-item" href="#">AR</a>
        </div>
      </div>
    </div>


  </body>
  
  <?php $this->load->view('public/fragments/common/scripts'); ?>

  <script>
    $(document).ready(function(){
      $('.main-container').removeClass('d-none').addClass('animated fadeIn');
    });
    /*$(window).mousemove(function(e){
      var x = e.clientX;
      var y = e.clientY;

      var ratio = parseInt($(window).width() / x * 100)/2;

      var gradient_txt = 'linear-gradient(45deg, #7028e4 5%, #e5b2ca ' + ratio + '%)';
      $('body').css('background', gradient_txt);
    });*/

    $('.main-col').on('mousewheel', function(event) {
      if( $(this).find('.main-col-content').length == 0){
        return;
      }

      var target = $(this).find('.main-col-content').first();
      $(target).css('transition', 'transform .4s');
      var deltaY = $(target).data('deltaY');
      //console.log(deltaY);

      if(deltaY === undefined){
        deltaY = 0;
      }

      var new_y = parseInt(deltaY + ( event.deltaY * event.deltaFactor/2));
      new_y = (new_y > 0) ? 0 : new_y;

      if(new_y < -1*$(target).height() + 250){
        new_y = -1*$(target).height() + 250
        $('.main-col-arrows').addClass('op-0');
      }else { 
        $('.main-col-arrows').removeClass('op-0');
      }

      $(target).css(
        'transform',
        'translateY(' + new_y + 'px)'
      );

      $(target).data('deltaY', new_y );

      //console.log(event.deltaX, event.deltaY, event.deltaFactor);
    });

    $('.main-col').on('mouseleave', function(){
      var target = $(this).find('.main-col-content').first();
      $(target).css('transition', 'transform .4s');
      $(target).data('deltaY', '0' );

      $(target).css(
        'transform',
        'translateY(0px)'
      );

      $('.main-col-arrows').removeClass('op-0');

    });

  </script>
</html>