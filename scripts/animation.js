var tl = gsap.timeline({duration:1});

tl.from('.title',{opacity:0,y:50});
tl.from('.subtitle',{opacity:0,y:50});
tl.from(['input','#password-reveal'],{opacity:0,y:50});


tl.from('.submit-btn',{opacity:0,y:50});


