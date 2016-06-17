<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">Tips and Trics</h1>
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Add SSH key</h2>
				<ul>
					<li>
						
					</li>
				</ul>
			</li>
		</ul>
	
		<ul>
			<li>
				<h2>Define default branch for git push</h2>
				<ul>
					 <li class="noStyle">
		            	<?php include "code/git_code_11.txt"; ?>
					</li>
					<li>
						If you haven't already do that, you may see an error when running git push saying "error: failed to push some refs to... hint: Updates were rejected because a pushed branch tip is behind its remote".
					</li>
				</ul>
			</li>
		</ul>

		<ul>
			<li>
				<h2>Configure 2 GIT accounts on the same PC</h2>
				<ul>
					<li>
						Let's say that you're working for a company C1 and a company C2. We suppose that you've configured globally your account:
		                <?php include "code/git_code_08.txt"; ?>
					</li>
					<li>
		            	Now if you'll work for a C2 project, you can configure a GIT account only for this repository:
		                <?php include "code/git_code_09.txt"; ?>
					</li>
				</ul>
			</li>
		</ul>

		<ul>
			<li>
				<h2>Show GIT configuration by project</h2>
				<ul>
					<li class="noStyle">
						<?php include "code/git_code_10.txt"; ?>
					</li>
				</ul>
			</li>
		</ul>

		<ul>
			<li>
				<h2>Discard changes on file</h2>
				<ul>
					<li class="noStyle">
						<?php include "code/git_code_12.txt"; ?>
					</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<h2>Add an existing project to GitHub</h2>
				<ul>
					<li class="noStyle">
						<?php include "code/git_code_06.txt"; ?>
					</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<h2>Color Git console in Ubuntu</h2>
				<ul>
					<li>update the package index</li>
		            <li class="noStyle">
						Open "home/userName/.gitconfig" file (Ctrl+H to display hidden files) and edit it like this:
		                <?php include "code/git_code_01.txt"; ?>
						If you don't see your "home/userName/.gitconfig" even when you display hidden files "Ctrl+H"
						<?php include "code/git_code_05.txt"; ?>
					</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<h2>Check for remote updates (without doing git pull)</h2>
				<ul>
					<li>Update the remote branch in your repository to point to the latest version
		            	<?php include "code/git_code_02.txt"; ?>
		            </li>
					<li>Show difference against remote
		            	<?php include "code/git_code_03.txt"; ?>
		            </li>
					<li>
						Accept (if you're okay) the remote changes:
		            	<?php include "code/git_code_04.txt"; ?>
		            </li>
					<li>
		            	To be verified if this solution is better
		                <ul>
		                	<li>$> git remote update</li>
		                    <li>$> git status -uno will tell you whether the branch you are tracking is ahead, behind or has diverged. If it says nothing, the local and remote are the same.</li>
		                    <li>$> git show-branch *master will show you the commits in all of the branches whose names end in master (eg master and origin/master).</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<h2>Show file's diffence between master and develop</h2>
				<ul>
					<li class="noStyle"><?php include "code/git_code_07.txt"; ?></li>
					<li>Red lines are lines removed from 'develop' and they are existing for now in 'master'.</li>
					<li>Green lines are lines added in 'develop' and they are not existing for now in 'master'.</li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<h2>See changes before commiting</h2>
				<ul>
					<li class="noStyle"><?php include "code/git_code_13.txt"; ?></li>
				</ul>
			</li>
		</ul>
		
		<ul>
			<li>
				<h2>Push a new local branch to a remote</h2>
				<ul>
					<li class="noStyle"><?php include "code/git_code_14.txt"; ?></li>
				</ul>
			</li>
		</ul>
		
		<h2>"warning: push.default is unset; its implicit value is changing in Git 2.0 from 'matching' to 'simple'. To squelch this message and maintain..."</h2>
		<ul>
			<li>
				To get rid of the message, set push.default:
				<?php include "code/git_code_15.txt"; ?>
			</li>
		</ul>
		
		<h2>Show modified files since last n commits</h2>
		<ul>
			<li class="noStyle"><?php include "code/git_code_17.txt"; ?></li>
		</ul>
		
		<h2>Show modified files between 2 commits</h2>
		<ul>
			<li class="noStyle"><?php include "code/git_code_19.txt"; ?></li>
		</ul>
		
		<h2>Show modification on a file since last n commits</h2>
		<ul>
			<li class="noStyle"><?php include "code/git_code_16.txt"; ?></li>
		</ul>
		
		<h2>Show modifications made in a file between 2 commits</h2>
		<ul>
			<li class="noStyle"><?php include "code/git_code_18.txt"; ?></li>
		</ul>
		
		<h2>Show merge conflicts</h2>
		<ul>
			<li>
				git diff
			</li>
		</ul>
		
	</div>
</section>