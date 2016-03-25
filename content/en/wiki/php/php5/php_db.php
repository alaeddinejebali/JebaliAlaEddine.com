<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Database programming<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
				<h2>Introduction to SQL: Structured Query Language</h2>
				<ul>
					<li>
						SQL is the most common database manipulation language (DML).
					</li>
					<li>
						Table index vs Table primary key
						<ul>
							<li>Let's say that we have an Employee table. The 'employeeID' is the Primary Key for our table as that is what we will use to uniquely identify an employee.</li>
							<li>If we were to search the table based on the 'employeeLastName' the database would need to read the entire table from the disk into memory so that we can find the few employees that have the correct last name. Now if we create an index on the LastName column when we run the same query, the database only needs to load the index from the disk into memory, which will be much quicker, and instead of scanning through the entire table looking for matches, because the values in the index are already sorted the database engine can go to the correct location within the index and find the matching records very quickly.</li>
							<li>A table can't has multiple rows with the same primary key but it can has multiples rows with the same index.n</li>
						</ul>
					</li>
					<li>
						Relationships
						<ul>
							<li>One-to-one: Each row table A is linked to 1 and only 1 row in table B.</li>
							<li>One-to-many: Each row in Table A is linked to 0, 1 or many rows in Table B.</li>
							<li>Many-to-many: Each row in Table A is linked to 0, 1 or many rows in Table B. Each row in Table B is linked to 0, 1 or many rows in Table A.</li>
							<li class="caution">
								SQL language only offers the facilities for directly creating one-to-one and one-to-many relationships. Many-to-many relationships require a bit of trickery and the use of an ""intermediate table" to hold the relationships between the parent and child tables.
							</li>
						</ul>
					</li>
					<li>
						SQL Data Types
						<ul>
							<li>
								Numeric
								<ul>
									<li>smallint, int (or integer), real, float.</li>
								</ul>
							</li>
							<li>
								String
								<ul>
									<li>char: Fixed-length character string.</li>
									<li>varchar: Variable-length character string.</li>
									<li class="caution">
										However a string column must be given a length (usually between 1 and 255 characters), which means that any string coming from PHP, where it can have an arbitrary length, can be truncated, usuallywithout even a warning, thus resulting in the loss of data.
									</li>
									<li>text: A maximum allowed length but severe limitations on search and indexing capabilities.</li>
									<li>
										Single quotation marks are normally escaped using another quotationmark (not all database systems follow this conventio).
										<?php include 'code/php_code_104.txt'; ?>
									</li>
									<li>
										BLOB: A Binary Large OBject is a collection of binary data stored as a single entity in a database management system. Blobs are typically images, audio or other multimedia objects, though sometimes binary executable code is stored as a blob.
									</li>
									<li>
										SQL character strings act differently from PHP strings (SQL character strings are "true" text strings, rather than collections of binary characters). Therefore, you won't be able to store binary data in an SQL string. Most database systems provide a separate data type (usually called “BLOB" for Binary Large OBject) for this purpose.
									</li>							
								</ul>
							</li>
							<li>
								Datetime
								<ul>
									<li>It's better to keep all of your date-manipulation operations inside the database itself, and only extract dates in string form when needed.</li>
								</ul>
							</li>
							<li>
								NULL
								<ul>
									<li>A column is set to NULL to indicate that it does not contain any value (NULL is not the same as 0 , or an empty string).</li>
									<li>Columns that allow NULL values cannot be used as part of a primary key.</li>
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
					<li>
						Dropping Objects
						<ul>
							<li>
								Deleting the book table cannot take place until book_chapter is dropped first
								<?php include 'code/php_code_106.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						Adding andManipulating Data
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
					<li>
						Joins combine data from multiple tables to create a single recordset.
					</li>
					<li>
						There are two basic types of joins:
						<ul>
							<li>
								inner joins
								<ul>
									<li>
										Returns rows from both tables only if keys from both tables can be found that satisfies the join conditions.
										<?php include 'php/php_code_108.txt'; ?>
										Rows are returned only if a common value for the isbn column can be found for both tables.
									</li>
									<li class="caution">
										inner joins only work well with assertive conditions—negative conditions often return bizarre-looking results.
									</li>
									<li>
										<?php include 'php/php_code_109.txt'; ?>
										You would probably expect this query to return a list of all the records in the book table that do not have a corresponding set of records in book_chapter. However, the database engine returns a data set that contains an entry for each record in book_chapter that does not match each record in book; the end result is, in fact, a dataset that contains every line in book_chapter repeated many times over.
									</li>
								</ul>
							</li>
							<li>
								outer joins
								<ul>
									<li>
										Return all records from one table, while restricting the other table to matching records.
									</li>
									<li>
										This means that some of the columns in the results will contain NULL values.
									</li>
								</ul>
							</li>
						<ul>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>
