// Designed by:  Mauricio Bucardo
// Original image:
// https://dribbble.com/shots/5619509-Animated-Tab-Bar

"use strict"; 

const body = document.body;
const bgColorsBody = ["#ffb457", "#ff96bd", "#9999fb", "#ffe797", "#cffff1"];
const menu = body.querySelector(".menu");
const menuItems = menu.querySelectorAll(".menu__item");
const menuBorder = menu.querySelector(".menu__border");
let activeItem = menu.querySelector(".active");

function clickItem(item, index) {

    menu.style.removeProperty("--timeOut");
    
    if (activeItem == item) return;
    
    if (activeItem) {
        activeItem.classList.remove("active");
    }

    
    item.classList.add("active");
    body.style.backgroundColor = bgColorsBody[index];
    activeItem = item;
    offsetMenuBorder(activeItem, menuBorder);
    
    
}

function offsetMenuBorder(element, menuBorder) {

    const offsetActiveItem = element.getBoundingClientRect();
    const left = Math.floor(offsetActiveItem.left - menu.offsetLeft - (menuBorder.offsetWidth  - offsetActiveItem.width) / 2) +  "px";
    menuBorder.style.transform = `translate3d(${left}, 0 , 0)`;

}

offsetMenuBorder(activeItem, menuBorder);

menuItems.forEach((item, index) => {

    item.addEventListener("click", () => clickItem(item, index));
    
})

window.addEventListener("resize", () => {
    offsetMenuBorder(activeItem, menuBorder);
    menu.style.setProperty("--timeOut", "none");
});

let previous = -1;
$(".icon[data-index]").click(function(){
	$(this).addClass("initialised");
	let index = $(this).attr("data-index");
	let navtab = $(this).closest("nav.tab").addClass("moving").attr("data-selected", index);
	if(previous == -1) navtab.find('.icon[data-index="2"]').addClass("initialised")
	if(previous == 1 && index == 3 || previous == 3 && index == 1) { //If going from one side to the other and middle needs to be hidden
		navtab.find('.icon[data-index="2"]').removeClass("initialised");
		setTimeout(function(){ //Because apparently this is the only way it will work
			navtab.find('.icon[data-index="2"]').addClass("initialised"); //Same animation as the other so they line up
		});
	}
	previous = index;
	setTimeout(function(){
		navtab.removeClass("moving").removeClass("hidemiddle");
	}, 750);
}); 
/*🤢 If someone knows how to sort out the animations in a non-garbage way please fork and mention in a comment, I kinda got stuck.*/




var menu = new BloomingMenu({
    itemsNum: 8
  })
  menu.render()
  menu.props.elements.items.forEach(function (item, index) {
    item.addEventListener('click', function () {
      console.log('Item #' + index + 'was clicked')
    })
  })