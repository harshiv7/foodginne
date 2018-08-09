<!DOCTYPE html>
<html lang="en">


<?php include("head.php");?>

<body class="fixed-sn mdb-skin">

    <!-- Double navigation -->
    <?php include("../header.php");?>
    <!--/ Double navigation -->

    <!-- Main layout -->
    <main>
        <div class="container">
            
            <!-- Magazine -->
            <div class="row">
                <!-- Main news --> 
                <div class="col-md-8">
                   
                    <!-- Section: About author -->
                    <section class="mb-3 wow fadeIn" data-wow-delay="0.3s">
                       
                        <!--Author box-->
                        <div class="author-box">
                            <div class="row">
                                <!-- Author Data -->
                                <div class="col-10">
                                  <!--Leave a reply form-->
                                        <div class="reply-form">
                                            <h1 class="section-heading">Add Post</h1>
                                            <div class="md-form">
                                                <i class="fa fa-user prefix"></i>
                                                <input type="text" id="form22" class="form-control">
                                                <label for="form22">Your name</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="text" id="form32" class="form-control">
                                                <label for="form32">Your email</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fa fa-home prefix"></i>
                                                <input type="text" id="form33" class="form-control">
                                                <label for="form33">Your website</label>
                                            </div>
  
                                            <div class="md-form">
                                                <i class="fa fa-home prefix"></i>
                                                <input type="text" id="form33" class="form-control">
                                                <label for="form33">Your website</label>
                                            </div>


                                            <div class="text-center">
                                                <button class="btn btn-mdb">Submit</button>
                                            </div>
                                        </div>
                                        <!--/.Leave a reply form-->
                                </div>

                            </div>
                        </div>
                        <!--/ Author box -->
                        
                    </section>
                    <!--/ Section: About author -->


                </div>
                <!--/ Main news -->
                
            </div>
            <!--/ Magazine -->
            
        </div>
    </main>
    <!--/ Main layout -->

    <!-- Footer -->
        <?php include("../footer.php");?>
    <!--/ Foter -->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="../js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <script>
        // SideNav init
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

    <script>
        // Animation init
        new WOW().init();
    </script>
    
    <script>
        //Modal contact init
        $('#modal-contact').on('shown.bs.modal', function () {
          $('#myInput').focus()
        })
    </script>

</body>
</html>