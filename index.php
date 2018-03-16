<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Pascal Dupré aka KleinesP</title>
<meta name="description" content="Pascal Dupré - besser bekannt als KleinesP - ist ein Podcaster aus Dresden.">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/layout.css" rel="stylesheet">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" href="/favicon.ico">
</head>
<body>
<div class="container">

    <div class="row align-items-center">
        <div class="col-lg linkespalte">
            <h1>Pascal Dupré</h1>
            <h2>Besser bekannt als KleinesP</h2>
            <p>Ahoi, mein Name ist Pascal Dupré. Ich bin seit 2012 als Podcaster aktiv. Unter der Marke <a href="https://podcastdepot.de">PodcastDepot</a> veröffentliche ich regelmäßig Episoden mit Themen aus aller Welt und meine Gäste kommen dabei nicht zu kurz.</p>
            <p>Durch diese Tätigkeit habe ich bereits viele <a href="https://kleinesgespraech.de/gaesteliste/">interessante Menschen</a> kennenlernen dürfen und viele spannende Gespräche geführt.</p>
            <p>Mein großes Handicap ist ein seltener Gendefekt mit dem Namen <a href="https://de.wikipedia.org/wiki/Epidermolysis_bullosa">„Epidermolysis bullosa“</a> - kurz EB. Diese Krankheit und ihre Nebeneffekte sind der Grund, dass ich keiner regulären Arbeit nachgehen kann und auf <a href="https://www.patreon.com/KleinesP">Unterstützung</a> angewiesen bin.</p>
        </div>
        <div class="col-lg">
            <div id="instafeed"></div>
        </div>

        <div class="col-lg rechtespalte">
            <ul class="fa-ul kontakt">
                <li><i class="fa-li fa fa-twitter fa-fw fa-3x" aria-hidden="true"></i>Folge mir auf Twitter<br><a href="https://twitter.com/KleinesP">@KleinesP</a></li>
                <li><i class="fa-li fa fa-instagram fa-fw fa-3x" aria-hidden="true"></i>Folge mir auf Instagram<br><a href="https://www.instagram.com/KleinesP/">@KleinesP</a></li>
                <li><i class="fa-li fa fa-facebook fa-fw fa-3x" aria-hidden="true"></i>Finde mich auf Facebook<br><a href="https://www.facebook.com/profile.php?id=100010880418578">Pascal Dupré</a></li>
                <li><i class="fa-li fa fa-youtube fa-fw fa-3x" aria-hidden="true"></i>Finde mich auf Youtube<br><a href="https://www.youtube.com/channel/UCCu3A6XuLAW7VHXS4edeu2g">KleinesGespräch</a></li>
                <li><i class="fa-li fa fa-podcast fa-fw fa-3x" aria-hidden="true"></i>Höre meine Podcasts<br><a href="https://podcastdepot.de">PodcastDepot.de</a></li>
            </ul>
        </div>
    </div>

</div>

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
        "?access_token=337177591.a8ad7a3.017fc2c66c2a4bee9f22507cd1d43a8a"+
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
        "?access_token=337177591.a8ad7a3.017fc2c66c2a4bee9f22507cd1d43a8a"+
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
            '" class="rounded-circle"><h4>kleinesp<br><strong>Pascal Dupré</strong></h4></div>';
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

</body>
</html>
