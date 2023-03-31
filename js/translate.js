function switchLanguage() {
  const toggle = document.getElementById("lang-toggle");
  const slider = document.querySelector(".slider");
  const translateElement = document.getElementById("google_translate_element");

  if (toggle.checked) {
    slider.style.backgroundColor = "#baadab";
    slider.style.boxShadow = "none";
    slider.style.borderRadius = "30px";
    slider.style.backgroundImage = "url('images/eng.png')";
    translateElement.setAttribute("class", "gg-translate");
    translateElement.innerHTML = "";
  } else {
    slider.style.backgroundColor = "#ccc";
    slider.style.boxShadow = "0 0 1px #2196F3";
    slider.style.borderRadius = "30px";
    slider.style.backgroundImage = "url('images/viet.png')";
    translateElement.setAttribute("class", "gg-translate notranslate");
    translateElement.innerHTML = "<div class='skiptranslate goog-te-gadget' dir='ltr'><div id=':0.targetLanguage'><select class='goog-te-combo'><option value='' selected>Chọn ngôn ngữ</option><option value='en'>Tiếng Anh</option></select></div></div>";
  }
}
