<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$r_u_a_comecandela="";
if ($_POST) {
  $text="";
  if (isset($_POST['entry_1039808016']) && array_key_exists('entry_1039808016', $_POST)){
    $text=htmlspecialchars($_POST['entry_1039808016'], ENT_QUOTES, 'UTF-8');
    // Running a Python script from PHP; see http://stackoverflow.com/a/19736494/1599129
    $python='python';
    $script = '/home4/intelno1/python/apps/predictors/comecandela/predict.py "'.$text.'"';
    $out = exec($script, $output);
    // print($script);
    // print_r($out);
    // var_dump($output[0]);
    $r_u_a_comecandela = $output[0]=="1"?'comecandela':'no-comecandela';
    // exit();
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
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title>D-Sci-D Consulting - Escribes como un commencandela</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
    <link href="../css/docs.min.css" rel="stylesheet" />
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-80135444-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>

  <body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand page-scroll" href="../">D-Sci-d <span>Consulting</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <aside id="collaboration" class="bg-dark">
      <div class="container text-center">
<?php 
        $info_class="bs-callout";
        $message="";
        if (strlen($r_u_a_comecandela)>0) {
            if ($r_u_a_comecandela =='comecandela') {
                $info_class .=" bs-callout-danger";
                $message="Hmm... se te paso la mano con la muela.<br /> Más de lo mismo y me pones en <a href='https://es.wikipedia.org/wiki/Stand_by' target='_blank'>'eslip mod'</a>";    }
            else{
                $info_class .= " bs-callout-info";
                $message="Luce interesante, que mas has escrito?.";
            }
?>
        <div class="row">
            <div class="<?php print($info_class)?>"><h4><?php print($message)?><h4></div>
        </div>
        <?php } ?>
        <div class="call-to-action">
          <?php if (!isset($r_u_a_comecandela) || !$r_u_a_comecandela): ?>
          <h2>Escribes como un commencandela?</h2><hr />
          <?php else:?>
          <h2>Tienes más de lo mismo?</h2><hr />
          <?php endif; ?>
        </div>		
        <form action="" method="POST" id="ss-form" target="_self" onsubmit="">
          <div class="row">
            <div class="form-group col-xs-10 col-xs-offset-1">
              <label class="sr-only" for="entry.1039808016">text</label>
              <div>Una oracion quizas sea muy poco texto, un pequeno parrafo debe ser suficiente, </div><br />
              <textarea name="entry.1039808016" id="entry-1039808016" placeholder="Document" class="form-control" rows="3"></textarea>
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
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/jquery.fittext.js"></script>
    <script src="../js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/creative.js"></script>

  </body>

</html>
