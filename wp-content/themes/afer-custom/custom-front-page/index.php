<!-- JQuery, GSAP, ScrollMagic -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/EasePack.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>

<script><?php include("scripts.js"); ?></script>
<style><?php include("styles.css"); ?></style>

<div id="story-contain">
    <div class="full" id="pg-1">
        <div class="content">
            <div class="text" style="top:10vh; left:0vw; width:33vw;">
                <div class="big-quote">
                    “Sport is unique in its ability to unite people of different shapes and sizes, ethnicities and faiths and varied experiences and over the course of history.”
                </div>
                <br>
                <i>Ibtihaj Muhammad</i>
            </div>

            <div class="image-contain" style="top:20vh; right:-10vw; width:63vw; height:80vh; z-index:0;">
                <div class="image" style="background-image: url('/wp-content/custom-front-page/ibtihaj.png');"></div>
                <svg class="outlines" preserveAspectRatio="none" viewbox="0 0 300 200" overflow="visible">
                    <!--<rect vector-effect="non-scaling-stroke" x=-10 y=5 width="300" height="200" class="outline-stroke" />
                    <rect vector-effect="non-scaling-stroke" x=-20 y=10 width="300" height="200" class="outline-stroke" />
                    <rect vector-effect="non-scaling-stroke" x=-30 y=15 width="300" height="200" class="outline-stroke" />-->
                </svg>
            </div>

            <div class="quote no-mobile" style="position:absolute; left:11vw; top:87vh; width:12vw; text-align:center;"><i>explore the history</i></div>

            <svg preserveAspectRatio="none" class="no-mobile" style="position:absolute; top:91vh; left:16.823vw; margin-left:-10px; height:10vh;">
                <circle cx=10 cy=10 r=10 style="fill:white;"/>
            </svg>
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 200" style="position:absolute; width:100%; height:33vh; top:92vh; z-index:0;">
                <polyline class="cls-1 spacer-line" points="230 0 230 200" style="stroke-dasharray: 2000px 10000px;"/>
            </svg>
        </div>
    </div>

    <div class="spacer">
        <div class="content">
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 300">
                <polyline class="cls-1 spacer-line" points="230 0 230 200 4 200 4 300" />
            </svg>
        </div>
    </div>


    <div class="full" id="pg-2">
        <div class="content">
            <div class="date" style="bottom:18vh; left:18vw;">1967</div>
            <div class="image-contain" style="bottom:10vh; right:5vw; width:25vw; height:70vh;">
                <div class="image" style="background-image: url('/wp-content/custom-front-page/marathon.jpg');"></div>
                <svg class="outlines" preserveAspectRatio="none" viewbox="0 0 300 200" overflow="visible">
                    <rect vector-effect="non-scaling-stroke" x=25 y=-12 width="300" height="200" class="outline-stroke" />
                    <rect vector-effect="non-scaling-stroke" x=50 y=-24 width="300" height="200" class="outline-stroke" />
                    <rect vector-effect="non-scaling-stroke" x=75 y=-36 width="300" height="200" class="outline-stroke" />
                </svg>
            </div>
            <div class="text slide-left" style="top:7vh; left:3vw; width:36vw;">
                Since its inception in 1897, no woman had been permitted to compete in the Boston Marathon. Kathrine “Kathy” Switzer signed in as K.V. Switzer, and moved along to the starting line. Despite officials attempting to pull her off of the course, Switzer eluded them,  becoming the first woman to complete the Boston marathon.
                <br><br>
                <div class="quote"><i>
                    “Sports up to that time had been a masculine domain ... Certainly, if [a woman] participated in sports long enough, she's going to grow hair, her legs are going to get all muscular and maybe her uterus was going to fall out.”
                    <br>
                    —Kathrine Switzer
                </i></div>
            </div>
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 1000">
                <polyline style="clip-path: url(#clipPath);" class="cls-1 segment2" points="4 0 4 830 600 830 600 1000"/>
            </svg>
        </div>
    </div>

    <div class="spacer">
        <div class="content">
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 500">
                <polyline class="cls-1 spacer-line" points="600 0 600 500"/>
            </svg>
        </div>
    </div>

    <div class="full" id="pg-3">
        <div class="content">
            <div class="date" style="bottom:15vh; right:15vw;">1968</div>
            <div class="image-contain" style="bottom:15vh; left:10vw; width:27vw; height:65vh;">
                <div class="image" style="background-image: url('/wp-content/custom-front-page/olympics.jpg');"></div>
                <svg class="outlines" overflow="visible">
                    <circle cx=-115 cy=-50 r="100" height="200" class="outline-stroke" />
                    <circle cx=-115 cy=180 r="100" height="200" class="outline-stroke" />
                    <circle cx=-115 cy=410 r="100" height="200" class="outline-stroke" />
                    <circle cx=-5 cy=65 r="100" height="200" class="outline-stroke" />
                    <circle cx=-5 cy=295 r="100" height="200" class="outline-stroke" />
                </svg>
            </div>
            <div class="text slide-left" style="top:8vh; right:3vw; width:30vw;">
                Described as one of the most overtly political statements in the history of the modern Olympics, Tommie Smith and John Carlos each raised their fists during the playing of “The Star-Spangled Banner” in the 1968 Olympics Medal Ceremony. Smith won the 200 meter track & field race, setting the world record time, and Carlos followed in third place. Smith regards his choice not as a Black Power salute alone, but rather as a Human Rights salute.
            </div>
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 1000">
                <polyline class="cls-1 segment2" points="600 0 600 850 1090 850 1090 1000"/>
            </svg>
        </div>
    </div>

    <div class="spacer">
        <div class="content">
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 500">
                <polyline class="cls-1 spacer-line" points="1090 0 1090 500"/>
            </svg>
        </div>
    </div>

    <div class="full" id="pg-4">
        <div class="content">
            <div class="date" style="top:31.5vh; right:16vw;">1973</div>
            <div class="image-contain" style="top:10vh; left:5vw; width:27vw; height:80vh;">
                <div class="image" style="background-image: url('/wp-content/custom-front-page/billiejeanking.jpg'); background-position: 80%;"></div>
                <svg class="outlines" preserveAspectRatio="none" viewbox="0 0 300 200" overflow="visible">
                    <polyline vector-effect="non-scaling-stroke" transform="translate(-387 10)" points="320 0 320 150 430 150 320 0" class="outline-stroke" />
                    <polyline vector-effect="non-scaling-stroke" transform="translate(-368 35)" points="320 0 320 150 430 150" class="outline-stroke" />
                    <polyline vector-effect="non-scaling-stroke" transform="translate(-350 60)" points="320 0 320 150 430 150 370 60" class="outline-stroke" />
                </svg>
            </div>
            <div class="text slide-left" style="top:55vh; right:0vw; width:36.5vw;">
                Billie Jean King famously defeated Bobby Riggs in the 1973 “The Battle of the Sexes”, proving her point that male and female US Open Champions deserve an equal reward. She advocated on behalf of women, threatening to lead a boycott of the US Open if her demands were not met. She also founded the Women’s Tennis association and was the first prominent female athlete to come out as gay.
            </div>
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 1000">
                <polyline class="cls-1 segment2" points="1090 0 1090 150 550 500 550 1000"/>
            </svg>
        </div>
    </div>

    <div class="spacer">
        <div class="content">
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 500">
                <polyline class="cls-1 spacer-line" points="550 0 550 500"/>
            </svg>
        </div>
    </div> 

    <div class="full" id="pg-5">
        <div class="content">
            <div class="date" style="top:20vh; left:15vw;">2016</div>
            <div class="image-contain" style="bottom:10vh; right:5vw; width:27vw; height:70vh;">
                <div class="image" style="background-image: url('/wp-content/custom-front-page/manuel.jpg'); background-position: 75% 100%;"></div>
                <svg class="outlines" overflow="visible">
                    <path xmlns="http://www.w3.org/2000/svg" class="outline-stroke" transform="translate(90 -60)" d="M.42021,10.57582c8.66331-13.43443,22.7093-13.43443,31.37261,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37261,0l0,0c8.6633,13.43443,22.7093,13.43443,31.37261,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0"/>
                    <path xmlns="http://www.w3.org/2000/svg" class="outline-stroke" transform="translate(110 -10)" d="M.42021,10.57582c8.66331-13.43443,22.7093-13.43443,31.37261,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37261,0l0,0c8.6633,13.43443,22.7093,13.43443,31.37261,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0"/>
                    <path xmlns="http://www.w3.org/2000/svg" class="outline-stroke" transform="translate(130 40)" d="M.42021,10.57582c8.66331-13.43443,22.7093-13.43443,31.37261,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37261,0l0,0c8.6633,13.43443,22.7093,13.43443,31.37261,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0"/>
                    <path xmlns="http://www.w3.org/2000/svg" class="outline-stroke" transform="translate(150 90)" d="M.42021,10.57582c8.66331-13.43443,22.7093-13.43443,31.37261,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37261,0l0,0c8.6633,13.43443,22.7093,13.43443,31.37261,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0l0,0c8.66331,13.43443,22.70931,13.43443,31.37262,0l0,0c8.66331-13.43443,22.70931-13.43443,31.37262,0"/>
                </svg>
            </div>
            <div class="text slide-left" style="top:48vh; left:3.5vw; width:30vw;">
                Simone Manuel’s historic victory in the 100 meter freestyle in 2016 marks the first time a Black woman has won an individual medal in the Olympics for swimming. She tied for the Gold Medal with Penny Oleksiak, setting an Olympic record time.
            </div>
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 1000">
                <polyline class="cls-1 segment2" points="550 0 550 200 4 200 4 1000"/>
            </svg>
        </div>
    </div>

    <div class="spacer">
        <div class="content">
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 500">
                <polyline class="cls-1 spacer-line" points="4 0 4 500"/>
            </svg>
        </div>
    </div> 

    <div class="full" id="pg-6">
        <div class="content">
            <div class="date" style="bottom:18vh; left:18vw;">2016</div>
            <div class="image-contain" style="bottom:10vh; right:5vw; width:25vw; height:70vh;">
                <div class="image" style="background-image: url('/wp-content/custom-front-page/kaepernick.jpg');"></div>
                <svg class="outlines" preserveAspectRatio="none" viewbox="0 0 300 200" overflow="visible">
                    <rect vector-effect="non-scaling-stroke" x=25 y=-12 width="300" height="200" class="outline-stroke" />
                    <rect vector-effect="non-scaling-stroke" x=50 y=-24 width="300" height="200" class="outline-stroke" />
                    <rect vector-effect="non-scaling-stroke" x=75 y=-36 width="300" height="200" class="outline-stroke" />
                </svg>
            </div>
            <div class="text slide-left" style="top:7vh; left:3vw; width:36vw;">
                In a preseason game on August 26, 2016, San Francisco 49ers Quarterback Colin Kaepernick took a knee during the playing of the National Anthem. He continued this act of protest in the following weeks.
                <br><br>
                <div class="quote"><i>
                    “I am not going to stand up to show pride in a flag for a country that oppresses black people and people of color. To me, this is bigger than football, and it would be selfish on my part to look the other way. There are bodies in the street and people getting paid leave and getting away with murder.”
                    <br>
                    —Colin Kaepernick
                </i></div>
            </div>
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 1000">
                <polyline class="cls-1 segment2" points="4 0 4 830 550 830 550 1000"/>
            </svg>
        </div>
    </div>

    <div class="spacer">
        <div class="content">
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 300">
                <polyline class="cls-1 spacer-line" points="550 0 550 300" />
            </svg>
        </div>
    </div>

    <div class="full" id="pg-7">
        <div class="content" style="height:160vh;">
            <div class="date" id="present" style="top:20vh; left:37.2vw; height:17vh; width:20vw; font-size:15vh; margin-bottom:15vh;">Present</div>
            <div class="image-text slide-left" style="top:50vh; left:43.5vw;">
                <div class="image2" style="background-image: url('/wp-content/custom-front-page/elijah.jpg'); background-position: 75% 100%;">
                    <div class="it-rect"></div>
                </div>
                
                <p1><date1>August 24, 2019</date1>Elijah McClain killed</p1>
            </div>
            <div class="image-text slide-right itr" style="top:75vh; right:39vw;">
                <div class="image2" style="background-image: url('/wp-content/custom-front-page/ahmaud.jpg'); background-position: 75% 100%;">
                    <div class="it-rect"></div>
                </div>
                
                <p1><date1>February 23, 2020</date1>Ahmaud Arbery killed</p1>
            </div>
            <div class="image-text slide-left" style="top:100vh; left:43.5vw;">
                <div class="image2" style="background-image: url('/wp-content/custom-front-page/breonna.jpg'); background-position: 75% 100%;">
                    <div class="it-rect"></div>
                </div>
                
                <p1><date1>March 13, 2020</date1>Breonna Taylor killed</p1>
            </div>
            <div class="image-text slide-right itr" style="top:125vh; right:39vw;">
                <div class="image2" style="background-image: url('/wp-content/custom-front-page/floyd.jpg'); background-position: 75% 100%;">
                    <div class="it-rect"></div>
                </div>
                
                <p1><date1>May 25, 2020</date1>George Floyd killed</p1>
            </div>
            <svg class="line-bg" preserveAspectRatio="none" viewBox="0 0 1095 1000">
                <polyline class="cls-1 segment2" points="550 0 550 1000"/>
            </svg>
            <svg class="no-mobile" preserveAspectRatio="xMaxYMax" style="width:20px; height:20px; position:absolute; bottom:0vh; left:40.2vw; margin-left:-10px;">>
                <circle preserveAspectRatio="xMinYMin" cx=10 cy=10 r=10 style="fill:white;"/>
            </svg>
        </div>
    </div>

    <div class="full" id="pg-8">
        <div class="content" style="height:140vh">
            <div class="image-contain" style="top:30vh; left:20vw; width:40vw; height:50vh;">
                <div class="image no-animate-mobile" style="background-image: url('/wp-content/custom-front-page/ahmaud-shooting.jpg');"></div>
            </div>
            <div class="text slide-left" style="top:85vh; left:10vw; width:60vw;">
                In the aftermath of Ahmaud Arbery’s death, a challenge known as “I run with Maud” gained popularity, in which athletes ran 2.23 miles to raise awareness for Arbery and the day he was killed- February 23.
                <br><br>
                Thousands of athletes came together for this cause, and have since rallied within their communities to work towards disassembling racist systems and institutions.  Athletes have powerful voices, and we encourage you to use yours.
            </div>
        </div>
    </div>

    <div class="full" id="pg-9">
        <div class="content" style="height:60vh;">
            <div class="date" id="our-mission" style="top:20vh; left:17vw; height:17vh; width:60vw; font-size:15vh; margin-bottom:15vh; background:none;">
                Our Mission
                <div class="heading-emphasis"></div>
            </div>
            <div class="text slide-left" style="top:30vh; left:10vw; width:60vw;">
                Athletes have a special platform in the United States, as they are often seen as role models for their athletic endeavors and abilities. Those same athletes have thoughts, perspectives, and lives that too frequently goes unnoticed.
                <br><br>
                At Athletes for Equal Rights, we aim to showcase the experiences of minority athletes as individuals, shed light on relevant social justice issues, and give meaning to statistics through physical activity, which impact the daily life of many athletes.
            </div>
        </div>
    </div>

    <div class="full" id="pg-10">
        <div class="content" id="page-selector" style="overflow: hidden;">
            <a href="/category/workouts/" class="section">
                <svg class="outlines" width="100%" height="100%" viewBox="0 0 68 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"><path class="outline-stroke" d="M17.186,64.947c-0,-0 13.707,-0.217 17.738,-0.101c4.03,0.117 5.62,-1.17 6.951,-3.417c1.194,-2.015 -0.293,-5.419 -1.104,-6.554l-10.378,-15.631l-0.045,-0.06c-0,-0 16.781,-11.816 18.176,-12.849c-0.653,0.483 -3.549,2.544 -6.22,4.442c-2.02,1.434 -3.912,2.775 -4.609,3.269c0.021,2.134 0.148,3.956 1.548,5.813c1.361,1.805 3.213,1.899 3.213,1.899c0,-0 16.303,-0.357 17.876,-0.877c1.293,-0.427 4.673,-1.402 4.089,-5.579c-0.584,-4.176 -3.33,-4.118 -3.33,-4.118l-11.742,-0.467l-0.825,-4.382c0.964,-1.023 0.875,-1.837 0.829,-2.863c-0.106,-2.362 -2.167,-6.427 -2.167,-6.427c-1.027,-1.592 -1.623,-3.487 -1.623,-5.521c-0,-5.632 4.572,-10.205 10.205,-10.205c5.632,0 10.205,4.573 10.205,10.205c-0,5.632 -4.573,10.205 -10.205,10.205c-3.599,0 -6.144,-1.282 -8.253,-4.136l-4.375,-6.107l-15.574,-9.927c-0,0 -19.511,1.883 -20.31,2.168c-0.798,0.285 -5.99,1.541 -5.936,5.933c0.053,4.393 4.624,4.364 4.624,4.364l18.598,0l3.024,2.397c-0,-0 -13.075,9.448 -14.206,10.611c-2.053,2.11 -2.224,3.137 -2.339,6.104c-0.102,2.652 2.225,5.876 2.225,5.876l9.527,13.549c0,-0 -10.953,0.399 -14.433,0.342c-3.48,-0.057 -6.846,1.54 -7.017,6.504c-0.171,4.963 6.104,5.305 6.104,5.305l4.45,0.228c0,0 -6.617,7.873 -6.96,8.044c-0.342,0.171 -3.993,5.762 0,9.071c3.994,3.309 8.329,-0.628 8.329,-0.628l16.773,-16.258" style="fill:none;stroke:#f6eb14;stroke-width:1.5px;"/></svg>
                <t><br>Workouts</t>
                <p>Making statistics tangible through exercise</p>
            </a>
            <a href="/stories/" class="section">
                <svg class="outlines" width="100%" height="100%" viewBox="0 0 65 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"><path class="outline-stroke" d="M44.158,49.691l-30.736,0c-2.457,0 -4.448,-1.991 -4.448,-4.448c-0,-0.09 -0,-0.181 -0,-0.271c-0,-2.457 1.991,-4.448 4.448,-4.448l37.766,-0c2.456,-0 4.448,-1.992 4.448,-4.448l-0,-0.272c-0,-2.456 -1.992,-4.448 -4.448,-4.448l-37.766,0c-2.457,0 -4.448,-1.991 -4.448,-4.447l-0,-0.272c-0,-2.457 1.991,-4.448 4.448,-4.448l37.885,0c2.457,0 4.448,-1.991 4.448,-4.448l0,-0.268c0,-1.179 -0.469,-2.311 -1.303,-3.145c-0.834,-0.834 -1.965,-1.303 -3.145,-1.303l-45.54,0c-1.179,0 -2.311,0.469 -3.145,1.303c-0.834,0.834 -1.303,1.966 -1.303,3.145c0,12.661 0,48.797 0,61.458c0,1.18 0.469,2.311 1.303,3.145c0.834,0.834 1.966,1.303 3.145,1.303c11.385,-0 41.484,-0 52.869,-0c1.18,-0 2.311,-0.469 3.145,-1.303c0.835,-0.834 1.303,-1.965 1.303,-3.145c0,-14.283 0,-58.881 0,-73.164c0,-1.179 -0.468,-2.311 -1.303,-3.145c-0.834,-0.834 -1.965,-1.303 -3.145,-1.303c-11.385,0 -41.484,0 -52.869,0c-1.179,0 -2.311,0.469 -3.145,1.303c-0.834,0.834 -1.303,1.966 -1.303,3.145l0,3.217" style="fill:none;stroke:#f6eb14;stroke-width:1.5px;"/></svg>
                <t><br>Stories</t>
                <p>Read the stories of minority athletes</p>
            </a>
            <a href="/resources/" class="section">
                <svg class="outlines" width="100%" height="100%" viewBox="0 0 87 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"><path class="outline-stroke" d="M30.367,52.971c-0,0 16.62,-0.705 24.986,-1.059c2.624,-0.112 4.694,-2.271 4.694,-4.898l0,0c0,-2.707 -2.194,-4.902 -4.901,-4.902l-9.905,0c-5.252,-0.076 -6.526,-3.885 -14.693,-4.528c-7.295,-0.575 -14.364,7.003 -14.364,7.003l-14.865,13.935l9.696,11.783l13.062,-7.574l30.171,-0c3.216,-0 6.334,-1.11 8.826,-3.144c5.336,-4.353 14.943,-12.189 20.485,-16.71c1.108,-0.904 1.797,-2.223 1.905,-3.649c0.108,-1.426 -0.374,-2.834 -1.334,-3.895c-0,0 -0,-0 -0,-0c-1.84,-2.033 -4.939,-2.295 -7.094,-0.6c-5.964,4.694 -16.8,13.222 -16.8,13.222c0,-0 3.912,-3.079 6.574,-5.174c0.632,-0.497 1.035,-1.23 1.116,-2.031c0.08,-0.8 -0.168,-1.598 -0.688,-2.212c-0.015,-0.018 -0.031,-0.037 -0.046,-0.055c-1.023,-1.207 -2.814,-1.397 -4.068,-0.432c-2.355,1.814 -5.721,4.407 -5.721,4.407c-0,-0 -13.275,-13.275 -22.161,-22.161c-2.077,-2.077 -3.244,-4.894 -3.244,-7.831c0,-2.937 1.167,-5.754 3.244,-7.831c0.001,-0.001 0.002,-0.001 0.002,-0.002c2.077,-2.077 4.894,-3.244 7.831,-3.244c2.937,0 5.754,1.167 7.831,3.244c1.147,1.147 1.951,1.95 1.951,1.95c-0,0 0.843,-0.841 2.037,-2.032c4.327,-4.314 11.33,-4.308 15.651,0.012c0.024,0.024 0.047,0.048 0.071,0.071c4.325,4.325 4.325,11.337 0,15.662c-7.361,7.362 -17.256,17.257 -17.256,17.257" style="fill:none;stroke:#f6eb14;stroke-width:1.5px;"/></svg>
                <t><br>Get Involved</t>
                <p>See how you can make a difference</p>
            </a>
        </div>
    </div>

</div>
