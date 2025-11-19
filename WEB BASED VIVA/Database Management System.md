### Basics 
1. **What is the primary purpose of a Database Management System (DBMS)?**  
   **Answer:** To store and retrieve data efficiently.  
   *Explanation:* A DBMS is designed to store, retrieve, and manage data efficiently, ensuring data integrity and security.

2. **Which of the following is an example of a relational database?**  
   **Answer:** MySQL.  
   *Explanation:* MySQL is a relational database that organizes data into tables with rows and columns, following the relational model.

3. **What does SQL stand for?**  
   **Answer:** Structured Query Language.  
   *Explanation:* SQL stands for Structured Query Language, which is used to interact with and manage relational databases.

4. **Which of the following is NOT a type of database model?**  
   **Answer:** Procedural model.  
   *Explanation:* The procedural model is not a database model. Common database models include hierarchical, network, and relational models.

5. **What is a primary key in a relational database?**  
   **Answer:** A unique identifier for each record in a table.  
   *Explanation:* A primary key uniquely identifies each record in a table and ensures that no two rows have the same value for this key.

6. **What is the purpose of normalization in databases?**  
   **Answer:** To reduce data redundancy and improve data integrity.  
   *Explanation:* Normalization organizes data to reduce redundancy and improve data integrity by dividing it into related tables.

7. **Which SQL command is used to retrieve data from a database?**  
   **Answer:** SELECT.  
   *Explanation:* The SELECT command is used to retrieve data from a database by specifying the desired columns and conditions.

8. **What is a foreign key in a relational database?**  
   **Answer:** A key that links two tables together.  
   *Explanation:* A foreign key is a column in one table that refers to the primary key in another table, establishing a relationship between the two tables.

9. **Which of the following is a characteristic of a NoSQL database?**  
   **Answer:** Horizontal scalability.  
   *Explanation:* NoSQL databases are designed for horizontal scalability, allowing them to handle large amounts of data across distributed systems.

10. **What is the ACID property in databases?**  
    **Answer:** Atomicity, Consistency, Isolation, Durability.  
    *Explanation:* The ACID properties ensure reliable transactions in a database: Atomicity (all or nothing), Consistency (valid state), Isolation (independent transactions), and Durability (permanent changes).

11. **Which of the following is a DDL (Data Definition Language) command in SQL?**  
    **Answer:** CREATE.  
    *Explanation:* CREATE is a DDL command used to define and create database objects like tables, indexes, and views.

12. **What is the purpose of an index in a database?**  
    **Answer:** To speed up data retrieval.  
    *Explanation:* An index is used to speed up data retrieval by providing a quick way to locate records in a table.

13. **Which of the following is a type of join in SQL?**  
    **Answer:** All of the above (INNER JOIN, OUTER JOIN, CROSS JOIN).  
    *Explanation:* SQL supports various types of joins, including INNER JOIN, OUTER JOIN, and CROSS JOIN, to combine data from multiple tables.

14. **What is a transaction in a database?**  
    **Answer:** A single unit of work that is either fully completed or fully failed.  
    *Explanation:* A transaction is a single unit of work in a database that must be completed entirely or not at all, ensuring data consistency.

15. **What is the purpose of a data warehouse?**  
    **Answer:** To store and analyze large volumes of historical data.  
    *Explanation:* A data warehouse is designed to store and analyze large volumes of historical data, supporting business intelligence and decision-making.

### Advance


Here is a more advanced set of Database Management System (DBMS) questions with answers:

1. **What is the difference between a clustered and a non-clustered index in a database?**  
   **Answer:** A clustered index determines the physical order of data in a table, while a non-clustered index does not affect the physical order but creates a separate structure to store pointers to the data.  
   *Explanation:* A table can have only one clustered index because it defines the physical storage order, but it can have multiple non-clustered indexes for faster data retrieval.

