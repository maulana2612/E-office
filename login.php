<?php 
        $this->load->helper('url');
        $this->load->helper('form');
echo form_open('akses/proses_login') ; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!--meta http-equiv="refresh" content="10"-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Office Tulunggagung</title>

    <!-- GLOBAL STYLES -->
    <link href="<?php echo base_url() ?>asset/css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='<?php echo base_url() ?>asset/http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url() ?>asset/http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>asset/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->

    <!-- THEME STYLES -->
    <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES -->
    <link href="<?php echo base_url() ?>asset/css/demo.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-banner text-center">
                    <h1><i class="fa fa-envelope"></i> E-Office Kabupaten Tulungagung</h1>
                </div>
                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title" align="center">
                            <h4><i class></i><strong>Silahkan login untuk mengelola data administrasi anda</strong>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                    
                        <!--form accept-charset="UTF-8" role="form"-->
                        
                            
                            
                                <div class="form-group">
                                    <input class="form-control" placeholder="Masukan E-mail" name="user_name" type="text" required = "required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password"  type="password" required = "required">
                                </div>

                                <br>

                                <button type="submit" value="login" class="btn btn-primary">Submit</button>


                                <?php
                                    if (isset($pesan)) {
                                        echo $pesan;
                                        
                                    }
                                ?>
                       

                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
                                <?php echo form_close(); ?>

    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url() ?>asset/http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- HISRC Retina Images -->
    <script src="<?php echo base_url() ?>asset/js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/js/flex.js"></script>

</body>

</html>
