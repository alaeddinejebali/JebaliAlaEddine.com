<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#typedefinition">Type definition</a>
		</h4>
	</div>
	<div id="typedefinition" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>When you need a <i>".d.ts"</i> file?</h2>
					<ul>
						<li>
							Typescript contains typing for standard JS object.
						</li>
						<li>
							But Typescript doesn't know about external libraries.
						</li>
						<li>
							You can find typed files in <a href="https://github.com/DefinitelyTyped/DefinitelyTyped" target="_blank">https://github.com/DefinitelyTyped/DefinitelyTyped</a>.
						</li>
					</ul>
				</li>
				<li id="jquery">
					<h2>Example use jQuery in your typescript project</h2>
					<ul>
						<li>
							file.html
							<ul>
								<li class="noStyle">
									<?php include 'code/05.txt'; ?>
								</li>
							</ul>
						</li>
						<li>
							Download <a href="https://github.com/DefinitelyTyped/DefinitelyTyped/blob/master/jquery/jquery.d.ts" target="_blank">https://github.com/DefinitelyTyped/DefinitelyTyped/blob/master/jquery/jquery.d.ts</a>
						</li>
						<li>
							Put it in a folder like "typings".
						</li>
						<li>
							file.ts
							<ul>
								<li class="noStyle">
									<?php include 'code/06.txt'; ?>
								</li>
							</ul>
						</li>
						<li>
							Remark at the end of the file jquery.d.ts you have
							<ul>
								<li class="noStyle">
									<?php include 'code/07.txt'; ?>
								</li>
							</ul>
						</li>
						<li>
							You can now use "$" element or declare a new variable which will be used instead of "$".
							<?php include 'code/19.txt'; ?>
						</li>
						<li>
							See <a href="#declare">"declare" keyword</a> section.
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>								
</div>