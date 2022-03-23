const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});
prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

const rua = document.getElementById('rua')
const zipcode = document.getElementById('zipcode')
const cidade = document.getElementById('cidade')
const estado = document.getElementById('estado')

const requiredbtn = document.getElementById('requiredbtn')
requiredbtn.addEventListener('click', requeridfunction)
function requeridfunction() {
  if (rua.value == "" || zipcode.value == "" || cidade.value == "" || estado.value == "") {
    window.alert('Preencha todos os campos')
    steps[5].classList.add("active")
    steps[6].classList.remove("active")
  } else {
    steps[6].classList.add("active")
  }
}

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active");
  index = steps.indexOf(active);
  steps[index].classList.remove("active");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active");
}

