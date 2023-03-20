function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'vi',
        autoDisplay: 'false',
        includedLanguages: 'en',
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
    }, 'google_translate_element');
}

function translateToEnglish() {
    var select = document.querySelector('#google_translate_element select');
    select.value = 'en';
    select.dispatchEvent(new Event('change'));
}