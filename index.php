<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Pascal Dupré</title>
<meta name="description" content="Pascal Dupré ist ein Podcaster aus Dresden.">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="css/bootstrap.css?date=20190315" rel="stylesheet">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" href="/favicon.ico">
</head>
<body>
<header class="sticky-top">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <h1><a class="navbar-brand" href="/">Pascal Dupré</a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mr-1"><a class="nav-link active" href="https://pascaldupre.de/">Startseite</a></li>
                    <li class="nav-item mr-1"><a class="nav-link" href="https://pascaldupre.de/blog/">Blog</a></li>
                    <li class="nav-item mr-1"><a class="nav-link" href="https://pascaldupre.de/blog/ueber-mich/">Über mich</a></li>
                    <li class="nav-item mr-1"><a class="nav-link" href="https://pascaldupre.de/blog/support/"><i class="fa fa-fw fa-heart" aria-hidden="true"></i> Support</a></li>                </ul>
                <a href="/blog/feed/" class="btn">
                    <i class="fas fa-rss" aria-hidden="true"></i> RSS-Feed
                </a>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-5">

    <div class="row align-items-center">
        <div class="col-lg linkespalte">
            <h1>Pascal Dupré</h1>
            <p>Hey Ho und willkommen!<br>Mein Name ist Pascal und seit 1992 lebe ich mit dem seltenen Gendefekt <a href="https://pascaldupre.de/blog/ueber-mich/">Epidermolysis Bullosa</a> - kurz EB. Davon lasse ich mich aber nicht unterkriegen und versuche jeden Tag bestmöglich zu nutzen.</p>
            <p>Auf meinem <a href="/blog/">Blog</a> betreibe ich Aufklärung zu EB und lasse Dich an meinem Leben teilhaben. Auf <a href="https://twitter.com/PsclDpr">Twitter</a> und <a href="https://www.instagram.com/PsclDpr/">Instagram</a> dokumentiere ich meinen Alltag, rege mich auf oder zeige mein neustes Abenteuer. Aktuell triffst Du mich vor allem auf <a href="https://www.twitch.tv/pscldpr">Twitch</a> und hin und wieder findest Du auch ein Video von mir auf <a href="https://www.youtube.com/channel/UCCu3A6XuLAW7VHXS4edeu2g">YouTube</a>.</p>
            <p>Sollte Dir gefallen was ich mache, dann sag es weiter oder lass mir doch ein netten Gruß zu kommen. Falls du mich unterstützen möchtest, geht das über <a href="https://www.patreon.com/pscldpr">Patreon</a> oder über meine <a href="https://www.amazon.de/hz/wishlist/ls/2ELPSVOOP3EEA">Amazon-Wunschliste</a>. All das muss aber nicht sein. Für mich ist es Freude genug wenn Du Dich an meinem Schaffen erfreust.</p>
            <p>Lass es Dir gut gehen.<br>Dein Pascal Dupré</p>
        </div>
        <div class="col-lg">
            <div id="instafeed"></div>
        </div>

        <div class="col-lg rechtespalte">
            <ul class="fa-ul kontakt">
                <li><i class="fa-li fab fa-twitch fa-fw fa-3x" aria-hidden="true"></i>
                    <span>Triff mich auf Twitch</span>
                    <a href="https://www.twitch.tv/pscldpr">pscldpr</a>
                </li>
                <li><i class="fa-li fab fa-twitter fa-fw fa-3x" aria-hidden="true"></i>
                    <span>Folge mir auf Twitter</span>
                    <a href="https://twitter.com/PsclDpr">@PsclDpr</a>
                </li>
                <li><i class="fa-li fab fa-instagram fa-fw fa-3x" aria-hidden="true"></i>
                    <span>Folge mir auf Instagram</span>
                    <a href="https://www.instagram.com/PsclDpr/">@PsclDpr</a>
                </li>
                <li><i class="fa-li fab fa-patreon fa-fw fa-3x" aria-hidden="true"></i>
                    <span>Werde mein Patron</span>
                    <a href="https://www.patreon.com/pscldpr">Patreon.com</a>
                </li>
                <li><i class="fa-li fas fa-podcast fa-fw fa-3x" aria-hidden="true"></i>
                    <span>Höre meine Podcasts</span>
                    <a href="https://podcastdepot.de">PodcastDepot.de</a>
                </li>
                <li><i class="fa-li fab fa-youtube fa-fw fa-3x" aria-hidden="true"></i>
                    <span>Finde mich auf Youtube</span>
                    <a href="https://www.youtube.com/channel/UCCu3A6XuLAW7VHXS4edeu2g">KleinesGespräch</a>
                </li>
            </ul>
        </div>
    </div>

</div>

<footer class="my-5">

    <div class="container text-center">
        <a href="/blog/impressum/">Impressum</a> | <a href="/blog/datenschutz/">Datenschutz</a>
    </div>

</footer>

<script type="text/javascript">

function generateInstaFeed()
{
    var feedHtml = '<div class="instaheader"><img src="img/insta/avatar.jpg"' +
        ' class="rounded-circle"><h4>PsclDpr<br>' +
        '<strong>Pascal Dupré</strong></h4></div>';
    for (i=1; i<=12; i++) {
        feedHtml += '<div id="feedimage' + i + '" class="instafeeditem">' +
           '<img src="img/insta/image' + i + '.jpg" >' +
           '<p class="instacreated"></p>'+
           '<p class="instalikes"></p>'+
           '<p class="instacaption"></p></div>';
    }
    document.getElementById('instafeed').innerHTML = feedHtml;

    for (i=1; i<=12; i++) {
        document.getElementById('feedimage'+i).style.opacity = 1;
    }
    setTimeout(animateIt, 5000);

}
var counter = 0;
var key = 0;
function animateIt()
{

    if (counter == 12) {
        counter = 0;
    }

    for (i=1; i<=12; i++) {
        document.getElementById('feedimage'+i).style.opacity = 0;
    }
    key = counter % 12 +1;
    console.log(counter);
    document.getElementById('feedimage'+key).style.opacity = 1;
    ++counter;
    setTimeout(animateIt, 10000);
}

generateInstaFeed();

</script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>


<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setCookieDomain", "*.pascaldupre.de"]);
  _paq.push(["setDomains", ["*.pascaldupre.de"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//statistik.podcastdepot.de/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '4']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</body>
</html>
