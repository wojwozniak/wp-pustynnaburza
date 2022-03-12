// ?
$(document).ready(() => {
	
	$(window).scroll(() => {
		if ($(this).scrollTop() > 1){  
			$('.page-title').addClass("sticky");
		}
		else{
			$('.page-title').removeClass("sticky");
		}
	});

});

// ********** Navbar button ************

const navToggle = document.querySelector(".nav-toggle");
const linksContainer = document.querySelector(".links-container");
const links = document.querySelector(".links");

navToggle.addEventListener("click", () => {
  const linksHeight = links.getBoundingClientRect().height;
  const containerHeight = linksContainer.getBoundingClientRect().height;
  if (containerHeight === 0) {
    linksContainer.style.height = `${linksHeight}px`;
  } else {
    linksContainer.style.height = 0;
  }
});

// ********** Top link button and footer seperator ************


// Selections 

const topLink = document.querySelector(".top-link");
const footerSeparator = document.querySelector('.footer-separator');


//Footer separator

window.addEventListener("resize",  () => {
  const viewportWidth = window.innerWidth;
  if (viewportWidth < 540) {
    footerSeparator.classList.add("hide");
  }
  else {
    footerSeparator.classList.remove("hide");
  }
});

// Top link

window.addEventListener("scroll", () => {
  const scrollHeight = window.pageYOffset;
  if (scrollHeight > 900) {
    topLink.classList.add("show-link");
  } else {
    topLink.classList.remove("show-link");
  }
});

// Copyright year updating

const copyrightParagraph = document.querySelector('.copyright');

window.addEventListener('DOMContentLoaded', () => {
  var copyrightDate = new Date();
  var copyrightYear = copyrightDate.getFullYear();
  if (copyrightYear > 2022) {
    copyrightParagraph.textContent = `Copyright © 2022-${copyrightYear} Pustynna Burza`;
  }
});

