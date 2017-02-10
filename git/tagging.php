<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#tagging">Tagging</a>
		</h4>
	</div>
	<div id="tagging" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
			<ul>
				<li>
					<h2>Introduction</h2>
					<ul>
						<li>
							Git has the ability to tag specific points in history as being important.
						</li>
						<li>
							Typically people use this functionality to mark release points (v1.0, and so on).
						</li>
						<li>
							Tags functionalities are similar to branches.
						</li>
						<li>
							Tags are independants from branches: when you are on branch	develop and add a Tag, when you switch to master branch you'll see this Tag too.
						</li>
						<li>
							By default, the git push command doesn't transfer tags to remote servers. See <a href="#pushTags">Push Tags</a>
						</li>
						<li>
							By default, when creating a tag, it'll be assigned to <u>last commit</u>... but GIT offers the ability of <a href="#taggingLater">Tagging later</a>.
						</li>
					</ul>
				</li>
				<li>
					<h2>Listing available tags</h2>
					<ul>
						<li class="noStyle"><?php include 'code/git_code_20.txt'; ?></li>
						<li>This command lists the tags in alphabetical order. The order in which they appear has no real importance.</li>
					</ul>
				</li>
				<li>
					<h2>Search Tags using a pattern</h2>
					<ul>
						<li>Search only the 1.8 series <?php include 'code/git_code_29.txt'; ?></li>
					</ul>
				</li>
				<li>
					<h2>Show made changes on Tag</h2>
					<ul>
						<li class="noStyle"><?php include 'code/git_code_21.txt'; ?></li>
					</ul>
				</li>
				<li>
					<h2>Create Tags</h2>
					<ul>
						<li>Git uses 2 types of tags: lightweight and annotated.
							<ol>
								<li>Lightweight tag
									<ul>
										<li>It's just a pointer to a specific commit.</li>
										<li>It's very much like a branch that doesn't change.</li>
										<li class="noStyle"><?php include 'code/git_code_22.txt'; ?></li>
									</ul>
								</li>
								<li>Annotated tag
									<ul>
										<li>Contain the tagger name, email, date and a tagging message.
										</li>
										<li>It's generally recommended that you create annotated tags
											so you can have all this information.</li>
										<li class="noStyle"><?php include 'code/git_code_23.txt'; ?></li>
									</ul>
								</li>
							</ol>
						</li>
					</ul>
				</li>
				<li id="taggingLater">
					<h2>Tagging later</h2>
					<ul>
						<li>Use git log to display your commits id, then use: <?php include 'code/git_code_24.txt'; ?></li>
					</ul>
				</li>
				<li id="pushTags">
					<h2>Push tags</h2>
					<ul>
						<li>By default, the <b><i>git push</i></b> command doesn’t transfer
							tags to remote servers.
						</li>
						<li>You have to explicitly push tags to a shared server after you
							have created them.</li>
						<li>This process is just like sharing remote branches.</li>
						<li>To push a specific tag: <?php include 'code/git_code_25.txt'; ?></li>
						<li>Transfer all tags to remote server that are not already there:<?php include 'code/git_code_28.txt'; ?>
							</li>
					</ul>
				</li>
				<li>
					<h2>Checkout tag</h2>
					<ul>
						<li class="noStyle"><?php include 'code/git_code_26.txt'; ?></li>
						<li>
							 To get back:
							 <?php include 'code/git_code_27.txt'; ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>

