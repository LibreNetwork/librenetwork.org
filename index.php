<?php
include("header.php");
?>

  <body role="document">

<?php
include("navbar.php");
?>


    <div class="container theme-showcase" role="main">

      <div class="jumbotron">
          <h1>The Internet Belongs to Everyone.</h1>
          <p>LibreNetwork is a community building mesh networks, defending digital rights, and reclaiming the open internet &mdash; together.</p>
          <p>
            <a href="manifesto.php" class="btn btn-primary btn-lg" role="button">Read Our Manifesto</a>
            &nbsp;
            <a href="getinvolved.php" class="btn btn-default btn-lg" role="button">Get Involved</a>
          </p>
      </div>

      <div class="row">
        <div class="col-md-4">
          <h3><span class="glyphicon glyphicon-signal"></span> Mesh Networks</h3>
          <p>We build community-owned network infrastructure that routes around censorship, outages, and expensive ISPs. Your neighborhood. Your network.</p>
        </div>
        <div class="col-md-4">
          <h3><span class="glyphicon glyphicon-lock"></span> Digital Rights</h3>
          <p>We advocate for the right to communicate privately, access information freely, and use software without corporate gatekeepers deciding what you can do.</p>
        </div>
        <div class="col-md-4">
          <h3><span class="glyphicon glyphicon-open-file"></span> Open Source</h3>
          <p>Everything we build is open. Software you can't read is software you can't trust. Inspect it, improve it, deploy it &mdash; no permission needed.</p>
        </div>
      </div>

      <div class="how-it-works">
        <h2>How It Works</h2>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="step-box">
              <span class="glyphicon glyphicon-user"></span>
              <h4>Join</h4>
              <p>Get on the mailing list, introduce yourself, and connect with people in your area.</p>
            </div>
          </div>
          <div class="col-md-1 hidden-sm hidden-xs">
            <div class="step-arrow">&rsaquo;</div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="step-box">
              <span class="glyphicon glyphicon-wrench"></span>
              <h4>Build</h4>
              <p>Set up mesh nodes in your community using open hardware and open firmware.</p>
            </div>
          </div>
          <div class="col-md-1 hidden-sm hidden-xs">
            <div class="step-arrow">&rsaquo;</div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="step-box">
              <span class="glyphicon glyphicon-bullhorn"></span>
              <h4>Advocate</h4>
              <p>Educate your neighbors, contribute code, and help grow the libre internet.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="section-alt">
        <h2>Ready to Get Started?</h2>
        <p>You don't need to be an engineer. You need to care about what the internet could be &mdash; and be willing to help build it.</p>
        <a href="getinvolved.php" class="btn btn-primary btn-lg" role="button">Get Involved</a>
        &nbsp;
        <a href="manifesto.php" class="btn btn-default btn-lg" role="button">Read the Manifesto</a>
      </div>

    </div> <!-- /container -->

<?php
include("footer.php");
?>
