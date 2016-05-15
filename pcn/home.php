<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Welcome - &lt;?php echo $userRow[ 'email']; ?&gt;</title>
    <link rel="stylesheet"
    href="style.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  <body>
    <div id="header">
      <div id="left">
        <label>Doc's cab</label>
      </div>
      <div id="right">
        <div id="content">Hello
          <!--?php echo $userRow[ 'username']; ?-->&nbsp;
          <a href="logout.php?logout">Sign out</a>
        </div>
      </div>
    </div>
    <div class="inf">Dear doctor
      <!--?php echo $userRow[ 'username']; ?-->, today's news are displayed next:</div>
    <div id="carousel-example" data-interval="false"
    class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner">
        <div class="item">
          <img src="2.jpg">
          <div class="carousel-caption">
            <h2>Scientists Say They're One Step Closer To An HIV Vaccine</h2>
          </div>
        </div>
        <div class="item active">
          <img src="3.jpg">
          <div class="carousel-caption">
            <h2>New technologies is about coming in our company</h2>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
  </body>

</html>