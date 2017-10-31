<?php $this->load->view('template/head'); ?> 
<!--<style>
.datepicker{
    width:256px;
} 
</style> -->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/formvalidate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css"> 

<script>
   $(document).ready(function(){
           $('#dob').datepicker( {
               dateFormat:'d-m-yy',  
               showOn: "button",
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                buttonImageOnly: true,
                maxDate: '-18Y',
        });
      
});
        

</script>
<body>

    <div id="sticky-anchor"></div>
    <!-- ============================  Navigation Start =========================== -->                                      
    <div id="tf-menu" class="navbar">
        <div class="container">
           <div class="col-md-2 col-sm-2">
           <a class="brand" href="#"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a>
           </div> <!-- end pull-right -->
            <div class="col-md-10 no-padding">
              <nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header nav_2">
              <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
           </div> 
           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a class="active" href="index.html">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">REGISTER</a></li>
                    <li><a href="#">SUCCESS STORIES</a></li>
                    <li><a href="#">UPGRADE</a></li>
                    <li><a href="#">FAQ'S</a></li>
                    <li class="last"><a href="#">CONTACTS</a></li>
                </ul>
            
           <div class="nav-search col-lg-5 col-md-12 no-padding pull-right">
            <?php 
               if($this->session->flashdata('loginfail')){ ?>
                <span style="color:white">Please enter valid username/password</span>
               <?php }
               if($this->session->flashdata('fail')){ ?>
                <span style="color:white"><?php echo $this->session->flashdata('fail');?></span>
               <?php }?> 
            <form action ="<?php echo base_url('matrimony/login') ?>" method="post">
            <div class="div-left">
              <input type="text" class="m_1" name="userid"  required="" placeholder="Enter Profile ID">
              <a href="#"><p>Forgot Password ?</p></a>
            </div>  
            <div class="div-left">
              <input type="password" name="password" placeholder="Password" id="psw" maxlength="40" value="">
            </div>  
            <div class="div-left">
              <input type="submit"  name="go" value="Go">
            </div>  
            </form>
            </div>
             </div><!-- /.navbar-collapse -->
              
            </nav>                                                
           </div>
          <div class="clearfix"> </div>
        </div> <!-- end container -->

    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
    <div id="tf-home" class="snow-container">
        <div class="snow foreground"></div>
        <div class="snow foreground layered"></div>
        <div class="snow middleground"></div>
        <div class="snow middleground layered"></div>
        <div class="snow background"></div>
        <div class="snow background layered"></div>
    </div>
    <div id="themeSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#themeSlider" data-slide-to="0" class=""></li>
            <li data-target="#themeSlider" data-slide-to="1" class=""></li>
            <li data-target="#themeSlider" data-slide-to="2" class="active"></li>
            <li data-target="#themeSlider" data-slide-to="3" class=""></li>
        
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img src="<?php echo base_url();?>assets/images/bg8.jpg" alt="Third slide">
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/images/bg5.jpg" alt="Third slide">
            </div>
            <div class="item active">
                <img src="<?php echo base_url();?>assets/images/bg4.jpg" alt="Third slide">
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/images/bg7.jpg" alt="Third slide">
            </div>
            
        </div>
        <a class="left carousel-control" href="#themeSlider" data-slide="prev">
            <span class="fa fa-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#themeSlider" data-slide="next">
            <span class="fa fa-chevron-right"></span>
        </a>

        <div class="main-text">
            <div class="col-md-12 text-center">
                <div class="main-left-reg">
                    <!--main-left-reg start-->
                    <h2>Register Free</h2>
                    <div class="clear"></div>
                         <form name="register" id="register" method="post"  onsubmit="return validate();" action="<?php echo base_url('matrimony/add')?>">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="profile">Profile created by <span>*</span>    </label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <select name="profile"  id="profile" class="form-control input-sm">
                                        <option value="">Select</option> 
                                        <option value="Self">Self</option>
                                        <option value="Parents">Parents</option>
                                        <option value="Guardian">Guardian</option>
                                        <option value="Son">Son</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Relatives">Relatives</option>                                      
                                    </select>
                                    <font color="#FF0000"><?php echo form_error('profile');?></font>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="reference">Reference by<span>*</span>    </label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <select name="reference" id="reference" class="form-control input-sm"> 
                                        <option value="">Select</option> 
                                        <option value="Advertisements">Advertisements</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Sanghams">Sanghams</option>
                                        <option value="SearchEngine"> Search Engine</option>
                                        <option value="Others">Others</option>                                      
                                    </select>
                                    <font color="#FF0000"><?php echo form_error('reference');?></font>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="name">SurName <span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <input type="text" name="surname" id="surname" class="form-control input-sm" placeholder="Ex:Padmashali">
                                      <font color="#FF0000"><?php echo form_error('surname');?></font>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="firstname">First Name <span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="Ex:Laxmi">
                                    <font color="#FF0000"><?php echo form_error('firstname');?></font>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="Last name">Last Name </label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="">
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="gender">Gender<span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <label for="gender">
                                    <input type="radio" value="Male" name="gender" > Male
                                    </label>&nbsp;
                                    <label for="genderfemale">
                                    <input type="radio" value="Female" name="gender"> Female
                                    </label>
                                    <font color="#FF0000"><?php echo form_error('gender');?></font>                            
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                            <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                <label for="maritalstatus">Marital Status</label>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 no-padding1">
                                <label><input type="radio" name="maritalstatus" value="NeverMarried"> Never Married</label>&nbsp;
                                <label><input type="radio" name="maritalstatus" value="Widow"> Widow</label>&nbsp;      
                                <label><input type="radio" name="maritalstatus" value="Divorced"> Divorced</label>&nbsp;
                                <label><input type="radio" name="maritalstatus" value="Separated"> orange</label>&nbsp;                                            
                            </div>
                            </div>    
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 box no-padding  childern "style="display:none">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                            <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                <label for="nofchild">No.of Children <span>*</span></label>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-6">
                                <select name="nofchild" id="nofchild" class="form-control input-sm">
                                <option value="">--select--</option>                                 
                                <option value="None">None</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding child">
                            <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                <label for="LivingStatus">Children Living Status </label>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 no-padding">
                                <label><input type="radio" name="Living" value="ChildrenLiving">Children Living </label>&nbsp;
                                <label>
                                <input type="radio" name="Living" value="ChildrenNotLiving"> Not Living with me</label> &nbsp;
                            </div>
                            </div>
                            </div>
                            
                            
                                    
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="name">DateOfBirth <span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                               <!-- <div class="input-group date ui-datepicker">-->
                                    <input type="text" id="dob" name="dob" class="form-control input-sm" data-required="true">
                                  <!--  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>   -->
                                    <!--<input type="text" name="dob" id="dob" class="form-control input-sm">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>-->
                                     <font color="#FF0000"><?php echo form_error('dob');?></font>
                                </div>
                            </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="mothertongue">Mother Tongue <span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <select name="mothertongue"  id="mothertongue" class="wdth197 form-control input-sm" tabindex="23">
                                        <option value="">Please Select Mothertongue</option>
                                        <?php if(isset($mothertongues)){
                                            foreach($mothertongues  as  $value){?>
                                        <option value="<?php echo $value->L_Id;?>"><?php echo $value->Language_Name;?></option>     
                                        <?php }}?>
                                    </select>
                                     <font color="#FF0000"><?php echo form_error('mothertongue');?></font>
                                </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="nationality">Nationality <span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <select name="nationality"  id="nationality" class="form-control input-sm">
                                     <option value="">Please select</option>
                                    <?php 
                                    if(isset($nationality)){
                                        foreach($nationality as $nationalities){?>
                                         <option value="<?php echo $nationalities->id;?>"><?php echo $nationalities->name;?></option>   
                                        <?php }
                                    }?>
                                </select>
                                    <font color="#FF0000"><?php echo form_error('nationality');?></font>
                                </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="name">Mobile Number<span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                <select name="phcode"  id="phcode" class="form-control input-sm">
                                    <option value="">Please select</option>
                                    <?php  if(isset($nationality)){
                                        foreach($nationality as $nationalities){?>
                                         <option value="<?php echo $nationalities->id."_+".$nationalities->phonecode;?>"><?php echo $nationalities->name ."(+".$nationalities->phonecode.")";?></option>   
                                        <?php }
                                    }?>
                                </select>
                               
                                    <input type="text" name="mobile" id="mobile"  onchange="checkmobile();" class="form-control input-sm" placeholder="Ex:9999999999">
                                    <span id="mobile_error" style="display:none;color:red">Mobile Number already exists</span>
                                    <font color="#FF0000"><?php echo form_error('mobile');?></font>
                                </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <label for="name">Email Id <span>*</span></label>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                    <input type="email" name="email" id="email" onchange="checkemail();" class="form-control input-sm" placeholder="Ex:abcd@gmail.com">
                                    <span id="email_error" style="display:none;color:red">email already exists</span>
                                    <font color="#FF0000"><?php echo form_error('email');?></font>
                                </div>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div id = "mobileshow" style="display:none">
                                    <div class="col-md-5 col-sm-5 col-xs-6 no-padding">
                                    <input type="checkbox" name="mobileverification" id="mobileverification" value="1" tabindex="63">
                                    
                                    <label>Mobile Verification</label>
                                    </div>
                                     <div class="col-md-7 col-sm-7 col-xs-6">
                                    <input type="text" name="otp" id="otp" style="display:none" class="form-control input-sm" placeholder="otp">
                                    <span id="otp_error" style="display:none;color:red">Please enter valid otp</span>
                                    <font color="#FF0000"><?php echo form_error('otp');?></font>
                                    <input type="hidden" name="otphidden" id="otphidden" value="" style="" class="form-control input-sm" placeholder="otp">
                                </div>
                                    </div>
                                <div class="col-md-8 no-padding">
                                    <input type="checkbox" name="terms" id="terms" value="1" tabindex="63">
                                    <label><a href="3" style="color:#060;" target="_new">I Accept The Terms &amp; Conditions</a></label>
                                    </div>
                                <div class="col-md-4">
                                <button class="btn btn-danger pull-right" type="submit" name="submit" id="submit">Register Free</button>
                                </div>
                                </div>
                        </form>
                        <div class="clear"></div>
                                            
                </div>
            </div>
        </div>    
    </div>
    <div class="clear"> </div>    
        <div class="pm-main">
        <div class="profile_search">
            <div class="container wrap_1">
            <h2>Search for Perfect Match</h2>
            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fa fa-heart pink-heart"></i>
                <i class="fa fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
              <form action="">
                <div class="search_top">
                <div class="col-md-12 no-padding">                
                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12 pd-right">
                    <div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12 pd-left rd-top">                        
                    <input type="radio" name="gender" value="Male">&nbsp; Male &nbsp;
                    <input type="radio" name="gender" value="FeMale">&nbsp; Female
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-12 no-padding">
                      <label class="">Age </label>
                    </div>
                    <div class="col-md-7 col-sm-11 col-xs-11 no-padding">                        
                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding">                        
                            <label class="label-left">From </label>
                            <select class="select-text label-left2" name="age_from">
                                <option value="18">--select--</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 pd-left">                        
                            <label class="label-left3">To </label>
                            <select class="select-text label-left2" name="age_from">
                                <option value="18">--select--</option>
                                
                            </select>
                        </div>
                    </div>
                </div>    
                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding tpd-left">
                    
                    <div class="col-md-1 col-sm-1 col-xs-12 no-padding">
                      <label class="">Height </label>
                    </div>
                    <div class="col-md-7 col-sm-11 col-xs-11 no-padding">                        
                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding">                        
                            <label class="label-left">&nbsp;&nbsp; From </label>
                            <select class="select-text label-left2" name="age_from">
                                <option value="18">--select--</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 pd-left">                        
                            <label class="label-left3">To </label>
                            <select class="select-text label-left2" name="age_from">
                                <option value="18">--select--</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-sm-12 col-xs-12">                        
                    <div class="submit">
                    <a href="#" class="hvr-shutter-out-horizontal">Find Matches</a>
                    </div>
                    </div>
                </div>            
                </div>
                <div class="form-group col-md-12 srch-prflid1">
                    <ul>
                        <li><a class="dropbtn" onclick="myFunction()" >Search by ID </a>

                          <div id="myDropdown" class="dropdown-content">
                            <P>Enter the Matrimony ID of the member whose profile you would like to see.</P>
                            <div class="form-group col-md-12 no-padding">
                            <div class="col-md-6 no-padding">
                                <input type="email" class="form-control input-sm" placeholder="Enter Profile ID">
                            </div>
                            <div class="col-md-6">
                                <div class="submit">
                                <a href="#" class="hvr-shutter-out-horizontal">VIEW PROFILE</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li><a>| </a></li>
                        <li><a href="#">More Search Options</a></li>
                    </ul>
                </div>
                </div>                                
             </form>
            </div>
  </div>
  </div>

    <div class="grid_1 success-storys">
        <div class="container">
            <h1>Success Stories</h1>
            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fa fa-heart pink-heart"></i>
                <i class="fa fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
            <div class="row">
                <div class="col-md-4 padding-space">
                    <article class="mini-post nomargin">
                        <a href="#" class="featured-img"><img class="img-responsive" src="<?php echo base_url();?>assets/images/img1.jpg" alt="Featured Image"></a>
                        <div class="article-body">
                            <a href="wedding_pics_sumanthsonal.html" title="Future Web Development"><h3>Krishna   +  Radha</h3></a>
                            <center><a href="wedding_pics_sumanthsonal.html" class="btn danger ">Explore</a></center>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 padding-space">
                    <article class="mini-post nomargin">
                        <a href="#" class="featured-img"><img class="img-responsive" src="<?php echo base_url();?>assets/images/img2.jpg" alt="Featured Image"></a>
                        <div class="article-body">
                            <a href="#" title="The Mean Stack Era"><h3>Ravi Kumar  +  Haritha</h3></a>
                            <center><a class="btn danger ">Explore</a></center>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 padding-space">
                    <article class="mini-post nomargin">
                        <a href="#" class="featured-img"><img class="img-responsive" src="<?php echo base_url();?>assets/images/img3.jpg" alt="Featured Image"></a>
                        <div class="article-body">            
                            <a href="#" title="The Mean Stack Era"><h3>Karteek  +  Meenakshi</h3></a>
                            <center><a class="btn danger ">Explore</a></center>
                        </div>
                    </article>
                </div>                                                            
            </div>
        </div>
    </div>
    <div class="fatured-profiles">
        <div class="container">
            <h1>Featured Profiles</h1>
            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fa fa-heart pink-heart"></i>
                <i class="fa fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
            <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul id="flexiselDemo3" class="nbs-flexisel-ul" style="left: -171px;">
                <li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                <img src="<?php echo base_url();?>assets/images/6.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                    <div class="center-middle">About Her</div>
                </div>
                <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li><li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                <img src="<?php echo base_url();?>assets/images/1.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Him</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li>
                <li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                    <img src="<?php echo base_url();?>assets/images/2.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Her</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li>
                <li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                    <img src="<?php echo base_url();?>assets/images/3.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Him</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li>
                <li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                <img src="<?php echo base_url();?>assets/images/4.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Her</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li>
                <li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                    <img src="<?php echo base_url();?>assets/images/5.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Him</div>
                    </div>
                    <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                 </li>
                <li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                <img src="<?php echo base_url();?>assets/images/6.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                    <div class="center-middle">About Her</div>
                </div>
                <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li>
            <li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                <img src="<?php echo base_url();?>assets/images/1.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Him</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li><li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                    <img src="<?php echo base_url();?>assets/images/2.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Her</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li><li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                    <img src="<?php echo base_url();?>assets/images/3.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Him</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li><li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                <img src="<?php echo base_url();?>assets/images/4.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Her</div>
                    </div>
                 <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                </li><li class="nbs-flexisel-item" style="width: 171px;"><div class="col_1"><a href="#">
                    <img src="<?php echo base_url();?>assets/images/5.jpg" alt="" class="hover-animation image-zoom-in img-responsive">
                    <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                        <div class="center-middle">About Him</div>
                    </div>
                    <h3><span class="m_3">Profile ID : MI-387412</span><br>28, Padhmashali, India<br>Corporate</h3></a></div>
                 </li></ul></div></div>
        </div>
    </div>
    <div class="agileinfo_bottom_section">

        <div class="snow-container two">
            <div class="snow foreground"></div>
            <div class="snow foreground layered"></div>
            <div class="snow middleground"></div>
            <div class="snow middleground layered"></div>
            <div class="snow background"></div>
            <div class="snow background layered"></div>
        </div>
        <div class="home-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-md-12 col-sm-12 col-xs-12 text-center">
                        <h1>We Make Your Dream Come Ture</h1>
                    </div>
                </div>
            </div>
        </div>
        
    </div>   
    <div class="clearfix"> </div>
    <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
    </div>
    <?php $this->load->view('template/footer.php')?>
    
         <!-- Javascripts
    ================================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- slider Javascripts -->
    <script type="text/javascript">
         $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay:false,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
    </script>

    <!-- header Javascripts -->
    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };
    </script>
    <!-- register  radio jQuery -->
  <script type="text/javascript">
        $(document).ready(function(){
           $('input[name="maritalstatus"]').click(function(){
                var inputValue = $(this).attr("value");
                
                if(inputValue=="Widow"||inputValue=="Divorced"||inputValue=="Separated"){
                    $('.childern').show();
                    
                }
                else{
                    $('.childern').hide();
                }
            });
            
             $('#nofchild').change(function(){
               var option = $(this).val();
               if(option=='None'){
                   $('.child').hide();
               }
               else{
                   $('.child').show();
               }
              
           }); 
            
        });
        </script>
    <!-- search profile dropdown jQuery -->
        <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        
        
        //check email for duplicate
        
            function checkemail()
            {
                var email = $('#email').val();
                url = "<?php echo base_url('matrimony/check_email')?>";   
            // ajax checking data in database
            $.ajax({
                url : url,
                type: "POST",
                data: {email:email},
                success: function(data)
                {   
                    var status = $.trim(data);
                    if(status == 'success') {  
                    //$('#email_error').show().fadeOut(5000);
                    alert("Email alredy exist")
                    $('#email').val('');
                  }
                }
            });
        }
        
        function checkmobile()
           {
                $('#mobileverification').prop('checked',false);
                $('#mobileverification').attr('disabled',false);
                var phcode = $('#phcode').val();
                var mobil = $('#mobile').val();
                var pcode =  phcode.split('+')[1];
                var mobile = "+"+pcode+"-"+mobil;
                if(mobile!=null && mobile!==""){
                    $('#mobileshow').show();
                }
                else{
                    
                    $('#mobileshow').hide();
                }
                url = "<?php echo base_url('matrimony/check_mobile')?>";   
            // ajax checking data in database
            $.ajax({
                url : url,
                type: "POST",
                data: {mobile:mobile},
                success: function(data)
                {   
                    var status = $.trim(data);
                    if(status == 'success') {  
                    alert("Mobilenumber alredy exist");
                    $('#mobile').val('');
                  }
                }
            });
        }

        $(document).on('click','#mobileverification',function(e){
        if(this.checked==true){
            var mobile = $('#mobile').val();
            if(mobile != null && mobile != ""){
                $.ajax({
                    url:"<?php echo base_url('matrimony/otpGenaration')?>",
                    type:"POST",
                    data:{mobile:mobile},
                    success:function(data){
                       if($.trim(data) != "fail"){
                        $('#otp').show();
                        $('#otphidden').val(data)
                        $('#mobileverification').attr("disabled","disabled");
                    }
                    }
                });
            }
            else{
                alert("Please enter mobilenumber");
            }
        }
    });
       $(document).on('change','#otp',function(){
            var mobile = $('#mobile').val();
            var otp = $('#otp').val();
            var otphidden = $('#otphidden').val();
              if($.trim(otp) === $.trim(otphidden) || otp.length === 0){
                  $('#otp_error').hide();  
                  $('#submit').attr("disabled",false);
              }
              else{
                  $('#otp_error').show();  
                  $('#submit').attr("disabled","disabled"); 
              }
              
    });
    $(document).on('change','#nationality',function(){
        var value = $('#nationality').val();
        $('#phcode option').each(function(){
          var text =  $(this).text();
          var option = $(this).val();
          var data = option.split('_');
           if(value === data[0]){
               $(this).prop('selected',true);
           }
        });
        
    });
                
</script>

    </body></html>
