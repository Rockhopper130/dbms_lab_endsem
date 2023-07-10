# MFSDSAI Research Portal

<ul>

<li>Our goal is to enhance the accessibility for professors to view their own and their colleagues' recent publications, simplifying the process for them.</li>
<br>
<li>Additionally, we provide professors with a curated display of their most notable publications since 2018, aligning with the active period of our department.</li>
<br>
<li>Our website features a user-friendly interface with delightful micro animations, ensuring effortless usability and an inviting experience for professors to easily navigate and explore recent publications.</li>

</ul>


https://github.com/Rockhopper130/dbms_lab_endsem/assets/95133511/77b79249-55a3-47b6-b83c-b7098aa2880a


<br>

## About the Frontend

 - The entire code was written form scratch without using any sort of template or external help (other than some JS snippets from w3schools). Charts were interactive and easy to use. This was done with the help of a library called chart.js
 - The UI/UX , color scheme, fonts, wire-framing, etc was thought about immensely, while writing the code in PHP, CSS, JS.
 - Micro-animations were also implemented to give the website a more fluidic feel.

 - There are a total of four tabs <ul>
    <li>Home : Gives a brief introduction about our research interests in our department.
    <li>Professors : All the professors in the form of cards, which when clicked, hover over to their respective boxes. These boxes contain info about their research areas, as well as their top 5 most cited papers.
    </li>
    <li>Insights : Shows some insights that we were able to gather after studying the data. All the insights were represented in the form of interactive charts.
    <li>Publications : Shows information about all the papers that were published by professors of our department (solo as well as collaborations with other departments).
 </ul> 


## About the Database Formulation & Implementation

### Database Formulation

- Made a primitive database structure based on data gathered by scraping
- Identified potential functional dependencies and optimised accordingly to avoid data redundancy. 
- Followed the rules of formulation to transform the database into BCNF. 
- Made a final ER diagram of the database.
- Carefully observed the data and found meaningful insights into data which allowed us to quantify the quality as well as quantity of research undertaken by the department.
- Wrote SQL queries to retrieve the desired information.

### ER Diagram
![ER Diagram](https://raw.githubusercontent.com/Rockhopper130/dbms_lab_endsem/main/ER_diagram.png)

### Database Implementation

- Used python to clean data collected in parsing step
- Implemented the database creation and updation steps, using mysql connector the sql_code.ipynb notebook contains functions for creating the entire database(with all relations, constraints and keys built-in).
- After creating the database, the sql_code.ipynb takes all the scraped data (in form of csv files for each prof), it reads all the data and updates it into the database. The updation is done such that we ensure that all (participation) constraints are held.
- The notebook is end-to-end code to create the SQL database and read all the scraped data and update it into the database. After this queries can be performed on the database created by the notebook

## About the Data Retrieval

- Visit MFSDSAI website to get basic data of all professors
  - Visited all Faculty pages on the MFSDSAI website to extract faculty the provided faculty details.
- Search all professors on google scholar
  - The name of the faculty was used to search the for the corresponding Google Scholar pages, allowing us to automate the updation process.   
- Extract basic data from google scholar profile
  - Extracted all available data on the Scholar profiles including research interests/ domains, yearwise and total citation counts, h-index, i10-index, etc.
- Visit the link of each paper and extract publication information and basic details
- Filled the null value gaps from IEEE/IRINS
  - Any missing data from the initial scraping pipeline is recovered from IEEE/IRINS along with DOI data as well as Co-Author Networks of the professors.

Wrote Training code (using SetFit, for few shot fine tuning) for a text classification model that classifies and assigns a tag/label to the paper based on a smaller clustered set of the faculty domains. 

Also clustered the approx. 50 domains into a smaller set of 20 clusters and started data annotation for the fine tuning process.

<hr>

## Steps to run

 - If you haven't installed XAMPP, please install it first.
 - In the "htdocs" folder, clone this repository.
 - Start the manager-osx.app (for MacOS users).
 - Head to this link (http://localhost/dbms_lab_endsem/website/index.php)

<hr>

## Summary
 - Retireved data from google scholar
 - Cleaned the data
 - Formulated the SQL database
 - Made a pipeline to transport the data to SQL database
 - Made a complete and easy to use frontend with multiple features
 - Queried the data to gather insights through PHP
 - Displayed the insights on the website
 - Made a README.md
 <hr>
