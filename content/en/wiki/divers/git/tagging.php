<h2>Tagging</h2>
<ul>
	<li>
		Git has the ability to tag specific points in history as being important.
	</li>
	<li>
		Typically people use this functionality to mark release points (v1.0, and so on).
	</li>
	<li>
		By default, the git push command doesn’t transfer tags to remote servers. See <a href="#pushTags">Push Tags</a>
	</li>
	<li>
		By default, when creating a tag, it'll be assigned to <b>last commit</b>... but GIT offers the ability of <a href="#taggingLater">Tagging later</a>.
	</li>
	<li>
		<h3>Listing available tags</h3>
		<ul>
			<li>
				$> git tag
			</li>
			<li>
				This command lists the tags in alphabetical order. The order in which they appear has no real importance.
			</li>
		</ul>
	</li>
	<li>
		<h3>Search Tags using a pattern</h3>
		<ul>
			<li>
				Search only the 1.8 series
				$> git tag -l "v1.8.*"
			</li>
		</ul>
	</li>
	<li>
		<h3>Show made changes on Tag</h3>
		<ul>
			<li>
				$> git show "v1.0.2"
			</li>
		</ul>
	</li>
	<li>
		<h3>Create Tags</h3>
		<ul>
			<li>
				Git uses 2 types of tags: lightweight and annotated.
				<ol>
					<li>
						Lightweight tag
						<ul>
							<li>
								It's just a pointer to a specific commit.
							</li>
							<li>
								It's very much like a branch that doesn't change.
							</li>
							<li>
								$> git tag v1.5.a
							</li>
						</ul>
					</li>
					<li>
						Annotated tag
						<ul>
							<li>
								Contain the tagger name, email, date and a tagging message.
							</li>
							<li>
								 It's generally recommended that you create annotated tags so you can have all this information.
							</li>
							<li>
								$> git tag -a v2.6 -m "my version 2.6"
							</li>
						</ul>
					</li>
				</ol>
			</li>
		</ul>
	</li>
	<li id="taggingLater">
		<ul>
			<li>
				Use git log to display your commits id
				$> git tag -a v7.0.2 <commitId> -m <aMessage>
			</li>
		</ul>
	</li>
	<li id="pushTags">
		<h3>Push tags</h3>
		<ul>
			<li>
				By default, the <b><i>git push</i></b> command doesn’t transfer tags to remote servers.
			</li>
			<li>
				You have to explicitly push tags to a shared server after you have created them.
			</li>
			<li>
				 This process is just like sharing remote branches.
			</li>
			<li>
				To push a specific tag:
				$> git push origin v5.2.6
			</li>
			<li>
				Transfer all tags to remote server that are not already there:
				$> git push origin --tags
			</li>
		</ul>
	</li>
	<li>
		<h3>Checkout tag</h3>
		<ul>
			<li>
				$> git checkout tags/<tagName>
				To get back
				$> git checkout master
			</li>
		</ul>
	</li>
</ul>
