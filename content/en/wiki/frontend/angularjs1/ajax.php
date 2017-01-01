<section class="wiki-article" id="ajax">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Web services ($http service)
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>using $http</h2>
				<ul>
					<li>$http is an <i>XMLHttpRequest</i> object for requesting external data.
					</li>
					<li>
						It encapsulates HTTP communications.
					</li>
					<li>Example:
						<ul>
							<li>
								 using this api: <a href="https://api.github.com/users/jebalialaeddine" target="_blank">https://api.github.com/users/jebalialaeddine</a>.
							</li>
							<li>
								Html:
								<ul>
									<li class="noStyle">
								<?php include 'code/angular_02.txt'; ?>
								</li>
								</ul>
							</li>
							<li>
								Bad habit: Blocking approach (synchrone)
								<ul>
									<li class="noStyle">
										<?php include 'code/angular_27.txt'; ?>
									</li>
									<li>
										This is a blocking approach. So if the request takes 3s, the program will blocked during 3s just on that line before moving to the next line of code.
									</li>
								</ul>
							</li>
							<li>
								Good habit (Asynchrone): Use a <a href="/frontend/javascript#promise">promise</a>.
								<ul>
									<li class="noStyle">
										<?php include 'code/angular_01.txt'; ?>
									</li>
									<li>
										This will ouputs "start" the "end" then when data come back they will be used on HTML.
										</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>
					<b>$index</b>, <b>$even</b> and <b>$odd</b> elements
				</h2>
				<ul>
					<li class="noStyle">
						<?php include 'code/angular_02.txt'; ?>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>