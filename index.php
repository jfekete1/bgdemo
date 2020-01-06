<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
  <head>
    <title>Basic - Zalaszám</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../dist/img/favicon.ico">
    <!-- iPad retina icon -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../dist/img/apple-touch-icon-precomposed-152.png">
    <!-- iPad retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../dist/img/apple-touch-icon-precomposed-144.png">
    <!-- iPad non-retina icon -->
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../dist/img/apple-touch-icon-precomposed-76.png">
    <!-- iPad non-retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../dist/img/apple-touch-icon-precomposed-72.png">
    <!-- iPhone 6 Plus icon -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../dist/img/apple-touch-icon-precomposed-180.png">
    <!-- iPhone retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../dist/img/apple-touch-icon-precomposed-114.png">
    <!-- iPhone non-retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../dist/img/apple-touch-icon-precomposed-57.png">
    <link href="../dist/css/patternfly.min.css" rel="stylesheet" media="screen, print">
    <link href="../dist/css/patternfly-additions.min.css" rel="stylesheet" media="screen, print">
    <script src="../components/jquery/dist/jquery.min.js"></script>
    <script src="../components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../components/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../dist/js/patternfly.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-pf" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img src="../dist/img/brand.svg" alt="PatternFly Enterprise Application" />
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-collapse-1">
        <ul class="nav navbar-nav navbar-utility">
          <li>
            <a href="#">Status</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-primary">
          <li class="active">
            <a href="basic.html" class="active">Basic</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Basic</li>
          </ol>
          <h1>Welcome to an OpenShift Application!</h1>
          <p>The purpose of this application is to demonstrate several interesting features about OpenShift. We hope you enjoy it!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Application Information</h2>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Env Var</th>
                <th>Value</th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td>Pod IP</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
              </tr>
              <tr>
                <td>Pod Port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <h2>Application Example</h2>
          <p>
            <svg height="200" width="250">
                    <path class="my-shape" fill="#0b3269" d="M56 96 C 120 20, 226 20, 216 64" />
                    <path class="my-shape" fill="#0b3269" d="M32 126 C -8 216, 186 196, 216 64" />
                    <path class="my-shape" fill="#0b3269" d="M124 80 L216 64 L124 108 Z" />
                    
                    <path class="my-shape" fill="white" stroke="#0b3269" d="M56 96 C 100 56, 136 80, 124 92" />
                    <path class="my-shape" fill="white" stroke="#0b3269" d="M32 126 C 24 166, 116 136, 124 92" />
                    <text class="my-shape" x="42" y="122" font-size="26" fill="#0b3269">ZALA</text>
                    <text class="my-shape" x="116" y="122" font-size="26" fill="white">SZÁM</text>
                    Sorry, your browser does not support inline SVG.
            </svg>
          </p>
        </div>
      </div>
        </div><!-- /col -->
      </div><!-- /row -->
    </div><!-- /container -->
    <script>
      // Initialize Datatables
      $(document).ready( function() {
        $('.datatable').dataTable();
      });
    </script>
  </body>
</html>
