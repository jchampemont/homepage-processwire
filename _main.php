<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>

    <!-- Bootstrap -->
    <link href="<?= $config->urls->templates?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= $config->urls->templates?>css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('_navbar.php'); ?>
    <div class="container">
      <div class="row">
        <?php echo $content; ?>
      </div>
    </div>

    <?=footer($page, $languages, $user);?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= $config->urls->templates?>js/bootstrap.min.js"></script>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["setDomains", ["*.www.jeanchampemont.com","*.jeanchampemont.com","*.jeanchampemont.com","*.www.jeanchampemont.com"]]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//analytics.jeanchampemont.com/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 3]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//analytics.jeanchampemont.com/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

  </body>
</html>
