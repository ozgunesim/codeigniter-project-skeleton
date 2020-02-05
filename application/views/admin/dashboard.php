<!DOCTYPE html>
  <head>
      <title>Alke</title>
      <meta name="description" content=""/>

      <?php $this->load->view('admin/fragments/common/header'); ?>
      
  </head>
  
  <body class="bg-light-gray">
    <div class="container-fluid panel-wrapper">
      <div class="row">
        <div class="col-md-2 left-side">

            <div class="logo-wrapper">
              <h3>Yönetici Paneli</h3>
            </div>

            <?php $this->load->view('admin/fragments/common/menu'); ?>
                
        </div>

        <div class="col-md-10 right-side">

          <div class="panel-header">
            <div class="panel-header-inner">
              <a href="#">Özgün EŞİM</a>
            </div>
          </div>

          <div class="panel-content container-fluid">
            <div class="row">
              <div class="col-12">
                

              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Örnek Card</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card İkincil Başlık</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Diğer link</a>
                </div>
              </div>


              </div>
            </div>
          </div>

        </div>




      </div>


    </div>



    <?php $this->load->view('admin/fragments/common/footer'); ?>
    

    <?php $this->load->view('admin/fragments/common/scripts'); ?>





  </body>
</html>