// "use strict";
// const btnNext = document.querySelector(".btn-right");
// const btnPrevious = document.querySelector(".btn-left");
// ////
// const images = document.querySelectorAll("img");
// const imgContainer = document.querySelector(".image-container");

// let currentImg = 1;
// let timeout;

// btnNext.addEventListener("click", () => {
//   currentImg++;
//   clearTimeout(timeout);
//   updateImage();
// });

// btnPrevious.addEventListener("click", () => {
//   currentImg--;
//   clearTimeout(timeout);
//   updateImage();
// });

// updateImage();

// function updateImage() {
//   if (currentImg > images.length) {
//     currentImg = 1;
//   } else if (currentImg < 1) {
//     currentImg = images.length;
//   }
//   imgContainer.style.transform = `translateX(-${(currentImg - 1) * 500}px)`;
//   timeout = setTimeout(() => {
//     currentImg++;
//     updateImage();
//   }, 4000);
// }

// alert("localhost JS works");