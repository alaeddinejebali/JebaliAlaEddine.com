<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Streams and Network Programming<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
				<h2>Accessing Files</h2>
				<ul>
					<li>
						whenever you access a file using <i>fopen()</i>, <i>file()</i>, <i>readfile()</i>, <i>include</i>, <i>require</i> and a multitude of other functions, PHP uses the functionality provided by the streams layer.
					</li>
					<li>
						A file handle: is a reference to an external resource (it means you are not loading the entire file into memory when manipulating it but simply dealing with a reference to it).
						<ul>
							<li>
								It is still best-practice material when it comes to dealing with large files:
								<?php include 'code/php_code_179.txt'; ?>
							</li>
							<li>
								$mode in <i>fopen($file, $mode)</i> can be:
								<ul>
									<li>
										{r, w} or {r+, w+}: Opens the file for {reading only, writing only} or for {reading and writing} and places the file pointer at the <i>beginning</i> of the file.
									</li>
									<li>
										{a} or {a+}: Opens the file for {writing only} and places the file pointer at the <i>ends</i> of the file.
									</li>
									<li>
										{x} or {x+}: Creates a new file for {writing only} or for {reading and writing}
									</li>
								</ul>
							</li>
							<li>
								<li class="caution">
									{a, a+, w, w+}: automatically creates a new file if it doesn't exist; BUT; {x, x+}: Throws an E_WARNING if the file already exists.
								</li>
							</li>
							<li>
								{r, w, a, x}+<b>$modifier</b>
								<ul>
									<li>
										w+b: forces "binary" mode.
									</li>
									<li>
										w+t: a Windows only flag, which will transparently translate UNIX newlines ( \n ) to Windows newlines ( \r\n ).
									</li>
								</ul>
							</li>							
						</ul>
					</li>
					<li>
						Common C-like File Functions
						<ul>
							<li>
								feof()
								<ul>
									<li>
										Used to determine when the internal pointer hits the end of the file:
									</li>
								</ul>
							</li>
							<li>
								fread
								<ul>
									<li>
										Used to read arbitrary data from a file.
									</li>
									<li>
										Unlike <i>fgets()</i>, it does not concern itself with newline characters—it only stops reading data when either the number of bytes specified in its argument have been transferred, or the pointer reaches the end of the file.
										<?php include 'code/php_code_180.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								ftell($fileHandle)
								<ul>
									<li>
										Find the current position of the pointer.
									</li>
								</ul>
							</li>
							<li>
								fseek($fileHandle, $nbrBytesByWhichPointerIsToBeMoved, $positionMove)
								<ul>
									<li>
										Moves file pointer without reading or writing data.
									</li>
									<li>
										The value of <i>$nbrBytesByWhichPointerIsToBeMoved</i> is added to <i>$positionMove</i>.
									</li>
									<li>
										<i>$nbrBytesByWhichPointerIsToBeMoved</i> can be positive or negative.
										<?php include 'code/php_code_181.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								fgetcsv($fileHandle, $optionalLength=0, $optionalDelimiter=',', $optionlEnclosure='"')
								<ul>
									<li>
										Reads a row from $fileHandle (a csv file) into an enumerative array.
										<?php include 'code/php_code_182.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								fputcsv($fileHandle, $optionalLength=0, $optionalDelimiter=',', $optionlEnclosure='"')
								<ul>
									<li>
										writes the elements of an array in CSV format to $fileHandle.
										<?php include 'code/php_code_183.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Simple File Functions
						<ul>
							<li>
								readfile($fileHandle)
								<ul>
									<li>
										Read a file and write it immediately to the script's standard output.
									</li>
									<li>
										It offers much better performance and resource utilization than C-style function.
									</li>
									<li>
										This is useful when you need to include static files.
										<?php include 'code/php_code_185.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								file($fileHandle) <i>and</i> file_get_contents($fileHandle)
								<ul>
									<li>
										Read a file into an array of lines (that is one array element for each line of text in the file).
									</li>
									<li>
										Loading an entire file in memory is not always a good idea (large files require a significant amount of system resources).
										<?php include 'code/php_code_184.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Working with Directories
						<ul>
							<li>
								getcwd()
								<ul>
									<li>
										Get current working directory.
									</li>
								</ul>
							</li>
							<li>
								chdir($path)
								<ul>
									<li>
										Changes the current working directory of the interpreter.
									</li>
									<li>
										Return false when $path points to a directory that doesn't exist, or because the account under which PHP runs does not have the requisite privileges for accessing it.
									</li>
								</ul>
							</li>
							<li>
								mkdir($pathname, $optionalMode=0777, $optionalRecursive=false)
								<ul>
									<li>
										creates a new directory
										<?php include 'code/php_code_186.txt'; ?>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						Controlling File Access
						<ul>
							<li>
								Functions:
								<ul>
									<li>is_dir(): checks if the path is a directory.</li>
									<li>is_executable(): checks if the path is executable.</li>
									<li>is_file(): checks if the path exists and is a regular file.</li>
									<li>is_link(): checks if the path exists and is a symlink.</li>
									<li>is_readable(): checks if the path exists and is readable.</li>
									<li>is_writable(): checks if the path exists and is writable.</li>
									<li>is_uploaded_file(): checks if the path is an uploaded file (sent via HTTP POST).</li>
								</ul>
							</li>
							<li class="caution">
								The results of a call to any of latest functions will be cached, so that two calls to a given function on the same stream resource and during the same script will return the same value, regardless of whether the underlying resource has changed in the meantime.
							</li>
							<li>
								Example: this script below will never stop running:
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_187.txt'; ?>
									</li>
								</ul>
							</li>
							<li>
								The internal cache maintained within PHP for these functions can be cleared by calling clearstatcache().
							</li>
							<li>
								chmod($filePath, $newMode)
								<ul>
									<li>
										Changes $filePath permissions.
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Accessing Network Resources</h2>
				<ul>
					<li>
						One of the strongest points of the streams layer is the fact that the same set of functionality that you use to access files can be used to access a number of network resources (remote URLsor using FTP), often without the need for any special adjustments.
					</li>
					<li>
						Not all file functions may work with a given network resource; for example, you cannot write to an HTTP connection, because doing so is not allowed by the protocol, and would not make sense.
					</li>
					<li>
						Simple Network Access
						<ul>
							<li>
								Example: load up the main page of my website
								<?php include 'code/php_code_188.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						Stream Contexts
						<ul>
							<li>
								
							</li>
						</ul>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>