2. **What is the purpose of a database transaction log?**  
   **Answer:** To record all changes made to the database for recovery purposes.  
   *Explanation:* The transaction log ensures that the database can be restored to a consistent state in case of a failure by replaying or does not affect the physical order but creates a separate structure to store pointers to the data.  
   *Explanation:* A table can have only one clustered index because it defines the physical storage order, but it can have multiple non-clustered indexes for faster data retrieval.

2. **What is the purpose of a database transaction log?**  
   **Answer:** To record all changes made to the database for recovery purposes.  
   *Explanation:* The transaction log ensures that the database can be restored to a consistent state in case of a failure by replaying or rolling back transactions rolling back transactions.

3. **What is the OLTP and OLAP systems difference between OLTP and OLAP systems?
   **Answer:** OLTP (Online:** OLTP (Online Transaction Processing Transaction Processing) systems handle real-time transactional) systems handle real-time transactional data, while OLAP data, while OLAP (Online Analytical (Online Analytical Processing) systems Processing) systems are designed for are designed for complex queries and data analysis complex queries and data analysis.  
   *Explanation:* OLTP focuses on fast query processing for day-to-day operations, whereas OLAP is.  
   *Explanation optimized for data:* OLTP focuses on fast query processing for day-to-day operations, whereas OLAP is optimized for data aggregation and aggregation and reporting.


4. **What is a materialized view in a database?**
   **Answer:** A materialized:** A materialized view is a database object that stores the results of a query physically, unlike a regular view which is a virtual table.  
   *Explanation:* Materialized views improve query performance by precomputing and storing the results, but they require periodic refreshes to stay updated.

5. **What is the difference between a shared lock and an exclusive lock in a database?
   **Answer:** A shared lock allows multiple transactions to:** A shared lock allows multiple transactions to read a resource simultaneously, read a resource simultaneously, while an exclusive while an exclusive lock prevents other transactions from lock prevents other transactions from reading or writing reading or writing to the resource to the resource.  
   *Explanation:* Shared locks are.  
   *Explanation:* Shared locks are used for read operations used for read operations, and exclusive locks, and exclusive locks are used for write are used for write operations to maintain operations to maintain data consistency data consistency.

6. **What is the purpose of database purpose of database sharding?**  
   sharding?**  
   **Answer:** To partition **Answer:** To partition a database into a database into smaller, more manageable smaller, more manageable pieces (shards) pieces (shards) to improve performance and scalability to improve performance and scalability.  
   *Explanation.  
   *Explanation:* Sharding distributes:* Sharding distributes data across multiple data across multiple servers, reducing servers, reducing the load on a single the load on a single server and enabling horizontal scaling server and enabling horizontal scaling.


7. **What is the difference between difference between a star schema and a star schema and a snowflake schema a snowflake schema in data warehousing in data warehousing?**  
   **Answer?**  
   **Answer:** A star schema:** A star schema has a central fact has a central fact table connected to denormalized table connected dimension tables to denormalized dimension tables, while a snowflake schema normalizes, while a snowflake schema normalizes the dimension tables into multiple related the dimension tables into multiple related tables.  
   *Explanation tables.  
   *Explanation:* Star schemas are:* Star schemas are simpler and faster simpler and faster for querying, while snowflake schemas for querying, while snowflake schemas reduce redundancy but require more reduce redundancy but require more complex joins.

complex joins.

8. **What is the8. **What is the purpose of a foreign key constraint in purpose of a foreign key constraint in a relational database a relational database?**  
   **Answer:** To enforce referential integrity?**  
   **Answer:** To enforce referential integrity by ensuring that a value in one table by ensuring that corresponds to a value in another a value in one table corresponds to a table.  
   *Explanation value in another:* Foreign key constraints table.  
   *Explanation:* Foreign key constraints prevent invalid prevent invalid data from being entered into a table by ensuring relationships data from being entered into a table by ensuring relationships between tables are maintained.


