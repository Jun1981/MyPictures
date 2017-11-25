<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>「むっ」/「たま」のイラスト [pixiv]</title><link rel="canonical" href="http://www.pixiv.net/member_illust.php?mode=medium&amp;illust_id=16176594"><script>
var _gaq = _gaq || [];

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();




_gaq.push(['_setAccount', 'UA-1830249-3']);
_gaq.push(['_setDomainName', 'pixiv.net']);

if (window.pixiv && pixiv.tracking && pixiv.tracking.URL) {
_gaq.push(['_trackPageview', pixiv.tracking.URL]);
} else {
_gaq.push(['_trackPageview']);
}

_gaq.push(function() {
var p = /[&?](ref=[^&]+)/.exec(location.search);
p && pixiv.tracking.event('inner traffic', p[1]);
pixiv.verification.clear();
});



if (window.pixiv) {
if (_gaq) {
switch (pixiv.user.abTestId) {
case '1': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'gray1', location.pathname]); break;
case '2': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'gray2', location.pathname]); break;
case '3': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'gray3', location.pathname]); break;
case '9': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'white1', location.pathname]); break;
case '8': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'white2', location.pathname]); break;
case '7': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'white3', location.pathname]); break;
case '5': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'fit1', location.pathname]); break;
case '4': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'fit2', location.pathname]); break;
case '6': _gaq.push(['_trackEvent', 'AB Viewed Page: thumbnail-border', 'fit3', location.pathname]); break;
}
}
}



if (window.pixiv) {
if (pixiv.user && pixiv.user.loggedIn) {
_gaq.push(['_setCustomVar', 1, "login", "yes", 3]);
_gaq.push(['_setCustomVar', 3, "plan", pixiv.user.premium ? "premium" : "normal", 1]);
_gaq.push(['_setCustomVar', 5, "gender", pixiv.user.gender, 1]);
} else {
_gaq.push(['_setCustomVar', 1, "login", "no", 3]);
}

(function() {
// クッキーあれば、一回でもログインした人とみなす
if (pixiv.user && pixiv.storage) {
var cookie_name = 'login_ever';

if (pixiv.storage.cookie(cookie_name)) {// 一度でもログインしたことある
_gaq.push(['_setCustomVar', 2, "login ever", "yes", 1]);

} else if (pixiv.user.loggedIn) { // ログインしてる
pixiv.storage.cookie(cookie_name, 'yes', {
expires: 1000 * 60 * 60 * 24 * 365 * 5, // 5 years
domain: location.hostname
});
_gaq.push(['_setCustomVar', 2, "login ever", "yes", 1]);

} else { // ログインしたこと無いし、ログインしてもない
_gaq.push(['_setCustomVar', 2, "login ever", "no", 1]);
}
}
} ())
}














</script><style>
body {
margin: 0;
padding: 20px;
text-align: center;
}

img {
vertical-align: middle;
border: none;
cursor: pointer;
}
</style></head><body><img src="http://i1.pixiv.net/img05/img/t6m0/16176594.jpg" onclick="(window.open('', '_self')).close()"></body></html>