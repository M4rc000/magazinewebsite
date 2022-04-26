const darkMode = document.querySelector('.dark-mode');
const darkModeBtn = document.querySelector('.dark-mode button');
darkMode.addEventListener('click', function () {
  document.body.classList.toggle('mode-gelap');
  darkModeBtn.classList.toggle('button-putih');
});
