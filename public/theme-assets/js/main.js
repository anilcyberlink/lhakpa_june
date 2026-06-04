
var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 4000, 
      disableOnInteraction: false,
    },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

function toggleActive(button) {
button.classList.toggle("active");
}
// let textContainer = document.querySelector('.text-container');
// let text = textContainer.innerText;
// textContainer.innerHTML = text.split('').map(letter => `<span>${letter}</span>`).join('');
//       // Typing animation
//       anime.timeline()
//           .add({
//               targets: '.text-container span',
//               opacity: [0, 1],
//               duration: 200,
//               easing: "easeInOutQuad",
//               delay: anime.stagger(150) // Each letter appears after a delay
//           });
//div section
const divs = {
    original: document.getElementById("originalDiv"),
    new1: document.getElementById("newDiv1"),
    new2: document.getElementById("newDiv2"),
};
// button section
const buttons = {
    change1: document.getElementById("changeBtn1"),
    change2: document.getElementById("changeBtn2"),
    close1: document.getElementById("closeBtn1"),
    close2: document.getElementById("closeBtn2"),
};
// Function to show only the selected div
        function toggleDiv(showDiv) {
          Object.values(divs).forEach((div) => div?.classList.add("hidden"));
          divs[showDiv]?.classList.remove("hidden");
        }
        
        if (buttons.change1)
          buttons.change1.addEventListener("click", () => toggleDiv("new1"));
        if (buttons.change2)
          buttons.change2.addEventListener("click", () => toggleDiv("new2"));
        if (buttons.close1)
          buttons.close1.addEventListener("click", () => toggleDiv("original"));
        if (buttons.close2)
          buttons.close2.addEventListener("click", () => toggleDiv("original"));
        
        document.querySelectorAll(".trigger").forEach(function (toggler) {
          toggler.addEventListener("click", function () {
            const target = document.querySelector(toggler.getAttribute("data-target"));
            if (target) target.hidden = !target.hidden;
          });
        });

