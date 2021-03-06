<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="main.js"></script>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
    

    </script>

</head>

<body>
    <!--this is the navigation bar -->
    <div class="container">
        <nav class="navbar navbar-dark fixed-top navbar-expand-md bg-dark">
            <button type="button" class="nav-toggler" data-toggle="collapse" data-target="#myNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="myNav" class="collapse navbar-collapse">
                <div class="h3 text-primary ml-5">Eshiwani Security Systems(ESS)</div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link h6">Home</a></li>
                    <li class="nav-item"><a href="#about_us" class="nav-link h6">About Us </a></li>
                    <li class="nav-item"><a href="Registration.php" class="nav-link h6">Registration</a></li>
                    <li class="nav-item"><a href="#lappiz" class="nav-link h6">Laptops</a></li>
                    <li class="nav-item"><a href="#mamemoz" class="nav-link h6">Memos </a></li>
                    <li class="nav-item"><a href="#magariz" class="nav-link h6">Vehicles</a></li>
                    <li class="nav-item"><a href="#mangoz" class="nav-link h6">Mobile</a></li>
                    <li class="nav-item"><a href="#patnerz" class="nav-link h6">Patners </a></li>
                    <li class="nav-item"><a href="#contactz" class="nav-link h6">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </div>


    <!--this is the carousel-->
    <div id="john" class="carousel slide" data-ride="carousel">

        <!--slideshow-->
        <div class="carousel-inner fluid sizing">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/team.jpg" alt="First slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="img/startup.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/dame.png" alt="Third slide">
            </div>
        </div>
    </div><br />

    <!--this is the welcome note-->
    <div class="text-center">
        <p class="h5"><b>
                <marquee>Welcome to ESS where we NEVER take security for granted!!</marquee>
            </b></p>
    </div><br />


    <!-- laptop forms-->
    <div class="row">
        <div class="col jumbotron" id="lappiz">
            <h4 class="text-center"><u> LAPTOPS SECTION</u></h4><br />
            <!--this code is for students display data-->
            <form method="POST" action="display_php/student_display.php" onsubmit="return substitute1 ()">
                <label for="">Student's Name:</label>
                <input type="text" name="studentdisplay" id="mytextbox1" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>

            <!--this code is for displaying lecturers data-->
            <form method="POST" action="display_php/lecturer_display.php" onsubmit="return substitute2 ()">
                <label for="">Lecturer's Name:</label>
                <input type="text" name="lecturerdisplay" id="mytextbox2" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>

            <!--This code is for displaying staff data-->
            <form method="POST" action="display_php/staff_display.php" onsubmit="return substitute3 ()">
                <label for="">Staff Name:</label>
                <input type="text" name="staffdisplay" id="mytextbox3" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>

            <!--This code is for displaying visitors data-->
            <form method="POST" action="display_php/visitors_display.php" onsubmit="return substitute4 ()">
                <label for="">Visitor's Name:</label>
                <input type="text" name="visitorsdisplay" id="mytextbox4" placeholder="Enter Name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!--the memo section-->
        <div class="col" id="mamemoz">
            <h3 class="text-center"><u>STAFF MEMO</u></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga placeat dolorum nihil
                aspernatur.Similique esse, veniam nobis iure voluptas ut nostrum? Commodi impedit perferendis dolores
                deleniti
                corporis accusamus sed id? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                temporibus explicabo necessitatibus obcaecati
                minus rerum placeat nam dolores? Doloremque tenetur repellat enim aliquam distinctio blanditiis fugit
                vitae assumenda quos vel.</p>
            <hr />
            <h3 class="text-center"><u>STUDENT MEMO</u></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga placeat dolorum nihil
                aspernatur.Similique esse, veniam nobis iure voluptas ut nostrum? Commodi impedit perferendis dolores
                deleniti
                corporis accusamus sed id? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                temporibus explicabo necessitatibus obcaecati
                minus rerum placeat nam dolores? Doloremque tenetur repellat enim aliquam distinctio blanditiis fugit
                vitae assumenda quos vel.</p>
        </div>
    </div>

    <!--this section displays the users of the system-->
    <div class='row bg-primary text-white jumbotron text-center users'>
        <div class='col h5'>Users 450k+</div>
        <div class='col h5'>Countries 94+</div>
        <div class='col h5'>7 Continets</div>
    </div><br />

    <!--this is the vehicle display form-->
    <div class="row"  id="magariz">
        <div class="col jumbotron">
            <h4 class="text-center"><u> VEHICLES SECTION</u></h4><br />
            <!--this code is for students display data-->
            <form method="POST" action="display_php/vehicle_display.php" onsubmit="return jojo5()">
                <label for="">Name:</label>
                <input type="text" name="vehicledisplay" id="box5" placeholder="Enter client's name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!--this is the vehicle display form-->
        <div class="col jumbotron ml-1" id="mangoz">
            <h4 class="text-center"><u> MOBILE SECTION</u></h4><br />
            <!--this code is for students display data-->
            <form method="POST" action="display_php/mobile_display.php" onsubmit="return yoyo6()">
                <label for="">Name:</label>
                <input type="text" name="mobiledisplay" id="box6" placeholder="Enter client's name"> <br />
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!--this section describes the other services the company also offers-->
    <div class="h4 text-center ">Our Main Services</div>
    <div class="row">
        <div class="col card bajie">
            <div class="card-header bg-success">Security</div>
            <div class="card-body">
                <img class="card-img-top img-fluid" src=img/background.jpg> <br />
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                    aperiam eum,
                    consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                    incidunt optio
                    quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
            </div>
            <div class="card-footer bg-success">Footer</div><br />
        </div>

        <div class="col card bajie">
            <div class="card-header bg-success">Trainning</div>
            <div class="card-body">
                <img class="card-img-top img-fluid" src=img/girl.jpg> <br />
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                    aperiam eum,
                    consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                    incidunt optio
                    quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
            </div>
            <div class="card-footer bg-success">Footer</div><br />
        </div>

        <div class="col card bajie">
            <div class="card-header bg-success">Charity</div>
            <div class="card-body">
                <img class="card-img-top img-fluid" src=img/Baby.jpg> <br />
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
                    aperiam eum,
                    consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
                    incidunt optio
                    quibusdam doloribus sapiente! Quisquam, quibusdam.</p>
            </div>
            <div class="card-footer bg-success">Footer</div><br />
        </div>
    </div><br />

    <!--this is the patners section-->
    <div id="patnerz">
        <p class="h5 text-center">Our Happy Patners</p>
        <div class=" row ">
            <div class="col ml-4"><img src="img/pine.jpg" alt="No pic for you!">
                <p class="text-center"><br /><b>Tenri University</b> in Japan uses
                    ESS systems for their security.They offer variety of acaddemics and social programmes which are
                    marketable and affordable.</p>

            </div>

            <div class="col"><img src="img/handcuffs.jpg" alt="No pic for you!">
                <p class="text-center"><br /><b>Department of Corrections and Logistics </b>in South
                    Africa uses ESS systems to secure their premises and machines. This ensure efficiency in their work
                    therefore resulting to
                    smooth workflow.
                </p>

            </div>
        </div>
    </div><br />

    <div class="jumbotron" id="about_us">
        <p class="h4"><u>About Us</u></p><br />
        <p>ESS is an ICT company which offers variety of security solutions. The company was founded by John Eshiwani in
            2008 in
            USA.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis autem dolor
            aperiam eum,
            consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
            incidunt optio
            quibusdam doloribus sapiente! Quisquam, quibusdam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Officiis autem dolor
            aperiam eum,
            consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
            incidunt optio
            quibusdam doloribus sapiente! Quisquam, quibusdam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Officiis autem dolor
            aperiam eum,
            consequuntur vero aspernaturnecessitatibus exercitationem cupiditate hic voluptas culpa, iure
            incidunt optio
            quibusdam doloribus sapiente! Quisquam, quibusdam.

        </p>
    </div>

    <hr style="width:100%;" />

    <!--this is the contacts section-->
    <div class="bg-dark text-white" id="contactz">
        <br />
        <div class="h4 ml-3 "><u>Contacts</u></div><br />
        <div class="row text-center">
            <div class="col">
                <h6><b class="text-primary">United States of America</b></h6>
                Newyork City<br />
                ESS Building<br />
                24th Street<br />
                Contact:0791989156<br />
                Email:www.essuasa.org
            </div>
            <div class="col">
                <h6><b class="text-primary">France</b></h6>
                Paris<br />
                Free Sate Building<br />
                14th Street<br />
                Contact:0721589156<br />
                Email:www.essfr.org
            </div>
            <div class="col">
                <h6><b class="text-primary">Japan</b></h6>
                Tokyo<br />
                Tenri University Building<br />
                54th Street<br />
                Contact:0721799156<br />
                Email:www.essjpn.org
            </div>
            <div class="col">
                <h6><b class="text-primary">South Africa</b></h6>
                Pretoria<br />
                I&M Building<br />
                74th Street<br />
                Contact:0721989156<br />
                Email:www.esssa.org
            </div>
            <div class="col">
                <h6><b class="text-primary">Qatar</b></h6>
                Newyork City<br />
                Al-Mouradi Building<br />
                27th Street<br />
                Contact:0721984556<br />
                Email:www.essqtr.org
            </div>
        </div><br />

        <!--this is the footer section-->
        <div class="row">
            <div class="col">
                <div class="text-center mb-2">
                    <a href="https://www.twitter.com/johnlihemo" title="twitter handle"><i
                            class="fa fa-twitter-square fa-3x"></i></a>
                    <a href="https://www.facebook.com/johnlukaku" title="facebook page"><i
                            class="fa fa-facebook-square fa-3x"></i></a>
                    <a href="https://www.instagram.com/johnlihemo" title="instagram account"><i
                            class="fa fa-instagram fa-3x"></i></a>
                    <a href="https://www.linkedin.com/johnlihemo" title="linkedin account"><i
                            class="fa fa-linkedin-square fa-3x"></i></a>
                    <a href="https://www.github.com/johnlihemo" title="github repo"><i
                            class="fa fa-github-square fa-3x"></i></a>
                </div>
            </div>
        </div><br />
    </div>

    <div class="footer-copyright text-center py-3 h6">Terms and Condition | Privacy Policy | &copy
        2019. ESS
    </div>

</body>

</html>