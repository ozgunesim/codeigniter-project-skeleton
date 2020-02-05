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
                

                <form method="post">
                  <textarea id="summernote" name="editordata"></textarea>
                </form>


              </div>
            </div>
          </div>

        </div>




      </div>


    </div>



    <?php $this->load->view('admin/fragments/common/footer'); ?>
    

    <?php $this->load->view('admin/fragments/common/scripts'); ?>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#summernote').summernote();
      });
    </script>




  </body>
</html>