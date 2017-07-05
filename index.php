<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="font_awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  <style media="screen">

      <?php include_once 'css/informatics.css'; ?>
      <?php include_once 'css/frontawesome.css'; ?>

  @media screen and (min-width: 0px) and (max-width: 576px) {
  .hide-on-small { display: none;}
  }
  @media screen and (min-width: 577px) {
  .swarp-on-small {display: none;}
  }
  </style>

  </head>
  <body>
    <div class="container-fluid ">

      <?php include_once 'header.html'; ?>
      <span class="hide-on-small"><?php include_once 'social-media.html'; ?></span>

      <?php include_once 'navbar.html' ;?>

      <?php include_once 'mainimage.html'; ?>

    <?php include_once 'content-info.html'; ?>

   <div class="content-session-1">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <h5 style="margin-left:5px;color:#766C93;">NEW & ACTIVITY</h5>
            <?php include_once 'carousel.html'; ?>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-12">
            <h5 style="margin-left:5px; color:#766C93;">SPU NEWS</h5>
            <?php include_once 'medialist.html'; ?>
          </div>
        </div>
      </div>

    <?php include_once 'content-session-2.html'; ?>
    <br>
    <?php include_once 'content-session-3.html'; ?>
    <?php include_once 'content-session-4.html'; ?>

    <br>

  </div>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/595795e5e9c6d324a4738479/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();

    </script>


   <!--End of Tawk.to Script-->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>
