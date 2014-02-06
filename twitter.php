<?php
/**
 * Americalicious Fantasy Football League - est. 2008
 */
?>
<div id="twitter">

  <script charset="utf-8" src="scripts/twitter.js"></script>
  <script>
  new TWTR.Widget({
    version: 2,
    type: 'search',
    rpp: 10,
    search: '#fantasyfootball',
    interval: 30000,
    title: 'Fantasy Football 2012',
    subject: '#fantasyfootball',
    width: 230,
    height: 330,
    theme: {
      shell: {
        background: '#647056',
        color: '#ffffff'
      },
      tweets: {
        background: '#ffffff',
        color: '#444444',
        links: '#1985b5'
      }
    },
    features: {
      scrollbar: true,
      loop: false,
      live: true,
      toptweets: false,
      behavior: 'all'
    }
  }).render().start();
  </script>
</div>