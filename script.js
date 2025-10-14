const menuOpenBtn = document.getElementById("menuOpenBtn");
const closeBtn = document.getElementById("btnClose");

menuOpenBtn.onclick = () => {
  document.body.classList.toggle("show-mobile-menu");
};

closeBtn.onclick = () => {
  menuOpenBtn.click();
};
