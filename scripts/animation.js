var tl = gsap.timeline({duration:1});

tl.fromTo('.title',{y:250},{y:0,delay:2},0);
tl.from('.title',{scale:2,duration:2,ease:"bounce.out"},0);



tl.from('.subtitle',{opacity:0});
tl.from(['input','#password-reveal'],{opacity:0});


tl.from('.submit-btn',{opacity:0,x:50,ease:"expo"});


