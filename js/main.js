$(function () {
    $(".traveltour-main-menu-search").click(function () {
        $(".traveltour-top-search-wrap").addClass("active");
    })
    $(".traveltour-top-search-close").click(function () {
        $(".traveltour-top-search-wrap").removeClass("active");
    })
})

const img = document.querySelector('.main-header-block-img');
const previewBox = document.querySelector('.preview-box');
const iconBack = document.querySelector('.icon');

img.onclick = () => {
    previewBox.classList.add('show');
}
iconBack.onclick = () => {
    previewBox.classList.remove('show');
}