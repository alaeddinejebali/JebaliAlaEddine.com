<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Programming the Browser
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>The collection of objects that the browser makes available to you
				for use with JavaScript is generally called the Browser Object Model
				(BOM) or like what WCT names Document Object Model (DOM).</li>
			<li>
				<h2>Introduction to the Browser’s Objects</h2>
				<ul>
					<li>
					
					<li><img src="/content/images/javascript/02.png" /></li>
					<li>At the very top of this hierarchy is the window object. You can
						think of this as representing the frame of the browser and
						everything associated with it (scrollbars, navigator bar
						icons...etc).</li>
					<li>Contained inside the window frame is the page. The page is
						represented in the DOM by the <i>document</i>object.
					</li>
					<li>
						<h3>window Object</h3>
						<ul>
							<li>It's a <i>Global object</i> (you don’t need to use its name
								to access its properties and methods.)
							</li>
							<li class="noStyle"><?php include "code/javascript_code_05.txt"; ?></li>
							<li>Any function or variable you defi ne within the global scope
								actually gets appended to the window object.</li>
							<li class="noStyle"><?php include "code/javascript_code_06.txt"; ?></li>
						</ul>
						<h3>history Object</h3>
						<ul>
							<li>It keeps track of each page that the user visits (it enables
								the user to click the browser’s Back and Forward buttons to
								revisit pages).</li>
							<li class="noStyle"><?php include "code/javascript_code_07.txt"; ?></li>
						</ul>
						<h3>location object</h3>
						<ul>
							<li>you can use the methods of the location object to change the
								location and refresh the current page.</li>
							<li class="noStyle"><?php include "code/javascript_code_08.txt"; ?></li>
							<li class="caution"><i>location.replace()</i> and <i>location.href</i>differ
								in that the <i>replace()</i> method removes the current page
								from the history stack and replaces it with the new page you are
								moving to (when you click the Back button in the browser, you
								can’t go back to the original page loaded).</li>
						</ul>
						<h3>navigator Object</h3>
						<ul>
							<li>Perhaps his name would be the “browser object,”</li>
							<li>Using its properties, you can fi nd out which browser,
								version, and operating system the user has.</li>
						</ul>
						<h3>screen Object</h3>
						<ul>
							<li>contains a lot of information about the display capabilities
								of the client machine (height, width, colorDepth)</li>
						</ul>
						<h3>document Object</h3>
						<ul>
							<li>Via this object you can gain access to the HTML elements,
								their properties and methods inside your page.</li>
							<li class="noStyle"><?php include "code/javascript_code_09.txt"; ?></li>
						</ul>
					</li>
			
			</li>
		</ul>
		</li>
		</ul>
	</div>
</section>