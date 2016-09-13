<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Database programming
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Introduction to SQL: Structured Query Language</h2>
				<ul>
					<li>SQL is the most common database manipulation language (DML).</li>
					<li>Table index vs Table primary key
						<ul>
							<li>Let's say that we have an Employee table. The 'employeeID' is
								the Primary Key for our table as that is what we will use to
								uniquely identify an employee.</li>
							<li>If we were to search the table based on the
								'employeeLastName' the database would need to read the entire
								table from the disk into memory so that we can find the few
								employees that have the correct last name. Now if we create an
								index on the LastName column when we run the same query, the
								database only needs to load the index from the disk into memory,
								which will be much quicker, and instead of scanning through the
								entire table looking for matches, because the values in the
								index are already sorted the database engine can go to the
								correct location within the index and find the matching records
								very quickly.</li>
							<li>A table can't has multiple rows with the same primary key but
								it can has multiples rows with the same index.n</li>
						</ul>
					</li>
					<li>Relationships
						<ul>
							<li>One-to-one: Each row table A is linked to 1 and only 1 row in
								table B.</li>
							<li>One-to-many: Each row in Table A is linked to 0, 1 or many
								rows in Table B.</li>
							<li>Many-to-many: Each row in Table A is linked to 0, 1 or many
								rows in Table B. Each row in Table B is linked to 0, 1 or many
								rows in Table A.</li>
							<li class="caution">SQL language only offers the facilities for
								directly creating one-to-one and one-to-many relationships.
								Many-to-many relationships require a bit of trickery and the use
								of an ""intermediate table" to hold the relationships between
								the parent and child tables.</li>
						</ul>
					</li>
					<li>SQL Data Types
						<ul>
							<li>Numeric
								<ul>
									<li>smallint, int (or integer), real, float.</li>
								</ul>
							</li>
							<li>String
								<ul>
									<li>char: Fixed-length character string.</li>
									<li>varchar: Variable-length character string.</li>
									<li class="caution">However a string column must be given a
										length (usually between 1 and 255 characters), which means
										that any string coming from PHP, where it can have an
										arbitrary length, can be truncated, usuallywithout even a
										warning, thus resulting in the loss of data.</li>
									<li>text: A maximum allowed length but severe limitations on
										search and indexing capabilities.</li>
									<li>
										Single quotation marks are normally escaped using another quotationmark (not all database systems follow this conventio).
										<?php include 'code/php_code_104.txt'; ?>
									</li>
									<li>BLOB: A Binary Large OBject is a collection of binary data
										stored as a single entity in a database management system.
										Blobs are typically images, audio or other multimedia objects,
										though sometimes binary executable code is stored as a blob.</li>
									<li>SQL character strings act differently from PHP strings (SQL
										character strings are "true" text strings, rather than
										collections of binary characters). Therefore, you won't be
										able to store binary data in an SQL string. Most database
										systems provide a separate data type (usually called “BLOB"
										for Binary Large OBject) for this purpose.</li>
								</ul>
							</li>
							<li>Datetime
								<ul>
									<li>It's better to keep all of your date-manipulation
										operations inside the database itself, and only extract dates
										in string form when needed.</li>
								</ul>
							</li>
							<li>NULL
								<ul>
									<li>A column is set to NULL to indicate that it does not
										contain any value (NULL is not the same as 0 , or an empty
										string).</li>
									<li>Columns that allow NULL values cannot be used as part of a
										primary key.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<h2>Creating databases, tables, indices and relationships</h2>
						<ul>
							<li class="noStyle">
								<?php include 'code/php_code_105.txt'; ?>
							</li>
						</ul>
					</li>
					<li>Dropping Objects
						<ul>
							<li>
								Deleting the book table cannot take place until book_chapter is dropped first
								<?php include 'code/php_code_106.txt'; ?>
							</li>
						</ul>
					</li>
					<li>Adding andManipulating Data
						<ul>
							<li class="noStyle">
								<?php include 'code/php_code_107.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>SQL Joins</h2>
				<ul>
					<li>Joins combine data from multiple tables to create a single
						recordset.</li>
					<li>There are two basic types of joins:
						<ul>
							<li>inner joins
								<ul>
									<li>
										Returns rows from both tables only if keys from both tables can be found that satisfies the join conditions.
										<?php include 'code/php_code_108.txt'; ?>
										Rows are returned only if a common value for the isbn column can be found for both tables.
										<ul>
											<li>Book:
												<table class="table table-striped">
													<tr>
														<td>id</td>
														<td>isbn</td>
														<td>title</td>
														<td>author</td>
														<td>publisher</td>
													</tr>
													<tr>
														<td>1</td>
														<td>101</td>
														<td>Understand Java</td>
														<td>Ala Eddine</td>
														<td>Tunisia</td>
													</tr>
													<tr>
														<td>2</td>
														<td>102</td>
														<td>Programming in C</td>
														<td>John Doe</td>
														<td>France</td>
													</tr>
													<tr>
														<td>3</td>
														<td>103</td>
														<td>Good developers</td>
														<td>David Chafik</td>
														<td>USA</td>
													</tr>
													<tr>
														<td>4</td>
														<td>104</td>
														<td>UML Basics</td>
														<td>Marrie Kolee</td>
														<td>Finlande</td>
													</tr>
												</table>
											</li>
											<li>Book_chapter:
												<table class="table table-striped">
													<tr>
														<td>isbn</td>
														<td>chapter_name</td>
														<td>chapter_title</td>
													</tr>
													<tr>
														<td>101</td>
														<td>chapterName_101_01</td>
														<td>chapter_101_01</td>
													</tr>
													<tr>
														<td>101</td>
														<td>chapterName_101_02</td>
														<td>chapter_101_02</td>
													</tr>
													<tr>
														<td>101</td>
														<td>chapterName_101_03</td>
														<td>chapter_101_03</td>
													</tr>
													<tr>
														<td>102</td>
														<td>chapterName_102_01</td>
														<td>chapter_102_01</td>
													</tr>
													<tr>
														<td>102</td>
														<td>chapterName_102_02</td>
														<td>chapter_102_02</td>
													</tr>
													<tr>
														<td>105</td>
														<td>chapterName_105_01</td>
														<td>chapter_105_01</td>
													</tr>
												</table>
											</li>
											<li>Result of join:
												<table class="table table-striped">
													<tr>
														<td>id</td>
														<td>isbn</td>
														<td>title</td>
														<td>author</td>
														<td>publisher</td>
														<td>isbn</td>
														<td>chapter_name</td>
														<td>chapter_title</td>
													</tr>
													<tr>
														<td>1</td>
														<td>101</td>
														<td>Understand Java</td>
														<td>Ala Eddine</td>
														<td>Tunisia</td>
														<td>101</td>
														<td>chapterName_101_01</td>
														<td>chapter_101_01</td>
													</tr>
													<tr>
														<td>1</td>
														<td>101</td>
														<td>Understand Java</td>
														<td>Ala Eddine</td>
														<td>Tunisia</td>
														<td>101</td>
														<td>chapterName_101_02</td>
														<td>chapter_101_02</td>
													</tr>
													<tr>
														<td>1</td>
														<td>101</td>
														<td>Understand Java</td>
														<td>Ala Eddine</td>
														<td>Tunisia</td>
														<td>101</td>
														<td>chapterName_101_03</td>
														<td>chapter_101_03</td>
													</tr>
													<tr>
														<td>2</td>
														<td>102</td>
														<td>Programming in C</td>
														<td>John Doe</td>
														<td>France</td>
														<td>102</td>
														<td>chapterName_102_01</td>
														<td>chapter_102_01</td>
													</tr>
													<tr>
														<td>2</td>
														<td>102</td>
														<td>Programming in C</td>
														<td>John Doe</td>
														<td>France</td>
														<td>102</td>
														<td>chapterName_102_02</td>
														<td>chapter_102_02</td>
													</tr>
												</table>
											</li>
										</ul>
									</li>
									<li class="caution">inner joins only work well with assertive
										conditions—negative conditions often return bizarre-looking
										results.</li>
									<li class="noStyle">
										<?php include 'code/php_code_109.txt'; ?>
										You would probably expect this query to return a list of all the records in the book table that do not have a corresponding set of records in book_chapter. However, the database engine returns a data set that contains an entry for each record in book_chapter that does not match each record in book; the end result is, in fact, a dataset that contains every line in book_chapter repeated many times over.
									</li>
								</ul>
							</li>
							<li>outer joins
								<ul>
									<li>Return all records from one table, while restricting the
										other table to matching records.</li>
									<li>This means that some of the columns in the results will
										contain NULL values.</li>
									<li>There are 2 types of outer-join: left-join and right-join.
									</li>
									<li>Left-Join
										<ul>
											<li>
												Every record in the left table that matches the WHERE clause (if there is one) will be returned regardless of a match made in the ON clause of the right table.
												<?php include 'code/php_code_110.txt'; ?>
											</li>
											<li>Result of Left-join:
												<table class="table table-striped">
													<tr>
														<td>id</td>
														<td>title</td>
														<td>chapter_name</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Understand Java</td>
														<td>chapterName_101_01</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Understand Java</td>
														<td>chapterName_101_02</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Understand Java</td>
														<td>chapterName_101_03</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Programming in C</td>
														<td>chapterName_102_01</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Programming in C</td>
														<td>chapterName_102_02</td>
													</tr>
													<tr>
														<td>NULL</td>
														<td>NULL</td>
														<td>chapterName_105_01</td>
													</tr>
												</table>
											</li>
										</ul>
									</li>
									<li>Right-Join
										<ul>
											<li>Returns all results from the "right" side, restricting
												results from the "left" side to matches of the ON clause.</li>
											<li>
												Here left table is still the 'book_chapter' table, and the right table is still the 'book' table.
												<?php include 'code/php_code_111.txt'; ?>
											</li>
											<li>Result of Right-join:
												<table class="table table-striped">
													<tr>
														<td>id</td>
														<td>title</td>
														<td>chapter_name</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Understand Java</td>
														<td>chapterName_101_01</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Understand Java</td>
														<td>chapterName_101_02</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Understand Java</td>
														<td>chapterName_101_03</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Programming in C</td>
														<td>chapterName_102_01</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Programming in C</td>
														<td>chapterName_102_02</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Good developers</td>
														<td>NULL</td>
													</tr>
													<tr>
														<td>4</td>
														<td>UML basics</td>
														<td>NULL</td>
													</tr>
												</table>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Transactions</h2>
				<ul>
					<li>Are groups of operations that are committed or discarded
						atomically.</li>
					<li>Database engines that implement transactions are often said to
						be ACID-compliant (Atomicity Consistency Isolation Durability).</li>
					<li>
						A transaction starts with a START TRANSACTION statement. From here on, all further operations take place in a sandbox that does not affect any other user or the database , until the transaction is either complete using the COMMIT statement, or undone using ROLLBACK.
						<?php include 'code/php_code_112.txt'; ?>
					</li>
				</ul>
			</li>
			<li>
				<h2>Prepared Statements</h2>
				<ul>
					<li>A prepared statement is, essentially, the template of an SQL
						statement that has been pre-parsed and compiled and is ready to be
						executed by passing it the appropriate data.</li>
					<li>Good for security because you do not mix data and SQL code in
						the same string.</li>
					<li>The process works in three steps:
						<ol>
							<li>Create the prepared statement (replacing your data with a set
								of markers such as question marks).</li>
							<li>Load the data in the statement.</li>
							<li>Execute it.</li>
						</ol>
					</li>
					<li>The 2 advantages of using prepares statements are security and
						performance (since most database engines internally cache prepared
						statements for reuse).</li>
				</ul>
			</li>
			<li>
				<h2>Working With Databases</h2>
				<ul>
					<li>To connect to database engines, PHP offers 2 ways:
						<ul>
							<li>Through a single interface is PDO: PHP Data Objects.</li>
							<li>Through the native driver functions for a specific database.
							</li>
						</ul>
					</li>
					<li>PDO: PHP Data Objects
						<ul>
							<li>The standard distribution of PHP 5.1 and greater includes PDO
								and the drivers for SQLite by default.</li>
							<li>To use other database drivers for PDO (like mySQL, Oracle,
								..etc) you need to install them.</li>
							<li>Once installed, the process for using each driver is, for the
								most part, the same because PDO provides a unified data access
								layer to each of these database engines.</li>
							<li>There is no longer a need for separate mysql_query() or
								pg_query() func- tions. PDO provides a single object-oriented
								interface to these databases.</li>
							<li class="caution">PDO provides the ability to use prepared
								statements and bound parameters even if the database engine
								itself does not support these features.</li>
							<li>Connecting To a Database With PDO
								<ul>
									<li>PDO requires at least a DSN (Data Source Name) formatted
										according to the driver used.</li>
								</ul>
							</li>
							<li>Querying the Database With PDO
								<ul>
									<li>PDO::query(): Retrieve a rseultset.</li>
									<li>PDO::quote(): Escape a value.</li>
									<li>PDO::FETCH_BOTH: is the default statement. It return an
										array containing both associative and numeric indexes.</li>
									<li>PDO::FETCH_OBJ: returns an object of results</li>
									<li>PDO::exec(): executes an SQL statement and returns the
										number of rows affected.</li>
									<li>example
										<ul>
											<li class="noStyle">
												<?php include 'code/php_code_114.txt'; ?>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>Prepared Statements and Bound Parameters With PDO
								<ul>
									<li>
										If a database does not support prepared statements, PDO will internally emulate the functionality.
										<?php include 'code/php_code_115.txt'; ?>
										By telling mysql what type of data to expect, we minimize the risk of SQL injections.
										<ul>
											<li>i - integer</li>
											<li>d - double</li>
											<li>s - string</li>
											<li>b - BLOB</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>Transactions With PDO
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_115.txt'; ?>
									</li>
									<li class="caution">PDO does not try to emulate transactions
										for those database engines that do not support them.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>MySQL Improved (mysqli extension)
						<ul>
							<li>mysqli::query() immediately return a result set.</li>
							<li>mysqli::real_query() the result set is not returned until
								mysqli::store_result() or mysqli::use_result() are called.</li>
							<li>mysqli::fetch_assoc() return an associative array.</li>
							<li>mysqli::fetch_row() return an associative array.</li>
							<li>example using the object-oriented interface for mysqli
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_117.txt'; ?>
									</li>
								</ul>
							</li>
							<li>example using procedural approach
								<ul>
									<li class="noStyle">
										<?php include 'code/php_code_118.txt'; ?>
									</li>
								</ul>
							</li>
							<li>Prepared Statements and Bound Parameters With mysqli
								<ul>
									<li>Object approach:
										<ul>
											<li class="noStyle">
												<?php include 'code/php_code_119.txt'; ?>
											</li>
										</ul>
									</li>
									<li>Procedural approach:
										<ul>
											<li class="noStyle">
												<?php include 'code/php_code_120.txt'; ?>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>Transactions With mysqli
								<ul>
									<li>By default, mysqli runs in auto-commit mode, which means
										that each database statement will be committed immediately.</li>
									<li>To disable this functionality and begin a transaction, set
										the auto-commit mode to FALSE using the 'autocommit' methods.
									</li>
									<li>example
										<ul>
											<li>Object approach:
												<ul>
													<li class="noStyle">
														<?php include 'code/php_code_119.txt'; ?>
													</li>
												</ul>
											</li>
											<li>Procedural approach:
												<ul>
													<li class="noStyle">
														<?php include 'code/php_code_120.txt'; ?>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>
