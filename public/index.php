<?php include_once 'includes/header.php'; ?>
   
    <header>      
        <div class="row"> 
            <div class="d-flex col-lg-12 l-img justify-content-center align-items-center">
                <div class="row">
                    <div id="typed-strings">
                        <h1>Time to be more <strong class="text-primary">Perfeccionist.</strong></h1>
                        <h1>Time to be more <strong class="text-warning">Smarty.</strong></h1>
                        <h1>Time to be more <strong>BetaFront.</strong></h1>                    
                    </div>
                    <span id="typed" class="l-text"></span>  
                </div>
            </div>
        </div> 
    </header>
    
    <?php include_once 'includes/_gallery.php'; ?>
    <section>
          <div class="row">
               <div class="col-md-6 col-lg-4 blockb">
                    <div class="l-card shadow">
                        <img src="assets/img/1499793248facebook-haha.png" class="img-fluid" style="width: 100%;">
                        <h1 class="title">Amore </h1>    
                        <div>
                            
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </div>
                        <br>
                        <button class="btn btn-primary">Get This Course</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 blockb">
                    <div class="l-card shadow">
                        <img src="assets/img/107a75c6799e87b1061657c1c59a3da0.png" class="img-fluid" style="width: 100%;">
                        <h1 class="title">Mark </h1>    
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.

                        <br>
                        <br>
                        <button class="btn btn-primary">Get This Course</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 blockb">
                    <div class="l-card shadow">
                        <img src="assets/img/love-2651743_960_720.png" class="img-fluid">
                        <h1 class="title">Greisys</h1>    
                       <div> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div>

                        <br>
                        <br>
                        <button class="btn btn-primary">Get This Course</button>

                    </div>
                </div>
            </div>
        </div>

    </section>

    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="js/vendor/typed.js"></script>

    <script type="text/javascript">

        var typed = new Typed("#typed", {
            stringsElement: '#typed-strings',
            typeSpeed: 20,
            backSpeed: 20,
            backDelay: 500,
            loop: true,
        });
        
        $(document).ready(function(){
            
            $( ".searchbtn" ).click(function() {
              $( ".collaxbar" ).slideToggle("slow");
            });

            $(".card-img-top").click(function(){
                $(".card-body").slideToggle("slow");
            });
        });
    </script>

<?php include_once 'includes/_footer.php'; ?>