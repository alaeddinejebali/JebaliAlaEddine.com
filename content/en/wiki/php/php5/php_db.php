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
						Table index vs Table primary key
						<ul>
							<li>Let's say that we have an Employee table. The 'employeeID' is the Primary Key for our table as that is what we will use to uniquely identify an employee.</li>
							<li>If we were to search the table based on the 'employeeLastName' the database would need to read the entire table from the disk into memory so that we can find the few employees that have the correct last name. Now if we create an index on the LastName column when we run the same query, the database only needs to load the index from the disk into memory, which will be much quicker, and instead of scanning through the entire table looking for matches, because the values in the index are already sorted the database engine can go to the correct location within the index and find the matching records very quickly.</li>
							<li>A table can't has multiple rows with the same primary key but it can has multiples rows with the same index.n</li>
						</ul>
					</li>
				</ul>
			</li>
<li>
	Relationships
	<ul>
		<li>One-to-one:</li>
		<li>One-to-many:</li>
		<li>Many-to-many:</li>
		<li class="caution">
			SQL language only offers the facilities for directly creating one-to-one and one-to-many relationships. Many-to-many relationships require a bit of trickery and the use of an ""intermediate table" to hold the relationships between the parent and child tables.
		</li>
</li>
        </ul>
    </div>
</section>
