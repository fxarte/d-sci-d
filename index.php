<?php
if ($_POST) {
  $email="";
  $name="";
  $message="";
  if (isset($_POST['entry_353844444']) && array_key_exists('entry_353844444', $_POST)){
    $email=htmlspecialchars($_POST['entry_353844444'], ENT_QUOTES, 'UTF-8');
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $name=htmlspecialchars($_POST['entry_1701852911'], ENT_QUOTES, 'UTF-8');
      $message=htmlspecialchars($_POST['entry_1039808016'], ENT_QUOTES, 'UTF-8');
      $fp = fopen('d-sci-d_contacts.csv', 'a');
      fputcsv($fp, array($email, $name, $message));
      mail('fxarte@gmail.com,marliessd@gmail.com' , 'd-sci-d contact form submission' , $message );
      header("Location: http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
      exit();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- http://getbootstrap.com/examples/carousel/ -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" type="image/png" href="/d-sci-d/favicon.png" />
    <title>D-Sci-d Consulting</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
    <link href="css/docs.min.css" rel="stylesheet" />
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
  </head>

  <body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">D-Sci-d <span>Consulting</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="page-scroll" href="#team">Team</a></li>
            <li><a class="page-scroll" href="#about">About</a></li>
            <li><a class="page-scroll" href="#collaboration">Contact</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <header>
      <div class="header-content">
        <div class="header-content-inner">
          <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">D-Sci-d</span>
          <hr />
          <h2>Machine learning, NLP, Data engineer consulting</h2>
          <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
      </div>
    </header>

    <section class="team" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
            <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">Team</span><h2>Who are we</h2>
            <hr class="small" />
            <div class="row">
              <div class="col-xs-6">
                <a href="https://www.linkedin.com/in/marlies-santos-deas-b01b46b" class="team-box">
                  <img src="images/marlies_profile_1.jpg" class="img-responsive img-circle img-portrait" alt="" />
                  <div class="team-box-caption img-circle">
                    <div class="team-box-caption-content">
                      <div class="project-name">
                        Marlies Santos Deas
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xs-6">
                <a href="https://www.linkedin.com/in/felixarteagasilberstein" class="team-box">
                  <img src="images/felix.jpg" class="img-responsive img-circle img-portrait" alt="" />
                  <div class="team-box-caption img-circle">
                    <div class="team-box-caption-content">
                      <div class="project-name">
                        Felix A Silberstein
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">About</span><h2>What We Do</h2>
            <hr class="light" />
            <p class="text-faded">We are a consultancy team that ... advanced Natural Language Processing (NLP) and Machine Learning (ML) techniques. 
              We are use innovative technology to solve a wide range of enterprise problems that arise from big data.
              Our founders are experienced entrepreneurs with a diverse wide array of experiences which brings a unique and organic approach to our solutions.</p>
          </div>
        </div>
      </div>
    </section>

    <aside id="collaboration" class="bg-dark">
      <div class="container text-center">
        <div class="call-to-action">
          <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">Contact</span><h2>give us a shout</h2>
        </div>		
        <form action="" method="POST" id="ss-form" target="_self" onsubmit="">
          <div class="row">
            <div class="form-group col-xs-5 col-xs-offset-1">
              <label class="sr-only" for="entry.353844444">Email address</label>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input name="entry.353844444" id="entry.353844444" placeholder="Email" type="email" class="form-control" />
              </div>
            </div>
            <div class="form-group col-xs-5">
              <label class="sr-only" for="entry.1701852911">Name</label>
              <input name="entry.1701852911" id="entry.1701852911" placeholder="Name" type="text" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-10 col-xs-offset-1">
              <label class="sr-only" for="entry.1039808016">Message</label>
              <textarea name="entry.1039808016" id="entry.1039808016" placeholder="Message" class="form-control" rows="3"></textarea>
            </div>
          </div>
          <div class="row">
            <input class="btn btn-primary" type="submit" value="Submit" />
          </div>
        </form>
      </div>
    </aside>

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

  </body>

</html>
