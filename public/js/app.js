//Effet sur la première section "we serve food..."
$(document).ready(function(){
	gsap.from(".illustration", {x:-250, duration:1})
	gsap.from(".text", {x:250, duration:1});
	gsap.to(".illustration", {x:0, duration:1});
	gsap.to(".text", {x:0, duration:1});
	
});

//Effet sur la partie "Welcome !"
$(document).ready(function(){
	gsap.from(".welcome", {y:-150, duration:1});
	gsap.to(".welcome", {
		scrollTrigger: {
			trigger: ".section1",
			scrub:1,
			// markers:true,
			// start:"top bottom",
		},
		y:0,
		duration:1
	}),
		gsap.from(".descriptiontext", {y:100, duration:1});
		gsap.to(".descriptiontext", {
		scrollTrigger: {
			trigger:".section1",
			// markers:true,
			// start:"center center",
			scrub:1,
		},
		y:0,
		duration:1
	})
});


//Effet sur la section "About Mimi's"
// init controller
$(document).ready(function() {
	var controller = new ScrollMagic.Controller();

	// build scene
    new ScrollMagic.Scene({
		triggerElement: "#reveal1",
        triggerHook: 0.8,
	})
	.setClassToggle("#reveal1", "fade-in") // add class to reveal
	.addTo(controller);
});


