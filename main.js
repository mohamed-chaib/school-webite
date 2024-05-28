function removeForm() {
  const form = document.getElementById("comment-form");
  const button = document.getElementById("add-comment-btn");
  button.style.display = "block";
  form.style.display = "none";
}
function check() {
  let email= /^([a-z]\D)+[-_]?[a-z0-9]+[@]\w+[.]+\w{2,4}$/;
  const nbr_email = document.getElementById("email").value.trim();
  const nbr_comment = parseInt(document.getElementById("comment").value.trim().length);
  if (email.test(nbr_email)) {
    alert( email.test(nbr_email));
    removeForm();
  }
}
function addCommunt() {
  const form = document.getElementById("comment-form");
  const button = document.getElementById("add-comment-btn");
  button.style.display = "none";
  form.style.display = "block";
}

var index = 0;
const slides = document.getElementsByClassName("slides");
function repeatSlides()
{
  slideShow();
  index++;
  if (index==slides.length-1) {
    index=0;
  }
  setInterval(repeatSlides,3000);
}

function slideShow( ){

for (let i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}

slides[index].style.display = "block";
}
repeatSlides();

