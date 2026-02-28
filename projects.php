<?php
$title = "Projects";
include("header.php");
?>

  <body role="document">

<?php
include("navbar.php");
?>


    <div class="container theme-showcase" role="main">

      <div class="page-header">
        <h1>Projects</h1>
      </div>

      <p class="lead">Everything LibreNetwork builds is open source, community-driven, and available for anyone to use, fork, or improve. Here's what we're working on.</p>

      <h2>Active Projects</h2>

      <div class="row">

        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-globe"></span>&nbsp; LibreNetwork Website</h3>
            </div>
            <div class="panel-body">
              <p>The website you're reading right now. Open source, PHP-based, and accepting contributions. If you spot an issue or want to add content, open a pull request on GitHub.</p>
              <a href="https://github.com/LibreNetwork/librenetwork.org" class="btn btn-default btn-sm" target="_blank">View on GitHub</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span>&nbsp; Community Forum</h3>
            </div>
            <div class="panel-body">
              <p>A community forum for LibreNetwork is in the works. In the meantime, GitHub Discussions is the place to connect, ask questions, and share ideas.</p>
              <a href="https://github.com/LibreNetwork/librenetwork.org/discussions" class="btn btn-default btn-sm" target="_blank">GitHub Discussions</a>
            </div>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-signal"></span>&nbsp; Community Mesh Nodes</h3>
            </div>
            <div class="panel-body">
              <p>Members of the LibreNetwork community run mesh network nodes in their areas. These local deployments are the core of what we do. Have a node? Tell us about it on GitHub.</p>
              <a href="https://github.com/LibreNetwork/librenetwork.org/discussions" class="btn btn-default btn-sm" target="_blank">Share on GitHub</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span>&nbsp; Documentation &amp; Guides</h3>
            </div>
            <div class="panel-body">
              <p>Practical guides for building and operating mesh networks, written by and for community members. Needs contributors &mdash; technical writers especially welcome.</p>
              <a href="/resources.php" class="btn btn-default btn-sm">Browse Resources</a>
            </div>
          </div>
        </div>

      </div>

      <hr>

      <h2>Propose a Project</h2>

      <p>Have an idea for something new? LibreNetwork is a community, not a corporation &mdash; projects start when someone decides to start them. The process is simple:</p>

      <ol>
        <li>Post your idea on <a href="https://github.com/LibreNetwork/librenetwork.org/discussions" target="_blank">GitHub Discussions</a></li>
        <li>Gather interest and collaborators</li>
        <li>Start building &mdash; in the open, on GitHub or wherever makes sense</li>
        <li>Share your progress back to the community</li>
      </ol>

      <p>You don't need permission. You just need to show up and do the work.</p>

      <div class="section-alt">
        <h2>Everything Is Open</h2>
        <p>All LibreNetwork projects are open source. Inspect it, fork it, improve it &mdash; no permission needed.</p>
        <a href="https://github.com/LibreNetwork" class="btn btn-primary btn-lg" target="_blank">LibreNetwork on GitHub</a>
        &nbsp;
        <a href="/getinvolved.php" class="btn btn-default btn-lg">Get Involved</a>
      </div>

    </div> <!-- /container -->

<?php
include("footer.php");
?>
