<?php
$title = "Resources";
include("header.php");
?>

  <body role="document">

<?php
include("navbar.php");
?>


    <div class="container theme-showcase" role="main">

      <div class="page-header">
        <h1>Resources</h1>
      </div>

      <p class="lead">Learning materials, guides, tools, and links for building community networks and defending digital rights. All freely available.</p>

      <div class="resource-category">
        <h3><span class="glyphicon glyphicon-file"></span> Guides &amp; Documents</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="/secondary/pdf/BuildingRualMeshNetwork.pdf" target="_blank"><strong>Building a Rural Mesh Network</strong></a>
            <span class="text-muted"> &mdash; A practical guide to planning and deploying mesh networks in rural communities. PDF.</span>
          </li>
          <li class="list-group-item">
            <a href="https://urbanomnibus.net/2019/05/building-the-peoples-internet/" target="_blank"><strong>Building the People's Internet</strong></a>
            <span class="text-muted"> &mdash; An in-depth look at community mesh networking efforts and the NYC Mesh project.</span>
          </li>
          <li class="list-group-item">
            <a href="https://althea.net/althea-whitepaper.pdf" target="_blank"><strong>Althea Whitepaper</strong></a>
            <span class="text-muted"> &mdash; A proposal for incentivized mesh networking and decentralized bandwidth markets.</span>
          </li>
        </ul>
      </div>

      <div class="resource-category">
        <h3><span class="glyphicon glyphicon-signal"></span> Mesh Networking Projects &amp; Protocols</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="https://github.com/cjdelisle/cjdns" target="_blank"><strong>cjdns</strong></a>
            <span class="text-muted"> &mdash; Encrypted IPv6 mesh networking. Routes through a distributed hash table. Used in the Hyperboria network.</span>
          </li>
          <li class="list-group-item">
            <a href="https://www.open-mesh.org/projects/batman-adv/wiki" target="_blank"><strong>BATMAN-adv</strong></a>
            <span class="text-muted"> &mdash; Better Approach To Mobile Adhoc Networking. A Linux kernel module for mesh networking.</span>
          </li>
          <li class="list-group-item">
            <a href="https://libremesh.org/" target="_blank"><strong>LibreMesh</strong></a>
            <span class="text-muted"> &mdash; A modular framework for OpenWRT-based community wireless mesh networks.</span>
          </li>
          <li class="list-group-item">
            <a href="https://yggdrasil-network.github.io/" target="_blank"><strong>Yggdrasil Network</strong></a>
            <span class="text-muted"> &mdash; An early-stage experiment in scalable, self-arranging mesh networking using a compact routing scheme.</span>
          </li>
          <li class="list-group-item">
            <a href="https://meshtastic.org/" target="_blank"><strong>Meshtastic</strong></a>
            <span class="text-muted"> &mdash; LoRa-based off-grid mesh communication for low-bandwidth text messaging. Works without internet infrastructure.</span>
          </li>
          <li class="list-group-item">
            <a href="https://nycmesh.net/" target="_blank"><strong>NYC Mesh</strong></a>
            <span class="text-muted"> &mdash; A real-world community network in New York City. Great reference for how a large community mesh operates.</span>
          </li>
        </ul>
      </div>

      <div class="resource-category">
        <h3><span class="glyphicon glyphicon-wrench"></span> Hardware &amp; Firmware</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="https://openwrt.org/" target="_blank"><strong>OpenWrt</strong></a>
            <span class="text-muted"> &mdash; A Linux-based firmware for routers. The foundation for most community mesh deployments.</span>
          </li>
          <li class="list-group-item">
            <a href="https://wireless.wiki.kernel.org/en/developers/Documentation/cfg80211" target="_blank"><strong>Linux Wireless Networking</strong></a>
            <span class="text-muted"> &mdash; Technical documentation for Linux wireless subsystems relevant to building mesh hardware.</span>
          </li>
        </ul>
      </div>

      <div class="resource-category">
        <h3><span class="glyphicon glyphicon-lock"></span> Digital Rights &amp; Advocacy</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="https://www.eff.org/" target="_blank"><strong>Electronic Frontier Foundation (EFF)</strong></a>
            <span class="text-muted"> &mdash; The leading nonprofit defending civil liberties in the digital world.</span>
          </li>
          <li class="list-group-item">
            <a href="https://www.accessnow.org/" target="_blank"><strong>Access Now</strong></a>
            <span class="text-muted"> &mdash; Defending and extending the digital rights of users around the world.</span>
          </li>
          <li class="list-group-item">
            <a href="https://www.fightforthefuture.org/" target="_blank"><strong>Fight for the Future</strong></a>
            <span class="text-muted"> &mdash; Advocacy organization focused on internet freedom, net neutrality, and surveillance.</span>
          </li>
          <li class="list-group-item">
            <a href="https://www.privacyguides.org/" target="_blank"><strong>Privacy Guides</strong></a>
            <span class="text-muted"> &mdash; Community-maintained recommendations for privacy-respecting tools and practices.</span>
          </li>
          <li class="list-group-item">
            <a href="https://ssd.eff.org/" target="_blank"><strong>Surveillance Self-Defense (EFF)</strong></a>
            <span class="text-muted"> &mdash; Tips, tools, and how-tos for protecting yourself online. From the EFF.</span>
          </li>
        </ul>
      </div>

      <div class="resource-category">
        <h3><span class="glyphicon glyphicon-education"></span> Further Reading</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="https://en.wikipedia.org/wiki/Wireless_mesh_network" target="_blank"><strong>Wireless Mesh Networking &mdash; Wikipedia</strong></a>
            <span class="text-muted"> &mdash; A solid overview of mesh network concepts, topology, and protocols.</span>
          </li>
          <li class="list-group-item">
            <a href="https://archive.org/details/forthewinningofthefight" target="_blank"><strong>The Internet Archive</strong></a>
            <span class="text-muted"> &mdash; Preserving and providing free access to knowledge. The open internet in action.</span>
          </li>
        </ul>
      </div>

      <div class="section-alt">
        <h2>Have a Resource to Share?</h2>
        <p>If you know of a guide, tool, or project that belongs here, suggest it on GitHub.</p>
        <a href="https://github.com/LibreNetwork/librenetwork.org/discussions" class="btn btn-primary btn-lg" target="_blank">Suggest on GitHub</a>
      </div>

    </div> <!-- /container -->

<?php
include("footer.php");
?>
