<?php include 'header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
<?php include 'menu.php'; ?>



  <div class="content-wrapper">

    <div class="container-full">

    <!-- Main content -->

    <section class="content">
     
           
      
    </section>

    <!-- /.content -->

    </div>

  </div>

  <!-- /.content-wrapper -->


<?php include 'footer.php'; ?>

<script type="text/javascript">

$(document).ready(function(){

  $('.counter-value').each(function(){

      $(this).prop('Counter',0).animate({

          Counter: $(this).text()

      },{

          duration: 3500,

          easing: 'swing',

          step: function (now){

              $(this).text(Math.ceil(now));

          }

      });

  });

});

</script>

