<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Eclipse</h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>Install Eclipse on Linux</h2>
                <ul>
                    <li>Download Eclipse from <a href="http://www.eclipse.org/downloads/" target="_blank">http://www.eclipse.org/downloads/</a>.</li>
                    <li>We are installing "EclipsePHP".</li>
                    <li>Extract zip file to Desktop</li>
                    <li>sudo mv /Desktop/EclipsePHP /opt/</li>
                    <li>
                    	Create an eclipse executable in your path
                    	<ul>
                    		<li>
                    			<?php include "code/eclipse_code__01.txt"; ?>
                    		</li>
                    	</ul>
                    </li>
                    <li>
                    	Create a gnome menu item
                    	<ul>
                    		<li>
                    			$> sudo nano /usr/share/applications/eclipse.desktop
                    			<?php include "code/eclipse_code__02.txt"; ?>
                    		</li>
                    	</ul>
                    </li>
                    <li>
                    	Launch Eclipse for the first time
                    	<ul>
                    		<li>
                    			Launch Eclipse for the first time
                    			<?php include "code/eclipse_code__03.txt"; ?>
                    		</li>
                    	</ul>
                    </li>
                    <li>Close Eclipse and reopen it from "Start menu".</li>
				</ul>
            </li>
            <li>
            	<h2>Eclipse shortcuts</h2>
            	<ul>
					<li>
						Manage Files and Projects
						<table>
							<tr>
								<td>Ctrl+Shift+R</td>
								<td>Open Resource (file, folder or project)</td>
							</tr>
							<tr>
								<td>Ctrl+Shift+S</td>
								<td>Save all files</td>
							</tr>
							<tr>
								<td>Ctrl+W</td>
								<td>Close current file</td>
							</tr>
							<tr>
								<td>Ctrl+Shift+W</td>
								<td>Close all files</td>
							</tr>
						</table>
					</li>
					<li>
						Editor Window
						<table>
							<tr>
								<td>F12</td>
								<td>Jump to Editor Window</td>
							</tr>
							<tr>
								<td>Ctrl+E</td>
								<td>Show list of open Editors. Use arrow keys and enter to switch</td>
							</tr>
							<tr>
								<td>Ctrl+Page Down/Up</td>
								<td>Switch to next editor / switch to previous editor</td>
							</tr>
							<tr>
								<td>Ctrl+M</td>
								<td>Maximize or un-maximize current Editor Window (also works for other Windows)</td>
							</tr>
						</table>
					</li>
					<li>
						Navigate in Editor
						<table>
							<tr>
								<td>Ctrl+LAURENT</td>
								<td>Go to line</td>
							</tr>
							<tr>
								<td>Ctrl+Q</td>
								<td>Jump to last location edited</td>
							</tr>
							<tr>
								<td>Ctrl+Shift+P</td>
								<td>With a bracket selected: jump to the matching closing or opening bracket</td>
							</tr>
							<tr>
								<td>Ctrl+Arrow Down/Up</td>
								<td>Scroll Editor without changing cursor position</td>
							</tr>
						</table>
					</li>
					<li>
						Edit Text
						<table>
							<tr>
								<td>Ctrl+D</td>
								<td>Delete Line</td>
							</tr>
						</table>
					</li>
					<li>
						Search and Replace
						<table>
							<tr>
								<td>Ctrl+J</td>
								<td>Type a term to search Then use Ctrl+J / Ctrl+shift+J to go up/back</td>
							</tr>
							<tr>
								<td>Ctrl+K/Ctrl+Shift+K</td>
								<td>Ctrl+H then close find window. Then Find previous / next occurrence of search term.</td>
							</tr>
						</table>
					</li>
            	</ul>
            </li>
        </ul>
    </div>
</section>