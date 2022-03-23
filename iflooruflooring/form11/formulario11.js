const box = Array.from(document.querySelectorAll("form .box"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");

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

function changeStep(btn) {
    let index = 0;
    const active = document.querySelector(".active");
    index = box.indexOf(active);
    box[index].classList.remove("active");
    if (btn === "next") {
        index++;
    } else if (btn === "prev") {
        index--;
    }
    box[index].classList.add("active");
}