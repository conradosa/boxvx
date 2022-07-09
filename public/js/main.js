VanillaTilt.init(document.querySelector("#image-comparison-slider"), {
    max: 5, speed: 800, scale: 1.00
});

const slider = document.querySelector("#image-comparison-slider");
const sliderImgWrapper = document.querySelector("#image-comparison-slider .img-wrapper");
const sliderHandle = document.querySelector("#image-comparison-slider .handle");

slider.addEventListener("mousemove", sliderMouseMove);
slider.addEventListener("touchmove", sliderMouseMove);

function sliderMouseMove(event) {

    if (isSliderLocked) return;

    let x = ((document.body.clientWidth / 100) * 10);

    if (document.body.clientWidth > 1600) {
        x = ((document.body.clientWidth / 100) * 10.5);
    }
    if (document.body.clientWidth > 1500 && document.body.clientWidth < 1600) {
        x = document.body.clientWidth / 100;
    }
    if (document.body.clientWidth > 1100 && document.body.clientWidth < 1500) {
        x = ((document.body.clientWidth / 100) - 50);
    }

    const sliderWidth = slider.clientWidth;
    const sliderHandleWidth = sliderHandle.clientWidth;

    let mouseX = (event.clientX || event.touches[0].clientX) - x;
    if (mouseX < 0) mouseX = 0; else if (mouseX > sliderWidth) mouseX = sliderWidth;

    sliderImgWrapper.style.width = `${((1 - mouseX / sliderWidth) * 100).toFixed(4)}%`;
    sliderHandle.style.left = `calc(${((mouseX / sliderWidth) * 100).toFixed(4)}% - ${sliderHandleWidth / 2}px)`;
}

let isSliderLocked = false;

slider.addEventListener("mousedown", sliderMouseDown);
slider.addEventListener("touchstart", sliderMouseDown);
slider.addEventListener("mouseup", sliderMouseUp);
slider.addEventListener("touchend", sliderMouseUp);
slider.addEventListener("mouseleave", sliderMouseLeave);

function sliderMouseDown(event) {
    if (isSliderLocked) isSliderLocked = false;
    sliderMouseMove(event);
}

function sliderMouseUp() {
    if (!isSliderLocked) isSliderLocked = true;
}

function sliderMouseLeave() {
    if (isSliderLocked) isSliderLocked = false;
}
