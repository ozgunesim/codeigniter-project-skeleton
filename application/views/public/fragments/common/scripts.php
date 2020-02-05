<script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mobile-detect.min.js"></script>

<script>
window.md = new MobileDetect(window.navigator.userAgent);
$('.animated-gradient-bg').mousemove(function(event) {
  windowWidth = $(window).width();
  windowHeight = $(window).height();
  mouseXpercentage = Math.round(event.pageX / windowWidth * 100);
  mouseYpercentage = Math.round(event.pageY / windowHeight * 100);
  
  $(this).css('background', 'radial-gradient(at ' + mouseXpercentage + '% ' + mouseYpercentage + '%, #ff1353, #ffa90a)');
});

$('.animated-gradient-bg').mouseleave(function(event) {
  
  $(this).css('background', 'transparent');
});
</script>