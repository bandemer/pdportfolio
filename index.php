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
            <p>Hey Ho und willkommen!<br>Mein Name ist Pascal und seit 1992 lebe ich mit dem seltenen Gendefekt <a href="https://de.wikipedia.org/wiki/Epidermolysis_bullosa">Epidermolysis Bullosa</a> - kurz EB. Davon lasse ich mich aber nicht unterkriegen und versuche jeden Tag bestmöglich zu nutzen.</p>
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
var fetchAvatarScript = null;
var fetchImagesScript = null;
var avatar = '';
var images = new Array();
var key = 0;

function zeitpunkt(timestamp)
{
    var secs = Math.floor(new Date().getTime() / 1000) - timestamp;

    var days = Math.floor(secs / 86400);
    if (days == 1) {
        return '1 Tag';
    } else if (days > 1) {
        return days + ' Tage';
    }
    var hours = Math.floor((secs %= 86400) / 3600);
    if (hours == 1) {
        return '1 Stunde';
    } else if (hours > 1) {
        return hours + ' Stunden';
    }
    var minutes = Math.floor((secs %= 3600) / 60);
    if (minutes == 1) {
        return '1 Minute';
    } else if (minutes > 1) {
        return minutes + ' Minuten';
    }
    var seconds = secs % 60;
    if (seconds == 1) {
        return '1 Sekunde';
    } else if (seconds > 1) {
        return seconds + ' Sekunden';
    }
    return 'gerade eben';
}

function fetchAvatar()
{
    if (fetchAvatarScript) return;
    fetchAvatarScript = document.createElement("script");
    fetchAvatarScript.type = "text/javascript";
    fetchAvatarScript.id = "fetchavatarscript";
    fetchAvatarScript.src = "https://api.instagram.com/v1/users/337177591/"+
        "?access_token=337177591.a8ad7a3.22d101f5cff74c46ae22fcd314fe70e7"+
        "&callback=fetchAvatarComplete&requestid="
        + Math.floor(Math.random()*999999).toString();
    document.body.appendChild(fetchAvatarScript);
}

function fetchAvatarComplete(response)
{
    document.body.removeChild(fetchAvatarScript);
    fetchAvatarScript = null;
    if (response.data) {
        avatar = response.data.profile_picture;
    }
    fetchImages();
}

function fetchImages()
{
    if (fetchImagesScript) return;
    fetchImagesScript = document.createElement("script");
    fetchImagesScript.type = "text/javascript";
    fetchImagesScript.id = "fetchimagesscript";
    fetchImagesScript.src = "https://api.instagram.com/v1/users/337177591/media/recent/"+
        "?access_token=337177591.a8ad7a3.22d101f5cff74c46ae22fcd314fe70e7"+
        "&callback=fetchImagesComplete&requestid="
        + Math.floor(Math.random()*999999).toString();
    document.body.appendChild(fetchImagesScript);
}

function fetchImagesComplete(response)
{
    document.body.removeChild(fetchImagesScript);
    fetchImagesScript = null;
    if (response.data.length > 0) {
        for (var i=0; i<response.data.length; i++) {
            images[i] = new Array();
            images[i]['url'] = response.data[i].images.standard_resolution.url;
            images[i]['caption'] = '';
            images[i]['created'] = '';
            images[i]['likes'] = 0;
            if (response.data[i].caption != null) {
                images[i]['caption'] = response.data[i].caption.text;
            }
            if (response.data[i].created_time != null) {
                images[i]['created'] = zeitpunkt(response.data[i].created_time);
            }
            if (response.data[i].likes != null) {
                images[i]['likes'] = response.data[i].likes.count;
            }
        }
        var feedHtml = '<div class="instaheader"><img src="' + avatar +
            '" class="rounded-circle"><h4>PsclDpr<br><strong>Pascal Dupré</strong></h4></div>';
        for (i=0; i<images.length; i++) {
            feedHtml += '<div id="feedimage' + i + '" class="instafeeditem">' +
               '<img src="' + images[i]['url'] + '" src="' + images[i]['caption'] + '" >' +
               '<p class="instacreated">' + images[i]['created'] + '</p>'+
               '<p class="instalikes">Gefällt ' + images[i]['likes'] + ' Mal</p>'+
               '<p class="instacaption">' + images[i]['caption'] + '</p></div>';
        }
        document.getElementById('instafeed').innerHTML = feedHtml;
        document.getElementById('feedimage'+key).style.opacity = 1;
        setTimeout(animateIt, 5000);
     }
}

function animateIt()
{
    if (key == images.length-1) {
        key = 0;
    }
    ++key;
    for (i=0; i<images.length; i++) {
        document.getElementById('feedimage'+i).style.opacity = 0;
    }
    document.getElementById('feedimage'+key).style.opacity = 1;
    setTimeout(animateIt, 10000);
}

fetchAvatar();

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
