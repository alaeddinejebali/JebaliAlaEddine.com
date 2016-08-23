<!-- START OF LEFT PANEL -->
<div class="leftpanel">

	<div class="logopanel">
		<a href="/"><img src="/assets/images/logo.png" alt="Ala Eddine JEBALI" /></a>
	</div>
	<!--logopanel-->

	<div class="menupanel">
		<ul>
            <?php if (!empty($_SESSION['login.loggedUser'])) { ?>
            <li class="<?= $currentActivePage['designPatterns'] ?>"><a
				href="/designpatterns"><span class="iconfa-road"></span> Design
					patterns</a></li>
			<li class="<?= $currentActivePage['frontEnd'] ?>"><a href="#"><span class="iconfa-eye-open"></span> Front-End</a><i
				class="iconfa-angle-right sub-indicator"></i>
				<ul>
					<li><a href="/frontend/angularjs1">Angular 1</a></li>
					<li><a href="/frontend/angularjs2">Angular 2</a></li>
					<li><a href="/frontend/javascript">JavaScript</a></li>
					<li><a href="/frontend/nodejs">NodeJS</a></li>
					<li><a href="/frontend/typescript">TypeScript</a></li>
				</ul></li>
			<li class="<?= $currentActivePage['java'] ?>"><a href="company.html"><span class="iconfa-tint"></span> Java/J2EE</a><i
				class="iconfa-angle-right sub-indicator"></i>
				<ul>
					<li><a href="/java/javacore">Core Java</a></li>
					<li><a href="/java/hibernate">Hibernate</a></li>
					<li><a href="/java/spring">Spring</a></li>
				</ul></li>
			<li class="<?= $currentActivePage['oop'] ?>"><a href="/oop"><span class="iconfa-th"></span> OOP</a></li>
			<li class="<?= $currentActivePage['php'] ?>"><a href="#"><span class="iconfa-refresh"></span> PHP</a><i
				class="iconfa-angle-right sub-indicator"></i>
				<ul>
					<li><a href="/php/php5">PHP5</a></li>
					<li><a href="/php/symfony">Symfony</a></li>
				</ul></li>
			<li class="<?= $currentActivePage['web'] ?>"><a href="company.html"><span class="iconfa-picture"></span> Web</a><i
				class="iconfa-angle-right sub-indicator"></i>
				<ul>
					<li><a href="/web/firefox-addons">Firefox addons</a></li>
					<li><a href="/web/tips-web">Trucs web</a></li>
				</ul></li>
			<li class="<?= $currentActivePage['xml'] ?>"><a href="/xml"><span class="iconfa-random"></span> XML</a></li>
			<li class="<?= $currentActivePage['others'] ?>"><a
				href="company.html"><span class="iconfa-wrench"></span> Others</a><i
				class="iconfa-angle-right sub-indicator"></i>
				<ul>
					<li><a href="/divers/docker">Docker</a></li>
					<li><a href="/divers/git">GIT</a></li>
					<li><a href="/divers/go">Go</a></li>
					<li><a href="/divers/ide">IDE</a></li>
					<li><a href="/divers/linux">Linux</a></li>
				</ul></li>
            <?php } ?>
        </ul>
	</div>
	<!--menupanel-->
</div>
<!--leftpanel-->
