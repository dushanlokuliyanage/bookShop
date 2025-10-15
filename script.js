const menuOpenBtn = document.getElementById("menuOpenBtn");
const closeBtn = document.getElementById("btnClose");

menuOpenBtn.onclick = () => {
  document.body.classList.toggle("show-mobile-menu");
};

closeBtn.onclick = () => {
  menuOpenBtn.click();
};




//Data Send

const sendBtn = document.getElementById('submit');

sendBtn.onclick = (e) => {
  e.preventDefault();

  let name = document.getElementById('name');
  let email = document.getElementById('email');
  let textarea = document.getElementById('textarea');

  let form = new FormData();
  form.append("n", name.value);
  form.append("e", email.value);
  form.append("t", textarea.value);

  let request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      let response = request.responseText;
      console.log(response);
      if (response == 'success') {
        alert("Thank You!");
        console.log(response);
      }
    }
  };

  request.open("POST", "messageProcess.php", true);
  request.send(form);
};


