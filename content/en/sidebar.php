<!-- START OF LEFT PANEL -->
<div class="leftpanel">
	
    <div class="logopanel">
    	<a href=""><img src="/assets/images/sartana-logo.png" alt="Sartana" /></a>
    </div><!--logopanel-->
    
    <div class="searchpanel">
    	<form action="index.html" method="post">
           <input type="text" name="keyword" placeholder="Search and hit enter..." />
       </form>
   </div><!--searchpanel-->

   <div class="menupanel">
       <ul>
            <li class="current">
                <a href="index.html"><span class="iconfa-home"></span> Home</a>
            </li>
            <li>
                <a href="contact.html"><span class="iconfa-envelope"></span> Portfolio</a>
            </li>
            <li>
                <a href="contact.html"><span class="iconfa-envelope"></span> Certifications</a>
            </li>
            <li>
                <a href="contact.html"><span class="iconfa-envelope"></span> Studies</a>
            </li>
            <li>
                <a href="contact.html"><span class="iconfa-envelope"></span> Contact Me</a>
            </li>
            <li>
                <a href="blog.html"><span class="iconfa-file"></span> Blog</a>
            </li>
            <li><?php echo $_SESSION["loggedUser"]; ?></li>
            <?php if( isset($_SESSION['loggedUser']) ){ ?>
            <li>
                <a href=""><span class="iconfa-star"></span> Wiki</a><i class="iconfa-angle-right sub-indicator"></i>
                <ul>
                    <li>
                        <a href="company.html">Java/J2EE</a><i class="iconfa-angle-right sub-indicator"></i>
                        <ul>
                            <li><a href="company.html">Java</a></li>
                            <li><a href="ourteam.html">Hibernate</a></li>
                            <li><a href="careers.html">Spring</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="company.html">Mobile</a><i class="iconfa-angle-right sub-indicator"></i>
                        <ul>
                            <li><a href="company.html">Android</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="company.html">.Net</a><i class="iconfa-angle-right sub-indicator"></i>
                        <ul>
                            <li><a href="company.html">Framework .Net</a></li>
                            <li><a href="ourteam.html">DNN</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="company.html">PHP</a><i class="iconfa-angle-right sub-indicator"></i>
                        <ul>
                            <li><a href="ourteam.html">CakePHP</a></li>
                            <li><a href="company.html">PHP5</a></li>
                            <li><a href="careers.html">Symfony2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="company.html">Web</a><i class="iconfa-angle-right sub-indicator"></i>
                        <ul>
                            <li>
                                <a href="ourteam.html">JavaScript</a><i class="iconfa-angle-right sub-indicator"></i>
                                <ul>
                                    <li>
                                        <a href="">AngularJS</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ourteam.html">Design</a><i class="iconfa-angle-right sub-indicator"></i>
                                <ul>
                                    <li>
                                        <a href="">Bootstrap</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div><!--menupanel-->
</div><!--leftpanel-->