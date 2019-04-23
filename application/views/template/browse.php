<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<body style="background-image: linear-gradient(to right, #111111, #0B0B0E)">;
<div class="container" style = "border-color: #353535" width = "100%">
    <br/>
	<div class="row justify-content-center" width = "100%">
                        <div class="col-12 col-md-10 col-lg-8" >
                            <form class="card card-sm" style = "border-color: #353535" width = "100%">
                                <div class="card-body row no-gutters align-items-center" style ="background-image : linear-gradient(to right, #353535, #353535); border-color: #353535" >
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    
                                    <div class="input-group-append" name="keyword"  href="<?= base_url(); ?>Browse">
                                        <form action="index.php" method="post" name="keyword">
                                        <input name ="keyword" class="form-control form-control-lg form-control-borderless" type="text" placeholder="Start Typing" style ="background-image :linear-gradient(to right, #353535, #353535); border-color: #353535">
                                        
                                         
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
</body>