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
									{a, a+, w, w+}: automatically creates a new file if it doesn’t exist; BUT; {x, x+}: Throws an E_WARNING if the file already exists.
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
								
							</li>
						</ul>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>