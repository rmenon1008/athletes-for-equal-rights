$( document ).ready(function() {

    $('.scroll-indicator').on('click', function() {
        var body = $("html, body");
        body.animate({scrollTop:400}, '1');
    })

    const devMode = false;

    var controller = new ScrollMagic.Controller();
    
    $('.line-bg').find("polyline").each(function(){

        if($(this).parent().css('display') != 'none'){
            var line_length = this.getTotalLength();

            var tween = TweenMax.fromTo(this, 1, {strokeDasharray: 0,ease:Linear.easeNone},
                                                        {strokeDasharray: line_length,ease:Linear.easeNone});

            var scene = new ScrollMagic.Scene({
                triggerElement: this, 
                duration : $(this).parent().height(),
                reverse: true,
                triggerHook: 0.65,
            })
            .setTween(tween) 
            /*.addIndicators()*/
            .addTo(controller);
        }
    });

    $('.outlines').find(".outline-stroke").each(function(){

        /*var tween = TweenMax.fromTo(this, 3, {strokeDasharray: 0,ease:Power4.in},
        {strokeDasharray: 1.5*window.innerWidth});*/
        
        var element = this;

        var scene = new ScrollMagic.Scene({
            triggerElement: element, 
            reverse: true,
            triggerHook: 0.75
        })
        .on("start", function (event){
            if(event.scrollDirection == "REVERSE") {
                $(element).css({"stroke-dasharray": ""});
                console.log("backwards1");
            }
            else {
                $(element).css({"stroke-dasharray": 2*window.innerWidth.toString()+"px"});
                console.log(2*window.innerWidth.toString()+"px");
            }
        })
        /*.addIndicators()*/
        .addTo(controller);

    });

    $('.content').each(function(){
        if($(this).find('.image-contain').find('.image').length && !($(this).find('.image-contain').find('.no-animate-mobile').length && window.innerWidth < 1000)){
            var wiggleRoomTop = 300;
            var wiggleRoomBottom = 120;

            var tween = TweenMax.fromTo($(this).find('.image-contain').find('.image'), 0.01, {css:{marginBottom: wiggleRoomTop, marginTop: -wiggleRoomTop}, ease:Power1.out}, {css:{marginBottom: -wiggleRoomBottom, marginTop: wiggleRoomBottom}});

            var scene = new ScrollMagic.Scene({
                triggerElement: this, 
                reverse: true,
                triggerHook: 1,
                duration : $(this).height()+10*wiggleRoomBottom,
            })
            .setTween(tween) 
            /*.addIndicators()*/
            .addTo(controller);
        }
    });


    $('.slide-left').each(function(){

        var element = this;

        var scene = new ScrollMagic.Scene({
            triggerElement: element, 
            reverse: true,
            triggerHook: 0.65,
            offset: -150,
        })
        .on("start", function (event){
            if(event.scrollDirection == "REVERSE") {
                $(element).css({"margin-left": "", "margin-right": "", "opacity": ""});
                console.log("backwards");
            }
            else {
                $(element).css({"margin-left": "0", "margin-right": "0", "opacity": "1"});
                console.log("forward");
            }

        })
        /*.addIndicators()*/
        .addTo(controller);

    });

    $('.slide-right').each(function(){

        var element = this;

        var scene = new ScrollMagic.Scene({
            triggerElement: element, 
            reverse: true,
            triggerHook: 0.65,
            offset: -200,
        })
        .on("start", function (event){
            if(event.scrollDirection == "REVERSE") {
                $(element).css({"margin-left": "0", "margin-right": "0", "opacity": ""});
                console.log("backwards");
            }
            else {
                $(element).css({"margin-left": "", "margin-right": "", "opacity": "1"});
                console.log("forward");
            }

        })
        /*.addIndicators()*/
        .addTo(controller);

    });
    
    $('.date').each(function(){

        var element = this;

        var scene = new ScrollMagic.Scene({
            triggerElement: element, 
            reverse: true,
            triggerHook: 0.75,
            offset: -20,
        })
        .on("start", function (event){
            if(event.scrollDirection == "REVERSE") {
                $(element).css({"color": ""});
                console.log("backwards");
            }
            else {
                $(element).css({"color": "white"});
                console.log("forward");
            }

        })
        /*.addIndicators()*/
        .addTo(controller)
    });

    $('.heading-emphasis').each(function(){

        var element = this;

        var scene = new ScrollMagic.Scene({
            triggerElement: element, 
            reverse: true,
            triggerHook: 0.75,
            offset: -20,
        })
        .on("start", function (event){
            if(event.scrollDirection == "REVERSE") {
                $(element).css({"width": "0%"});
                console.log("backwards");
            }
            else {
                $(element).css({"width": "60%"});
                console.log("forward");
            }

        })
        /*.addIndicators()*/
        .addTo(controller)
    });


});