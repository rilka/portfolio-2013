<?php
    // color changer
    function adjust_color($hex, $steps) {
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));

        $r = max(0, min(255, $r + $steps));
        $g = max(0, min(255, $g + $steps));  
        $b = max(0, min(255, $b + $steps));

        $r_hex = str_pad(dechex($r), 2, '0', STR_PAD_LEFT);
        $g_hex = str_pad(dechex($g), 2, '0', STR_PAD_LEFT);
        $b_hex = str_pad(dechex($b), 2, '0', STR_PAD_LEFT);

        return $r_hex . $g_hex . $b_hex;
    }

    // generate random color
    $colors = array("E96A7D", "FF7575", "FF9900", "FEAE02", "EDC951", "7DCE9E", "61D2D6", "CC8099");
    $c = $colors[array_rand($colors)];
    $d = adjust_color($c, -10);
    $s = file_get_contents("styles/style.css");
    $s = str_replace("abcdef", $c, $s);
    $s = str_replace("fdecba", $d, $s);
?>

<!doctype html>

<!-- 
    welcome to my source code! it's nice to meet you*. <3 
    


    *unless you're billy janitsch. GO AWAY BILLY :(
-->

<html>
    <head>
        <title>Angela C. Li</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="scripts.js"></script>
        <noscript>
            <div id="noscript">Looks like you don't have Javascript enabled&mdash;what's up with that?</div>
            <style type="text/css">
                * { visibility: hidden; }
                #noscript { 
                    visibility: visible !important; 
                    margin: 10px;
                }
            </style>
        </noscript>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" type="text/css">        
        <!--<link rel="stylesheet" type="text/css" href="styles/style.css" />-->
        <style type="text/css">
            <?php echo $s; ?>
        </style>
    </head>
    <body>
        <div id="top"></div>
        <div id="wrapper">
            <div id="header">
                <div id="title">
                    <h1><a href="#home">Angela C. Li</a></h1>
                    <p><a href="mailto:angela@angelaconstance.com">angela@angelaconstance.com</a></p>
                </div>
                <div id="navigation">
                    <a href="#about">about</a>                    
                    <a href="#resume">r&eacute;sum&eacute;</a>          
                    <a href="#work">work</a>
                    <a href="#contact">contact</a>
                </div>
            </div>
            <div id="main">
                <div id="home_section">
                    <h2 id="headline">The dreamers will inherit the earth.*</h2>
                    <p id="subtitle"><strong>*</strong>But just in case that doesn't work out, I'm also: a designer, coder, teacher, writer, and maker of things.</p>
                </div>
                <div id="about_section">
                    <div id="about_main">
                        <h2>TL;DR</h2>
                        <div class="tldr">
                            <p>Senior at Harvard studying computer science. In love with design, technology, psychology, and language. Walking Harry Potter encyclopedia.</p>
                        </div>
                        <h2>I really dig ...</h2>
                        <ul class="list">
                            <li>minimalism</li>
                            <li>logic puzzles</li>                            
                            <li>souvenir shops in modern art museums</li>
                            <li>banana matcha smoothies</li>
                            <li>zeugmas</li>
                            <li>sleeping</li>                            
                            <li>the IKEA catalog</li>
                            <li><a href="http://ntris.mit.edu" target="_blank">ntris</a></li>                                                        
                            <li>friendship-ruining board games</li>                            
                            <li><a href="http://www.billyjanitsch.com" target="_blank">Billy Janitsch</a></li>
                        </ul>
                    </div>
                    <div id="about_img">
                        <img src="assets/images/me.jpg" />
                    </div>                    
                </div>
                <div id="resume_section">
                    <div class="download"><a href="assets/Angela Li - Resume.pdf">&#8595; Download PDF</a></div>
                    <div id="resume_first">
                        <h2>Work Experience</h2>
                            <h3>Software Engineering Intern</h3>
                                <h4>Palantir Technologies</h4>
                                <h5>June 2013&mdash;Now</h5>
                                <p>Develop features for Code 33, the Palantir Gotham web client.</p>
                            <h3>Teaching Fellow</h3>
                                <h4>Harvard School of Engineering and Applied Sciences</h4>
                                <h5>Sep 2012&mdash;Now</h5>
                                <p>Lead weekly section of 12 students, grade problem sets and midterms, and hold weekly office hours for CS50: Introduction to Computer Science.</p>
                            <h3>Web Developer</h3>
                                <h4>Freelance</h4>
                                <h5>Aug 2011&mdash;Now</h5>
                                <p>Design and develop websites for clients including Cook Pine Capital, GateSwap, and various student organizations. Created Unfriend Finder, a Facebook application that reached over 350,000 users.</p>
                            <h3>Design + Development Intern</h3>
                                <h4>Flow Asia</h4>
                                <h5>June 2012&mdash;July 2012</h5>
                                <p>Handled information architecture, design prototyping, and front-end development for mobile sites.</p>
                            <h3>Quantitative Reasoning Mentor</h3>
                                <h4>Crimson Summer Academy</h3>
                                <h5>June 2011&mdash;May 2012</h5>   
                                <p>Taught pre-calculus, basic computer programming, and photography to financially disadvantaged high school students. Also served as term-time mentor and led weekly homework help sessions.</p>
                    
                    </div>
                    <div id="resume_second">
                        <h2>Education</h2>
                            <h3>Harvard University</h3>
                                <h4>A.B. in Computer Science, expected May 2014</h4>
                                <h5>Concentration GPA: 3.79</h5>
                                <a href="" id="courses_link">Mouse over for relevant coursework</a>
                                <div class="courses">
                                    <ul>
                                        <li>CS50: Intro to CS</li>
                                        <li>CS51: Abstraction and Design</li>
                                        <li>CS171: Visualization</li>
                                        <li>CS61: Systems Programming</li>
                                        <li>CS121: Theory of Computation</li>
                                        <li>STAT110: Probability</li>
                                        <li>CS124: Data Structures and Algorithms</li>
                                        <li>CS181: Machine Learning</li>
                                        <li>CS187: Computational Linguistics</li>
                                    </ul>
                                </div>
                            <h3>Alpharetta High School</h3> 
                                <h4>Graduated May 2010</h4>
                                <h5>National Merit Scholar + U.S. Presidential Scholar Semifinalist</h5>
                                <p><strong>&rarr; </strong>Graduated May 2010. National Merit Scholar. President of symphony orchestra, Gay-Straight Alliance,  and English honor society. Volunteer at HIV/AIDS clinic and youth empowerment newspaper. Member of varsity math and quiz bowl teams.</p>
                   
                        <h2>Organizations + Activities</h2>
                            <h3>The Harvard Crimson (2011&mdash;)</h3>
                            <h4>Online Design Executive <em>(former Magazine Design Chair)</em></h4>
                            <h3>Women in Computer Science (2012&mdash;)</h3>
                            <h4>Education Chair</h4>
                            <h3>Ballroom Dance Team (2010&mdash;2012)</h3>
                            <h4>Webmaster / Judges' Liaison / competitive dancer</h4>                              
                        <h2>Toolbox</h2>
                            <ul class="list">
                                <li>C</li>
                                <li>Python</li>
                                <li>Javascript / jQuery</li>
                                <li>PHP</li>
                                <li>SQL</li>
                                <li>OCaml</li>
                                <li>Prolog</li>
                                <li>x86 assembly</li>
                                <li>Windows</li>
                                <li>UNIX</li>
                                <li>Wordpress</li>
                                <li>Django</li>
                                <li>Joomla</li>
                                <li><span style="font-family:cmr10, LMRoman10-Regular, Times, serif;">L<span style="text-transform: uppercase; font-size: 70%; margin-left: -0.36em; vertical-align: 0.3em; line-height: 0; margin-right: -0.15em;">a</span>T<span style="text-transform: uppercase; margin-left: -0.1667em; vertical-align: -0.5ex; line-height: 0; margin-right: -0.125em;">e</span>X</span></li>                                
                                <li>HTML / CSS</li>
                                <li>InDesign</li>
                                <li>Photoshop</li>
                                <li>Illustrator</li>                                
                                <li>Mandarin Chinese</li>
                                <li>Spanish</li>
                                <li>French</li>
                                <li>German</li>
                            </ul>
                    </div>
                </div>
                <div id="work_section">
                    <h2>Stuck to the Refrigerator</h2>
                    <p>Here are a few things I've made. (Psst&mdash;I'm always looking for new projects!)</p>
                    <div id="projects">
                        <a href="work/harvardinvestment/" target="_blank">
                            <img src="assets/images/screenshots/hia.png" />
                            <div class="caption">
                                <h3>Redesign of the Harvard Investment Association website.</h3>
                            </div>
                        </a>
                        <a href="work/onlinedesign/" target="_blank">
                            <img src="assets/images/screenshots/odcomp.png" />
                            <div class="caption">
                                <h3>Landing page for the Harvard <em>Crimson</em>'s online design introduction process.</h3>
                            </div>
                        </a>
                        <a href="http://www.growlanka.org/" target="_blank">
                            <img src="assets/images/screenshots/growlanka.png" />
                            <div class="caption">
                                <h3>Brochure website for nonprofit benefiting disaster victims in Sri Lanka.</h3>
                            </div>
                        </a>
                        <a href="http://www.gateswap.com/" target="_blank">
                            <img src="assets/images/screenshots/gateswap.png" />
                            <div class="caption">
                                <h3>Craigslist-style marketplace for college students.</h3>
                            </div>
                        </a>
                        <a href="http://www.hrdctheater.com/" target="_blank">
                            <img src="assets/images/screenshots/hrdc.png" />
                            <div class="caption">
                                <h3>A new home on the web for the Harvard-Radcliffe Dramatic Club.</h3>
                            </div>
                        </a>
                        <a href="projects/copy_paste/" target="_blank">
                            <img src="assets/images/screenshots/copypaste.png" />
                            <div class="caption">
                                <h3>Simple text manipulation tool. (With attitude!)</h3>
                            </div>
                        </a>
                        <a href="http://www.unfriendfinder.me/" target="_blank">
                            <img src="assets/images/screenshots/uff.png" />
                            <div class="caption">
                                <h3>Facebook defriending detection app&mdash;served nearly half a million users.</h3>
                            </div>
                        </a>
                        <a href="http://www.cs171.org/2012/final-projects/web/10_CollegeSmash/" target="_blank">
                            <img src="assets/images/screenshots/collegesmash.png" />
                            <div class="caption">
                                <h3>Visualization tool for filtering and comparison of colleges in the United States.</h3>
                            </div>
                        </a>
                        <a href="projects/ver1/" target="_blank">
                            <img src="assets/images/screenshots/ver1.png" />
                            <div class="caption">
                                <h3>First iteration of personal website&mdash;still alive for the curious!</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="contact_section">
                    <div id="contact_side">
                        <h2>Social Butterfly</h2>
                        <a href="http://www.linkedin.com/in/angelaconstance">i</a> 
                        <a href="http://angelaconstance.wordpress.com">w</a>  
                        <a href="https://www.facebook.com/angelaconstanceli">f</a> 
                        <a href="https://twitter.com/angelaconstance">t</a> 
                        <a href="http://fauvism.tumblr.com">o</a> 
                        <a href="http://pinterest.com/angelaconstance">&</a> 
                        <p><a href="https://github.com/angelaconstance">Fork me on GitHub</a></p>
                    </div>
                    <div id="contact_main">
                        <h2>Owl Post</h2>
                        <p>I love getting mail, even if it isn't scratched out on parchment and sealed with wax. I read every word that passes through my inbox and promise to respond to your message within 24 hours&mdash;less if there isn't a storm brewing. So type away!</p>
                        <p>You can also email me directly at <a href="mailto:angela@angelaconstance.com">angela@angelaconstance.com</a>.</p>
                        <div id="contact_form">  
                            <form name="contact" action="" method="">  
                              <fieldset>  
                                <label class="field" for="name">Name:</label>
                                <input type="text" name="name" id="name" value="" />
                                <label class="error" for="name">&nbsp; *</label>
                                
                                <label class="field" for="email">Email:</label>
                                <input type="email" name="email" id="email" value="" />
                                <label class="error" for="email">&nbsp; *</label>
                                
                                <label class="field" for="message">Message:</label>
                                <textarea name="message" id="message" value="" rows=7 /></textarea>
                                <label class="error" for="message">&nbsp; *</label>
                                
                                <div class="clear"></div>

                                <input type="submit" name="submit" class="button" value="Off you go, Hedwig!" /><div id="response"></div>
                              </fieldset>  
                            </form>  
                        </div>                                                  
                    </div>
                </div>
            </div>
            <div id="footer">
                With love from <a href="mailto:angela@angelaconstance.com">Angela Li</a>. The color of the moment is <a href="http://www.colourlovers.com/color/<?php echo $c;?>">#<?php echo $c?></a>&mdash;refresh for a makeover!
            </div>
        </div>
    </body>
</html>