  <?php $this->load->view('template/head'); ?> 
<body class="rg-body">
    <div class="overlay">
        <div id="sticky-anchor"></div> 
            <div id="tf-menu" class="navbar">
                <div class="container">
                <div class="col-md-2 col-sm-2 col-xs-12">
                <a class="brand" href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a>
                </div> <!-- end pull-right -->
                <div class="col-md-10 col-sm-12 col-xs-12 no-padding nav-hdng">
                  <p>Welcome to Padmashali India Matrymony!</p>                                
                </div>
            <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div>
<div class="thankyou-bg">    
<div class="container">
  <div class="jumbotron text-xs-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  <p>
    Having trouble? <a href="#">Contact us</a>
  </p>
  <p class="lead">
     <a class="btn  btn-danger btn-sm" href="<?php echo base_url('matrimony')?>" role="button">Continue to Loginpage</a>
  </p>
</div>
</div>
 </div>
 </div>
    <div class="clearfix"> </div>
    <?php $this->load->view('template/footer.php')?>  
</body>
</html>
