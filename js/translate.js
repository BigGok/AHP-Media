function setLanguageCookie(lang) {
  document.cookie = "language=" + lang + "; path=/";
}

function getLanguageCookie() {
  var name = "language=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var cookieArray = decodedCookie.split(';');
  for (var i = 0; i < cookieArray.length; i++) {
    var cookie = cookieArray[i];
    while (cookie.charAt(0) == ' ') {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(name) == 0) {
      return cookie.substring(name.length, cookie.length);
    }
  }
  return "";
}

function translateToEnglish() {
  var select = document.querySelector('#google_translate_element select');
  select.value = 'en';
  select.dispatchEvent(new Event('change'));
  setLanguageCookie('en');
}


function initializeGoogleTranslate() {
  var language = getLanguageCookie() || 'vi';
  new google.translate.TranslateElement({
    pageLanguage: language,
    autoDisplay: 'false',
    includedLanguages: 'en',
    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
  }, 'google_translate_element');
  if (language === 'en') {
    translateToEnglish();
  }
}

window.onload = initializeGoogleTranslate;