// PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function () {
	dropdownProfile.classList.toggle('show');
})








// BIO TABS
let tabs = document.querySelector(".bio-content");
let tabHeader = tabs.querySelector(".bio-tab");
let tabHeaderElements = tabs.querySelectorAll(".bio-tab-filter");
let tabBody = tabs.querySelector(".bio-data");
let tabBodyElements = tabs.querySelectorAll(".bio-data > div");
let tabIndicator = tabs.querySelector(".bio-indicator > div");

for(let i=0;i<tabHeaderElements.length;i++){
    tabHeaderElements[i].addEventListener("click",function(){
        tabHeader.querySelector(".bio-active").classList.remove("bio-active");
        tabHeaderElements[i].classList.add("bio-active");
        tabBody.querySelector(".bio-active").classList.remove("bio-active");
        tabBodyElements[i].classList.add("bio-active");
        tabIndicator.style.left = `${i*33}%`;
    });
}