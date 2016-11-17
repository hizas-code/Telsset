<!DOCTYPE html>
@extends('layouts/default')
<html>
<head>
    <meta charset="UTF-8">
    <title>Komplain</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css"  rel="stylesheet" media="screen"/>
    <link href="css/pages/editor.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>
<body class="skin-josh">

    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Komplain</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">Komplain</a>
                </li>
                <li class="active">Form Komplain</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <!--row starts-->
                <div class="col-lg-6">
                    <!--lg-6 starts-->
                    <!--basic form starts-->
                    <div class="panel panel-danger" id="hidepanel6">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Form Komplain
                            </h3>
                            <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control">
                                        <option>Barang Rusak</option>
                                        <option>Barang Hilang</option>
                                        <option>Barang kritis</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Barang</label>
                                    <select class="form-control">
                                        <option>Meja</option>
                                        <option>Kursi</option>
                                        <option>Proyektor</option>
                                        <option>Papan Tulis</option>
                                        <option>Kipas Angin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gedung</label>
                                    <select class="form-control">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ruangan</label>
                                    <select class="form-control">
                                        <option>A302B</option>
                                        <option>A301B</option>
                                        <option>A202A</option>
                                        <option>A202B</option>
                                        <option>A301A</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload Kondisi Asset</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img data-src="holder.js/100%x100%" alt="..."></div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."></span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Masukkan Keterangan Pengajuan"
                                              rows="5"></textarea>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-responsive btn-primary btn-sm">Komplain</button>
                                        <button type="reset" class="btn btn-responsive btn-default">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--main content ends--> </section>
        <!-- content --> </aside>
    <!-- right-side --> </div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--livicons-->
<script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
<script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
<script src="js/josh.js" type="text/javascript"></script>
<script src="js/metisMenu.js" type="text/javascript"></script>
<script src="vendors/holder-master/holder.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- Bootstrap WYSIHTML5 -->
<script  src="vendors/ckeditor/ckeditor.js" type="text/javascript"></script>
<script  src="vendors/ckeditor/adapters/jquery.js" type="text/javascript" ></script>
<script  src="vendors/tinymce/js/tinymce/tinymce.min.js" type="text/javascript" ></script>
<script  src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js" type="text/javascript"></script>
<script  src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js" type="text/javascript"></script>
<script  src="js/pages/editor.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>
</html>