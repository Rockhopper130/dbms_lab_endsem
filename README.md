# MFSDSAI Research Portal

<ul>

<li>Our goal is to enhance the accessibility for professors to view their own and their colleagues' recent publications, simplifying the process for them.</li>
<br>
<li>Additionally, we provide professors with a curated display of their most notable publications since 2018, aligning with the active period of our department.</li>
<br>
<li>Our website features a user-friendly interface with delightful micro animations, ensuring effortless usability and an inviting experience for professors to easily navigate and explore recent publications.</li>

</ul>

<br>

## About the Frontend

 - The entire code was written form scratch by Nishchay without using any sort of template or external help (other than some JS snippets from w3schools). Charts were interactive and easy to use. This was done with the help of a library called chart.js
 - The UI/UX , color scheme, fonts, wire-framing, etc was thought about immensely, while writing the code in PHP, CSS, JS.
 - Micro-animations were also implemented to give the website a more fluidic feel.

 - There are a total of four tabs <ul>
    <li>Home : Gives a brief introduction about our research interests in our department.
    <li>Professors : All the professors in the form of cards, which when clicked, hover over to their respective boxes. These boxes contain info about their research areas, as well as their top 5 most cited papers.
    </li>
    <li>Insights : Shows some insights that we were able to gather after studying the data. All the insights were represented in the form of interactive charts.
    <li>Publications : Shows information about all the papers that were published by professors of our department (solo as well as collaborations with other departments).
 </ul> 


## About the Database Formulation
(Handled by Nityam & Shantanu)
- Made a primitive database structure and further optimised it to avoid redundance of data. Followed the rules of formulation. 
- Carefully observed the data and found meaningful insights
- Wrote SQL queries for the insights.
- Made a final ER diagram of the database.

## About the Data Retrival

Parsing Methodology: (Handled by Varun)

- Visit MFSDSAI website to get basic data of all professors
- Search all professors on google scholar
- Extract basic data from google scholar profile
- Visit the link of each paper and extract publication information and basic details
- Filled the null value gaps from IEEE/IRINS

<i>(We were given the task of retrieving the data form google scholar, which has been successfully completed. Verifying the legitimacy of the data was not part of the problem statement, as we considered google scholar to be the ground truth, hence we shall not be judged on this factor.)</i>

Wrote Training code (using SetFit, for few shot fine tuning) for a text classification model that classifies and assigns a tag/ label to the paper based on a smaller clustered set of the faculty domains. 

Clustered the approx. 50 domains into a smaller set of 20 clusters and started data annotation for the fine tuning process.

Aditya developed an end-to-end process and established a pipeline to transform scraped data into an SQL database. Also worked on data cleaning.

<hr>

## Steps to run

 - If you haven't installed XAMPP, please install it first.
 - In the "htdocs" folder, clone this repository.
 - Start the manager-osx.app (for MacOS users).
 - Head to this link (http://localhost/DBMS-Lab/website/index.php)

<hr>

## Summary
 - Retireved data from google scholar
 - Cleaned the data
 - Formulated the SQL database
 - Made a pipeline to transport the data to SQL database
 - Made a complete and easy to use frontend with multiple features
 - Queried the data to gather insights
 - Displayed the insights on the website
 - Made a README.md :)
 <hr>
