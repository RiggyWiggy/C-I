$(document).foundation();

// JavaScript Document


(function() {
"use strict";
//console.log("SEAF Started!");


/*variables*/
var galImg = document.querySelectorAll(".galImg");
var mainImg = document.querySelectorAll(".full-gal-img");
var mainImgCont = document.querySelectorAll(".full-img-cont");
var closerCont = document.querySelectorAll (".closer");
var prev = document.querySelectorAll(".prev");
var next = document.querySelectorAll(".next");

/*functions*/

function targetedImg(e){
	var selectedImg = e.currentTarget.id;
	console.log(selectedImg);
if (mainImgCont.id = selectedImg){
	var trimmedImg = selectedImg.substr(-1);
	var num = trimmedImg - 1;
	mainImgCont[num].classList.remove('hide');
	[].forEach.call(closerCont, function(close){
	close.addEventListener('click', imgClose, true);
});
	[].forEach.call(prev, function(prevImg){
	prevImg.addEventListener('click', imgPrev, true);
});
[].forEach.call(next, function(nextImg){
nextImg.addEventListener('click', imgNext, true);
});

} 
}

function imgClose(e){
	var selectedClose = e.currentTarget.id;
	var trimmedClose = selectedClose.substr(-1);
	var closeNum = trimmedClose - 1;
	mainImgCont[closeNum].classList.toggle('hide');
}

function imgPrev(e){
	var prevSelected = e.currentTarget.id;
	var prevTrim = prevSelected.substr(-1);
	var currImg = prevTrim - 1;
	var switch2Prev =  prevTrim - 2;

	if (switch2Prev < 0){
		//console.log(currImg);
			mainImgCont[currImg].classList.toggle('hide');
	
	} else{
		mainImgCont[currImg].classList.toggle('hide');
		mainImgCont[switch2Prev].classList.remove('hide');
	}
}


function imgNext(e){
	var nextSelected = e.currentTarget.id;
	var nextTrim = nextSelected.substr(-1);
	var currImg = nextTrim - 1 ;
	var endOfGal = mainImgCont.length;
	var endTrim = endOfGal + 1;
	if (currImg > mainImgCont.length){
		console.log(mainImgCont.length);
			mainImgCont[currImg].classList.toggle('hide');
	//Cannot figure out how to stop the erroring.Functionality still works.
	} else if (currImg <= endOfGal){
		mainImgCont[currImg].classList.toggle('hide');
		mainImgCont[nextTrim].classList.remove('hide');
		console.log(nextTrim);
	}
}


/*listeners*/
for(var x = 0; x < galImg.length; x++){
galImg[x].addEventListener('click', targetedImg, false);
};




	

})();
