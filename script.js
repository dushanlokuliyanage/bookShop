const menuOpenBtn = document.getElementById("menuOpenBtn");
const closeBtn = document.getElementById("btnClose");

menuOpenBtn.onclick = () => {
  document.body.classList.toggle("show-mobile-menu");
};

closeBtn.onclick = () => {
  menuOpenBtn.click();
};

//Data Send

const sendBtn = document.getElementById("submit");

sendBtn.onclick = (e) => {
  e.preventDefault();

  let name = document.getElementById("name");
  let email = document.getElementById("email");
  let textarea = document.getElementById("textarea");

  let form = new FormData();
  form.append("n", name.value);
  form.append("e", email.value);
  form.append("t", textarea.value);

  let request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      let response = request.responseText;
      console.log(response);
      if (response == "success") {
        alert("Thank You!");
        console.log(response);
      }
    }
  };

  request.open("POST", "messageProcess.php", true);
  request.send(form);
};

// Profile Image

// let profileImage = document.getElementById("profileImage");
// let fileInput = document.getElementById("fileInput");

// profileImage.addEventListener("click", function (e) {
//   e.preventDefault();
//   fileInput.click();
// });

// fileInput.addEventListener("change", function () {
//   const file = this.files[0];
//   console.log(file);
//   if (file) {
//     const reader = new FileReader();
//     reader.onload = function (e) {
//       profileImage.src = e.target.result;
//     };
//     reader.readAsDataURL(file);
//   }
// });




