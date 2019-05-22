<!Doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Just Coast Site">

    <!-- CSS FILES -->
    <!-- Include Bootstrap File -->
    <link rel="stylesheet" href="<?=  base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Include Fontawesome Icons File -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/all.min.css">
    <!-- Include Owl Slider File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <!-- Include Animate File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/Animate.css') ?>">
    <!-- Include Style Css File -->
    <link rel="stylesheet" href="<?=  base_url('assets/css/style.css') ?>">
    <!-- Include @ Media [Full Responsive]  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

    <!-- Title Page -->
    <title>Just Coast - Home</title>
</head>

<body>


    <!-- =============== START PAGE WRAPPER OF CONTENT =============== -->
    <section class="page-wrapper">

        <!-- START SMALL SCREEN AREA -->
        <div class="nav-small">
            <div class="container">
                <div class="logo-small float-left" style="margin-left: -30px;">
                    <a href="#"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo" width="140"></a>
                </div><!-- End Logo -->
                <div class="menu-small float-rigt text-right">
                    <i class="fas fa-bars"></i>
                </div><!-- End Menu -->
                <div class="clearfix"></div>


            </div><!-- End Container -->
            <div class="drop-small">
                <div class="container">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fas fa-car fa-md fa-fw"></i> Cars</a></li>
                        <li><a href="#"><i class="fas fa-tv fa-md fa-fw"></i> Electronics</a></li>
                        <li><a href="#"><i class="fas fa-home fa-md fa-fw"></i> Miscellaneous</a></li>
                        <li><a href="post_ad.html"><i class="fas fa-edit fa-fw"></i> Post Ad</a></li>
                        <!-- trigger modal -->
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-search"></i> Search</a></li>
                        <li><a href="#"><i class="fas fa-language"></i> English</a></li>
                        <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-user-circle"></i> Login</a></li>
                    </ul>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Search</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="">
                                        <div class="form-group">
                                            <input type="search" class="form-control" placeholder="Search ..." name="">
                                        </div>
                                        <button type="submit" class="btn btn-primary register">search</button>
                                    </form>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>

                </div><!-- End Container -->
            </div><!-- End Drop Small -->
        </div>
        <!-- END SMALL SCREEN AREA -->

        <!-- START NAIGATION BAR -->
        <nav class="navbar navbar-expand-lg d-xl-block">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav one">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-car fa-md fa-fw"></i> Cars</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-tv fa-md fa-fw"></i> Electronics</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-home fa-md fa-fw"></i> Miscellaneous</a>
                        </li>

                        <li class="nav-item d-none search">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal"><i class="fas fa-search fa-md fa-fw"></i> Search</a>
                        </li>


                    </ul>
                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Search</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="">
                                        <div class="form-group">
                                            <input type="search" class="form-control" placeholder="Search ..." name="">
                                        </div>
                                        <button type="submit" class="btn btn-primary register">search</button>
                                    </form>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <form class="form-inline my-2 mx-5 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="What you are looking for ?" aria-label="Search" dir="auto">
                        <span>Abu Dhabi sd</span>
                        <button class="btn btn-outline-success my-sm-0" type="submit">Search</button>
                    </form>

                    <!-- Buuton To Post Advertiesment -->
                    <button class="post" type="button my-lg-0"><a href="post_ad.html">Post Ad</a></button>

                    <!-- Navbar Right -->
                    <ul class="navbar-nav right">
                        <li class="nav-item d-none search">
                            <a class="nav-link" href="post_ad.php"><i class="fas fa-edit fa-fw"></i> Post Ad</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell fa-lg fa-fw"></i>
                                <span class="alerts">17</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    Ahmed Salah comment
                                    <small>5 seconds ago</small>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    Ahmed Salah review in your ad
                                    <small>5 seconds ago</small>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    Hamza Alhamedi like your add
                                    <small>55 seconds ago</small>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    Folan comment in your ad
                                    <small>1 minute ago</small>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    Elan like your ad
                                    <small>12 minute ago</small>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url() ?>assets/images/emirian-flag-medium.gif" alt="Flag Image" width="30">
                                <span class="mx-1">uae</span>
                                <i class="fas fa-chevron-down fa-sm fa-fw"></i>
                            </a>
                            <div class="dropdown-menu country text-uppercase" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">usa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">usa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">uae</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">English</a>
                        </li>

                        <li class="nav-item">
                            <?php if ($this->session->userdata('username')==""){?>
                            <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-user-circle fa-md fa-fw"></i> Login</a>
                            <?php } else{?>
                                <a class="nav-link" href="<?php echo base_url('login/logout') ?>" <i class="fas fa-user-circle fa-md fa-fw"></i> Logout</a>
                            <?php }?>
                            </li>
                    </ul>

                </div>
            </div><!-- End Container -->
        </nav>
        <!-- END NAIGATION BAR -->

        <!-- Start Modal Login -->
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="brand-logo text-center">
                        <img src="<?php echo base_url() ?>assets/images/logo.png" alt="Just Coast Logo" width="250">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-sm-12">
                            <div class="panel-modal">
                                <ul class="nav nav-tabs row" id="myTab" role="tablist">
                                    <li class="nav-item col-sm-6">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                                    </li>
                                    <li class="nav-item col-sm-6">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <form action="" method="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                            </div>
                                            <div id="error" style=color:#FF0000></div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="box form-check-input" id="box1">
                                                <label for="box1" class="login form-check-label">Remember me</label>
                                            </div>
                                            
                                            <button type="submit" id="mlogin" class="btn btn-primary">Login</button>
                                             </br>
                                            
                                            <button type="submit"  data-dismiss="modal" class="btn btn-primary">Close</button>
                                             
                                        </form>

                                        <div class="password">
                                            <a href="#">I’m forget my password</a>
                                            <p>I don’t have account <a href="<?php echo base_url()?>register">Create new</a></p>
                                        </div><!-- End Password-->
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <form action="" method="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Username" name="">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="E-mail" name="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" name="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Re-Password" name="">
                                            </div>
                                            <button type="submit" class="btn btn-primary register">Register</button>
                                        </form>

                                        <div class="password">
                                            <a href="#">I’m forget my password</a>
                                        </div><!-- End Password-->
                                    </div>
                                </div>
                            </div>

                            <!-- Start About us -->
                            <div class="about-us text-center">
                                <a href="#">About us | <a href="#"> <i class="fas fa-comment fa-md fa-fw"></i> get help</a></a>
                                <p>Copyright &copy; 2019 , All rights reserved.</p>
                                <a href="#" class="privacy">Privacy <span>|</span> Terms of services</a>
                            </div>
                            <!-- End About us -->
                        </div><!-- End Col #1 -->
                        <div class="col-xl-6 col-sm-12">
                            <div class="image-modal d-lg-block">
                                <img src="<?php echo base_url() ?>assets/images/modal.png" alt="Image" width="350">
                            </div>
                        </div><!-- End Col #2 -->
                    </div><!-- End Row -->
                </div>
            </div>
        </div>
        <!-- End Modal Login -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#mlogin").click(function(event){
                    event.preventDefault();
                    var username = $("#username").val();
                    var password = $("#password").val();
                    
                
                    jQuery.ajax({
                        type:"POST",
                        url:"<?php echo base_url() ?>"+"login/memberlogin",
                        datatype:'json',
                        data:{'<?php echo $this->security->get_csrf_token_name()?>':'<?php echo $this->security->get_csrf_hash()?>',username:username,password:password},
                        success: function(res){
                            if(res=="success"){
                                window.location.href="http://localhost/just-cost-website/";
                            }else if (res=="faild"){
                                $("#error").html("wrong username or password compination try again!");

                            }else if (res=="blank"){
                                $("#error").html("all fields are required!");
                            }
                            }
                    });
                        
                    });
                });
           
        </script>