9. **What is the difference **What is the difference between a database between a database trigger and a stored trigger and a stored procedure?**  
   **Answer:** A procedure?**  
   trigger is automatically   **Answer:** A trigger is automatically executed in response to specific events executed in response to specific events on a table, while on a table, while a stored procedure is explicitly called a stored procedure is explicitly called by a user or application by a user or application.  
   *Explanation.  
   *Explanation:* Triggers are event:* Triggers are event-driven, whereas stored procedures are reusable code-driven, whereas stored procedures blocks that must be invoked manually are reusable code blocks that must be invoked manually.


10. **What is the purpose of database the purpose of database replication?**  
    replication?**  
    **Answer:** To    **Answer:** To create and maintain create and maintain copies of a database copies of a database on multiple servers on multiple servers for redundancy and improved availability for redundancy and improved availability.  
    *Explanation.  
    *Explanation:* Replication ensures:* Replication ensures data consistency data consistency across servers and provides fault tolerance across servers and provides fault tolerance in case of server in case of server failure.


11. **What is the differenceWhat is the difference between a full outer between a full outer join and a cross join in SQL?**  
    **Answer:** A join and a cross join in SQL?**  
    **Answer:** A full outer join full outer join returns all records from both tables, matching where possible, while returns all records from both tables, matching where possible, while a cross join returns a cross join returns the Cartesian product of the two tables.  
    *Explanation the Cartesian product of the two tables.  
    *Explanation:* Full outer joins combine matching and non-matching rows, whereas cross joins pair every row from one table:* Full outer joins combine matching and non-matching rows, whereas cross joins pair every row from one table with every row from with every row from the other.

12. **What is the purpose of a database cursor?**  
    **Answer:** To retrieve and manipulate query results row by row.  
    *Explanation the other.

12. **What is the purpose of a database cursor?**  
    **Answer:** To retrieve and manipulate query results row by row.  
    *Explanation:* Cursors are used in scenarios where row-by-row processing:* Cursors are used is required, such as in procedural logic within stored procedures.

13. **What is the difference between horizontal and vertical partitioning in databases in scenarios where row-by-row processing is required, such as in procedural logic within stored procedures.

13. **What is the difference between horizontal and vertical partitioning in databases?**  
    **Answer?**  
    **Answer:** Horizontal partitioning divides a table into rows across multiple tables or servers, while vertical partitioning splits a table into columns.  
    *Explanation:* Horizontal partition:** Horizontal partitioning divides a table into rows across multiple tables or servers, while vertical partitioning splits a table into columns.  
    *Explanation:* Horizontal partitioning improves scalabilitying improves scalability by distributing data, while vertical partitioning optimizes storage by separating frequently accessed columns.

14. **What is the CAP theorem in distributed databases?**  
    **Answer by distributing data, while vertical partitioning optimizes storage by separating frequently accessed columns.

14. **What is the CAP theorem in distributed databases?**  
    **Answer:** The CAP theorem:** The CAP theorem states that a distributed database can achieve at most two of the following three properties: Consistency, Availability, and Partition Tolerance.  
    *Explanation:* It states that a distributed database can achieve at most two of the following three properties: Consistency, Availability, and Partition T highlights the tradeolerance.  
    *Explanation:* It highlights the trade-offs in distributed-offs in distributed systems, where achieving all three properties simultaneously is impossible.

15. **What is the purpose of database indexing?**  
    **Answer:** To improve the speed of data retrieval operations by creating systems, where achieving all three properties simultaneously is impossible.

15. **What is the purpose of database indexing?**  
    **Answer:** To improve the speed of data retrieval operations by creating a data structure a data structure that allows quick lookups.  
    *Explanation:* Indexes reduce the time required to locate data in a table, but they can increase storage requirements and slow down write that allows quick lookups.  
    *Explanation:* Indexes reduce the time required to locate data in a table, but they can increase storage requirements and slow down write operations.


