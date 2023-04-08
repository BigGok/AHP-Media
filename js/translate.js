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
  return "vi"; 
}

function toggleLanguage() {
  var select = document.querySelector('#google_translate_element select');
  var langToggle = document.querySelector('#lang-toggle');

  if (langToggle.checked) { 
    select.value = 'en';
    setLanguageCookie('en');
  } else { 
    select.value = 'vi';
    setLanguageCookie('vi');
  }

  select.dispatchEvent(new Event('change'));
}


function initializeGoogleTranslate() {
  var language = getLanguageCookie();
  var select = document.querySelector('#google_translate_element select');

  new google.translate.TranslateElement({
    pageLanguage: language,
    autoDisplay: false,
    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
    includedLanguages: "en,vi",
    gaTrack: true,
    gaId: "UA-XXXXX-X"
  }, 'google_translate_element');

  select.addEventListener('change', function() {
    var langToggle = document.querySelector('#lang-toggle');
    langToggle.checked = select.value === 'en';
    setLanguageCookie(select.value);
  });

  var langToggle = document.querySelector('#lang-toggle');
  langToggle.checked = select.value === 'en';
  langToggle.addEventListener('click', toggleLanguage);
}


window.onload = initializeGoogleTranslate;
