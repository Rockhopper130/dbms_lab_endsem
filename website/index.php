<!-- Username : nish2 -->
<!-- password : 1234 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DBMS_Lab</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="testing">
      <div class="header">

          <!-- <div class="logo">
            <h1 class="temp_logo" onclick="window.location='index.php'">RePo</h1>
          </div> -->
          <button class="nav_button" onclick="openCity(event, 'home')" id="defaultOpen">Home</button>
          <button class="nav_button" onclick="openCity(event, 'professors')">Professors</button>
          <button class="nav_button" onclick="openCity(event, 'insights')">Insights</button>
          <button class="nav_button" onclick="openCity(event, 'papers')">Publications</button>
      </div>

      <div id = "home" class = "tabContent">
        <div style = "display: flex; flex-direction : row; flex-wrap: wrap; height : 7vh;">
          <div style="display : flex; flex : 1;"><p class="header-sub-title">We </p><p class="header-sub-title" id="word" style ="color : #0081C9"></p><p class="header-sub-title blink" style="color : #0081C9">|</p></div>
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/12/IIT_Guwahati_Logo.svg/1200px-IIT_Guwahati_Logo.svg.png" alt ="IITG" class = "inst_logo">
        </div>
        <div>
          <h2 style = "font-weight: 400; margin-left : 2px;">Mehta Family School of</h2>
          <h1 style = "font-weight: 400;">Data Science and Artificial Intelligence</h1>
          <h1 style = "font-size : 50px; line-height: 150%;">Research Portal</h1>
        </div>
        
        <hr class = "solid hr">
        
        <div style=" display: flex ;flex-direction : row;">
          <div style="width : 60%; display :flex; flex-direction : column; gap : 32px;">
            <p style="width : 100%;">
            Welcome to our branch research portal, where you can explore the latest and most relevant research in your field of interest. Our portal is designed to provide you with easy access to high-quality research, allowing you to stay up-to-date with the latest trends and insights in your area of expertise.
            </p>
            <p style="width : 100%;">
              With our user-friendly interface, you can quickly and easily browse through our collection and find the research that interests you most. Our powerful search tool allows you to filter results by author and publication so you can quickly find the information you need.
            </p>

            <h2>Our Research Areas</h2>
            <div style = "display: flex; height : 10vh; gap : 16px; flex-direction : row; width : 100%;">
          
              <div class="domain-card">
                <h4 style="width : fit-content;">Articial Intelligence</h4>
                <div class="domain-card-content">
                  <p>Reinforcement Learning</p>
                  <p>Markov Decision Process</p>
                  <p>Multi Armed Bandit</p>
                </div>
              </div>
              <div class="domain-card">
                <h4 style="width : fit-content;">Signal Processing</h4>
                <div class="domain-card-content">
                  <p>Statistical Signal Processing</p>
                  <p>Wireless Communications</p>
                  <p>Time-Series Signal Modelling </p>
                </div>
              </div>
              <div class="domain-card">
                <h4 style="width : fit-content;">ML & DL</h4>
                <div class="domain-card-content">
                  <p>Computer Vision</p>
                  <p>NLP</p>
                  <p>Machine Learning</p>
                  <p>Deep Learning</p>
                </div>
              </div>
            </div>

            <div style = "display: flex; height : 10vh; gap : 16px; flex-direction : row; width : 100%;">
          
              <div class="domain-card">
                <h4 style="width : fit-content;">Biology & Physics</h4>
                <div class="domain-card-content">
                  <p>Bio-Mechanics</p>
                  <p>HCI</p>
                  <p>Computational Biology</p>
                  <p>Semiconductor Devices</p>
                </div>
              </div>
              <div class="domain-card">
                <h4 style="width : fit-content;">Audio & Speech</h4>
                <div class="domain-card-content">
                  <p>Audio Processing</p>
                  <p>Auditory Neuroscience</p>
                </div>
              </div>
              <div class="domain-card">
                <h4 style="width : fit-content;">Others</h4>
                <div class="domain-card-content">
                  <p>Resource Allocation</p>
                  <p>Process Engineering</p>
                  <p>Mathematical Finance</p>
                  <p>Computer Networks and Security</p>
                </div>
              </div>
            </div>
          </div>

          <img src = "https://www.iitg.ac.in/storage/awards/6525g4.jpg" style="height : 100%; width : 40%; object-fit : cover; margin-left : 32px; border-radius : 8px;" >


        </div>
        
      </div>


      <!-- <blockquote><pre>"Research is seeing what everybody else has seen 
 and thinking what nobody else has thought."</pre></blockquote>
          <cite> - Albert Szent-Györgyi</cite> -->



      <div id = "professors" class="tabContent content-professors">

          <div class="title">
            <h1>Professors</h1>
          </div>
      
          <hr class="solid hr">
          <div class="all-cards">
          <?php
            // Connect to database
            $host = 'localhost';
            $username = 'nish2';
            $password = '1234';
            $dbname = 'DBMS_Lab_3';
            $conn = new mysqli($host, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from database
            $sql = "SELECT professors.Name, professors.position_in_DSAI AS 'title' 
            FROM professors 
            ORDER BY `title` DESC";
                    
            $result = $conn->query($sql);

            // Display data in HTML table
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  ?>
                  <div class = "card-row">
                    <div class = "prof-card first card-wipe" onclick="document.getElementById('<?php echo $row['Name']?>').scrollIntoView({behavior: 'smooth', block: 'center' });">
                      <h2><?php echo ucwords($row['Name']) ?></h2>
                      <h4><?php echo ucwords($row['title']) ?></h4>
                    </div>
                    <?php if($row = $result->fetch_assoc()){ ?>
                    <div class = "prof-card second card-wipe" onclick="document.getElementById('<?php echo $row['Name']?>').scrollIntoView({behavior: 'smooth', block: 'center' });">
                      <h2><?php echo ucwords($row['Name']) ?></h2>
                      <h4><?php echo ucwords($row['title']) ?></h4>
                    </div>
                    <?php } ?>
                    <?php if($row = $result->fetch_assoc()){ ?>
                    <div class = "prof-card second card-wipe" onclick="document.getElementById('<?php echo $row['Name']?>').scrollIntoView({behavior: 'smooth', block: 'center' });">
                      <h2><?php echo ucwords($row['Name']) ?></h2>
                      <h4><?php echo ucwords($row['title']) ?></h4>
                    </div>
                    <?php } ?>
                    <?php if($row = $result->fetch_assoc()){ ?>
                    <div class = "prof-card second card-wipe" onclick="document.getElementById('<?php echo $row['Name']?>').scrollIntoView({behavior: 'smooth', block: 'center' });">
                      <h2><?php echo ucwords($row['Name']) ?></h2>
                      <h4><?php echo ucwords($row['title']) ?></h4>
                    </div>
                    <?php } ?>
                  </div>
                  
                  

                  <?php
                    
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
          ?>


        </div>

        <div class = "extended-data" id = "test" style="margin-top : 16px;">
            <div class="prof-info">
              <?php 
                $sql_11 = "SELECT professors.name, professors.citations_all, professors.h_index_all, professors.i10_index_all, GROUP_CONCAT(domains.Domains SEPARATOR ', ') AS 'foi', professors.position, professors.department, professors.position_in_DSAI AS 'title' FROM professors, domains WHERE professors.ProfID = domains.ProfID GROUP BY professors.Name ORDER BY `title` DESC;";
                $result_11 = $conn->query($sql_11);
                if ($result_11->num_rows > 0) {
                  while($row = $result_11->fetch_assoc()) {
                    ?>
                        <div class="prof-info-card" id="<?php echo $row['name']?>">
                          <div style = "display : flex; flex-direction : row;">
                            <div style="display : flex; flex-direction : column; gap : 8px;">
                              <h2><?php echo $row['name']?></h2>
                              <h3><?php echo ucwords($row['title'])?></h3>
                              <br>
                              <h4><?php echo "{$row['position']}, {$row['department']}" ?></h4> 
                            </div>
                            <div style="width : 20vw; margin-left: auto; margin-right: 0;">
                              <h3 style="font-weight: 800; margin-bottom: 8px;">Research Interests</h3>
                              <ul style="margin-left : 20px;"></ul>
                              <?php 
                                $foi = explode(", ",$row['foi']);
                                foreach($foi as $each){
                                  $each = ucwords($each);
                                  echo "<li>$each</li>";
                                }
                              
                              ?>
                              </ul>
                            </div>
                          </div>
                            
                          <br>

                            <h3 style="font-weight: 800; font-size : 20px; text-align : center;">5 Most Cited Papers</h3>

                          <div class="prof_table">
                            <table><tr class='table_head'><th>Paper Name</th><th>Citation Count</th></tr>
                          <?php
                          
                            $sql_12 = "SELECT publications.PaperID, publications.Title, publications.Total_citations AS 'cit_count' FROM professors, author_relations, publications WHERE professors.Name = '{$row['name']}' AND professors.ProfID = author_relations.ProfID AND author_relations.PaperID = publications.PaperID ORDER BY publications.Total_citations DESC LIMIT 5;";
                            $result_12 = $conn->query($sql_12);
                            if ($result_12->num_rows > 0) {
                              while($row2 = $result_12->fetch_assoc()) {

                                echo "<tr><td>".$row2["Title"]."</td><td class='right_cell'>".$row2["cit_count"]."</td></td></tr>";
                              
                                
                              }
                            }
                            ?>
                            </table>
                          </div>

                        </div>
                    <?php
                  }
                }
              
              ?>

            </div>
        </div>

        
      </div>





<!-- ----------------------------------------------------------------------------- -->
<!-- INSIGHTS  -->
<!-- ----------------------------------------------------------------------------- -->


      <?php

        $sql2 = "SELECT name, citations_after2018, h_index_after2018, i10_index_after2018 FROM professors";
        $result2 = $conn->query($sql2);

        $cit_data = array();
        $h_ind = array();
        $i10_ind = array();
        $prof_name_list = array();

        if ($result2->num_rows > 0) {
          while($row = $result2->fetch_assoc()) {
            array_push($cit_data, $row['citations_after2018']);
            array_push($h_ind, $row['h_index_after2018']);
            array_push($i10_ind, $row['i10_index_after2018']);
            array_push($prof_name_list, $row['name']);
          }

          $cit_data = json_encode($cit_data);
          $h_ind = json_encode($h_ind);
          $i10_ind = json_encode($i10_ind);
          $prof_name_list = json_encode($prof_name_list);

        } else {
            echo "0 results";
        }


        $sql4 = "SELECT COUNT(ProfID) AS 'counter', Domains FROM domains GROUP BY Domains ORDER BY 'counter' DESC LIMIT 10";
        $result4 = $conn->query($sql4);

        $domain_name = array();
        $domain_count = array();

        if ($result4->num_rows > 0) {
          while($row = $result4->fetch_assoc()) {

            array_push($domain_name, $row['Domains']);
            array_push($domain_count, $row['counter']);
          }

          $domain_name = json_encode(($domain_name));
          $domain_count = json_encode(($domain_count));


        } else {
            echo "0 results";
        }

        $sql5 = "SELECT SUM(publications.2023_citations) as '2023', SUM(publications.2022_citations) as '2022',SUM(publications.2021_citations) as '2021', SUM(publications.2020_citations) as '2020', SUM(publications.2019_citations) as '2019', SUM(publications.2018_citations) as '2018' FROM publications";
        $result5 = $conn->query($sql5);

        $yearwise_cit = array();
        $years = array(2018, 2019, 2020, 2021, 2022, 2023);

        if ($result5->num_rows > 0) {
          while($row = $result5->fetch_assoc()) {

            array_push($yearwise_cit, $row['2018']);
            array_push($yearwise_cit, $row['2019']);
            array_push($yearwise_cit, $row['2020']);
            array_push($yearwise_cit, $row['2021']);
            array_push($yearwise_cit, $row['2022']);
            array_push($yearwise_cit, $row['2023']);

          }

          $yearwise_cit = json_encode(($yearwise_cit));
          $years = json_encode(($years));


        } else {
            echo "0 results";
        }

        $sql7 = "SELECT professors.Name, 
                        SUM(publications.2023_citations) as '2023', 
                        SUM(publications.2022_citations) as '2022',
                        SUM(publications.2021_citations) as '2021', 
                        SUM(publications.2020_citations) as '2020', 
                        SUM(publications.2019_citations) as '2019', 
                        SUM(publications.2018_citations) as '2018'
                FROM publications
                JOIN author_relations ON publications.PaperID = author_relations.PaperID
                JOIN professors ON author_relations.ProfID = professors.ProfID
                GROUP BY professors.Name";

        $result7 = $conn->query($sql7);

        $prof_names = array();
        $value_array = array();
        $total_profwise_cit = array();


        if ($result7->num_rows > 0) {
          while($row = $result7->fetch_assoc()) {

            $temp_value = array();
            array_push($temp_value, $row['2018']);
            array_push($temp_value, $row['2019']);
            array_push($temp_value, $row['2020']);
            array_push($temp_value, $row['2021']);
            array_push($temp_value, $row['2022']);
            array_push($temp_value, $row['2023']);

            array_push($prof_names, $row['Name']);
            array_push($total_profwise_cit, [$row['Name'] => $temp_value]);

          }


          $prof_names_json = json_encode(($prof_names));
          $total_profwise_cit_json = json_encode(($total_profwise_cit));


        } else {
            echo "0 results";
        }

        $sql8 ="SELECT publications.Publication_year ,COUNT(publications.PaperID) AS count
                FROM publications 
                WHERE publications.Publication_year >= 2018 
                GROUP BY publications.Publication_year;";
        
        $result8 = $conn->query($sql8);

        $paper_pub_count = array();

        if ($result8->num_rows > 0) {
          while($row = $result8->fetch_assoc()) {
            array_push($paper_pub_count, $row['count']);
          }

        } else {
            echo "0 results";
        }

        $paper_pub_count = json_encode(($paper_pub_count));



        $sql9 ="SELECT professors.Name, professors.citations_all AS Total_Citations, 
                professors.citations_after2018 AS Citations_Post_2018, 
                professors.i10_index_all AS All_Time_i10_index, 
                professors.i10_index_after2018 AS i10_Index_Post_2018, 
                professors.h_index_all AS All_Time_h_index, 
                professors.h_index_after2018 AS h_Index_Post_2018

                FROM professors";

        $result9 = $conn->query($sql9);


        $pre_post_diff = array();

        if ($result9->num_rows > 0) {
          while($row = $result9->fetch_assoc()) {

            $temp_value = array();
            array_push($temp_value, $row['Total_Citations']);
            array_push($temp_value, $row['Citations_Post_2018']);
            array_push($temp_value, $row['All_Time_i10_index']);
            array_push($temp_value, $row['i10_Index_Post_2018']);
            array_push($temp_value, $row['All_Time_h_index']);
            array_push($temp_value, $row['h_Index_Post_2018']);

            array_push($pre_post_diff, [$row['Name'] => $temp_value]);

          }

          $pre_post_diff = json_encode(($pre_post_diff));


        } else {
            echo "0 results";
        }



        $sql10 = "SELECT professors.department, COUNT(professors.Name) AS dept_count FROM professors GROUP BY professors.department;";


        $result10 = $conn->query($sql10);

        $dept_count = array();
        $dept = array();

        if ($result10->num_rows > 0) {
          while($row = $result10->fetch_assoc()) {

            array_push($dept, $row['department']);
            array_push($dept_count, $row['dept_count']);
          }

        } else {
            echo "0 results";
        }

        $dept_count = json_encode(($dept_count));
        $dept = json_encode(($dept));

        $sql11="SELECT Name, COUNT(DISTINCT(Author)) AS dist_auth
                FROM coauthors, author_relations, professors
                WHERE coauthors.PaperID = author_relations.PaperID 
                AND author_relations.ProfID = professors.ProfID 
                GROUP BY author_relations.ProfID";      
                      
                      

        $result11 = $conn->query($sql11);

        $name2 = array();
        $dist = array();

        if ($result11->num_rows > 0) {
          while($row = $result11->fetch_assoc()) {

            array_push($name2, $row['Name']);
            array_push($dist, $row['dist_auth']);
          }

        } else {
            echo "0 results";
        }

        $name2 = json_encode($name2);
        $dist = json_encode($dist);





// -----------------------------------------------------------------
// OMITTED FOR NOW
// -----------------------------------------------------------------

// $sql3 = "SELECT * FROM word_count";
// $result3 = $conn->query($sql3);

// $word = array();
// $count = array();

// if ($result3->num_rows > 0) {
//   while($row = $result3->fetch_assoc()) {
//     array_push($word, $row['word']);
//     array_push($count, $row['count']);
//   }
//   $word = json_encode(($word));
//   $count = json_encode(($count));
  
  
// } else {
//   echo "0 results";
// }

// -----------------------------------------------------------------
?>

<!-- ----------------------------------------------------------------- -->



      <div id = "insights" class= "tabContent">
        <h1>Insights</h1>
        <hr class="solid">
        <div class="chart-total">

          <div class="chart-row">
            <div class = "charts">
              <button class="accordion">How many citations does each professor have ?</button>
              <div class="panel">
                <div style="flex-direction : column;" >
                  <canvas id="cit_chart" style="height : 400px; width : 1000px; padding-bottom : 24px;"></canvas>
                  <canvas id="h_chart" style="height : 400px; width : 1000px; padding-bottom : 24px;"></canvas>
                  <canvas id="i10_chart" style="height : 400px; width : 1000px; padding-bottom : 24px;"></canvas>

                  <ul class = "insight-card" style="width : 1008px; padding : 16px; margin-bottom : 32px;">
                    <b style="font-size : 20px;">Insight</b>
                    <li style=  "margin-top : 16px;">The H-index is a measure of a researcher's productivity and impact.</li>
                    <li>It considers both the number of publications and the number of citations each publication has received.</li>
                    <li>Citation counts and i10-index have a wide spread and some low values.</li>
                    <li>The H-index is considered a more comprehensive metric.</li>
                  </ul>
                  <div style="height : 0.1px;"></div>
                
                </div>
              </div>
            </div>
          </div>

          <div class="chart-row">
            <div class = "charts">
              <button class="accordion">Top 10 domains that professors are most interested in </button>
              <div class="panel">
                <canvas id="domain_chart" style="height : 400px; width : 600px; padding-bottom : 24px;"></canvas>
                <ul class = "insight-card">
                  <b style="font-size : 20px;">Insight</b>
                  <li style=  "margin-top : 16px;">Machine Learning is a domain associated with most faculty members. </li>
                  <li>But Machine Learning is a cluster of domains.</li>
                  <li>Therefore amongst the more specific ones, we can see Signal Processing as well as Computer Vision.</li>
                  
                </ul>
              </div>
            </div>
          </div>

          <div class="chart-row">
            <div class = "charts">
              <button class="accordion">Yearwise total citations of our department</button>
              <div class="panel">
                <canvas id="yearwise_cit" style="height : 400px; width : 600px; padding-bottom : 24px;"></canvas>
                <ul class = "insight-card">
                  <b style="font-size : 20px;">Insight</b>
                  <li style=  "margin-top : 16px;">The plot indicates a Linearly Increasing trend in total number of citations every year.</li>
                  <li>This indicates an increase in research output by the department as a whole. </li>
                  <li>This increase could be due to increased output per faculty or due to an increase in the number of associated faculty or a combination of both.</li>
                </ul>
              </div>
            </div>
          </div>
          

          
          <div class="chart-row">
            <div class = "charts">
              <button class="accordion">Yearwise paper publication count since 2018</button>
              <div class="panel">
                  
                  <canvas id="yearwise_papers_pub" style="height : 400px; width : 600px; padding-bottom : 24px;"></canvas>
                  <ul class = "insight-card">
                    <b style="font-size : 20px;">Insight</b>
                    <li style=  "margin-top : 16px;">The yearwise paper publication count for the school has a downward trend from 2018-2022 which can be explained by the world entering the Covid era.</li>
                    <li>But with us coming out of Covid and with the proper establishment of our school, we can see the spike in publication count in 2022.</li>
                    <li>So, the school is back to producing high quality research output with a new high in publication counts.</li>
                  </ul>
              </div>
            </div>
          </div>
          
          
          <div class="chart-row">
            <div class = "charts">
              <button class="accordion">Department-wise distribution of professors that are associated with the school</button>
              <div class="panel">
                  
                  <canvas id="dept_count" style="height : 400px; width : 600px; padding-bottom : 24px;"></canvas>
                  <ul class = "insight-card">
                    <b style="font-size : 20px;">Insight</b>
                    <li style=  "margin-top : 16px;">Here we can clearly see that the faculty members come from a diverse set of disciplines with decent amount of representation from each. </li>
                    <li>This allows for an increase in inter disciplinary work and collaboration, a novelty that can't be seen in many departments accross universities.</li>
                  </ul>
              </div>
            </div>
          </div>
          
          
          <div class="chart-row">
            <div class = "charts">
              <button class="accordion">Total number of distinct co-authors for each professor</button>
              <div class="panel" style="flex-direction : row;">
                  
                  <canvas id="dist_auth_chart" style="height : 400px; width : 600px; padding-bottom : 8px;"></canvas>
                  <ul class = "insight-card" style="width : 1008px; padding : 16px; margin-left: 16px;">
                    <b style="font-size : 20px;">Insight</b>
                    <li style=  "margin-top : 16px;">This plot represents in a quantitative sense, to some extent, the research network and reach of our department. </li>
                    <li>Don't let the outstanding numbers by some of our faculty members fool you into believing that the rest of the faculty members have an insignificant network.</li>
                    <li>If we focus on the actual numbers, most of our members have a large network of people that they have worked with.</li>
                  </ul>
                  <div style="height : 0.1px;"></div>
              </div>
            </div>
          </div>

          <div class="chart-row">
            <div class = "charts">
              <button class="accordion">Yearwise and professor-wise citations since 2018 </button>
              <div class="panel">
                <div style = "flex-direction : column; gap : 16px;">
                  <div>
                    <label for="profwise_select">Select Professor Name : </label>
                    <select class="form-control" id="profwise_select" style = "margin-bottom : 32px;">
                      <?php
                        $i = 0;
                        foreach ($prof_names as $name) {
                          $total_value = json_encode(array( (int)$total_profwise_cit[$i][$name][0], (int)$total_profwise_cit[$i][$name][1], (int)$total_profwise_cit[$i][$name][2], (int)$total_profwise_cit[$i][$name][3], (int)$total_profwise_cit[$i][$name][4], (int)$total_profwise_cit[$i][$name][5]));
                          echo "<option value= $total_value >$name</option>";
                          $i++;
                        }
                      ?>
                    </select>
                  </div>
                  <canvas id="profwise_cit" style="height : 400px; width : 1008px; padding-bottom : 24px;"></canvas>
                </div>
                <!-- <ul class = "insight-card">
                  <b style="font-size : 20px;">Insight</b>
                  <li style=  "margin-top : 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                  <li>Cras a nisl egestas, mollis tellus eu, scelerisque ipsum. Sed venenatis bibendum aliquam.</li>
                  <li> Sed venenatis bibendum aliquam.</li>
                  <li> Aenean lobortis, odio quis vehicula congue, magna urna auctor risus, eu facilisis tortor urna quis urna.</li>
                </ul> -->


              </div>
            </div>
          </div>

          


        </div>
      </div>
        
<!-- ----------------------------------------------------------------------------- -->
<!-- TEAM  -->
<!-- ----------------------------------------------------------------------------- -->

  
      
      <div id = "papers" class= "tabContent" style="flex-direction: column;">
        <h1>Publications</h1>

        <input type="text" id="myInput" onkeyup="searchFunc()" placeholder="Search for Papers or Authors">
        <div>
          <table id="myTable">
            <tr class="header2">
              <th style="width:40%;">Title</th>
              <th style="width:15%;">Authors</th>
              <th style="width:5%;">Publication Type</th>
              <th style="width:10%;">Published In</th>
              <th style="width:10%;">Publication Year</th>
              <th >Total Citations</th>
            </tr>
            <?php
              $sql12="SELECT PaperID, Title, Authors, Description, Publication_type, Published_in, Publication_year, Total_citations 
                      FROM `publications`";

              $result12 = $conn->query($sql12);
      
              if ($result12->num_rows > 0) {
                while($row = $result12->fetch_assoc()) {
    
                  
                  echo "<tr><td>".$row["Title"]."</td><td>".$row["Authors"]."</td><td>".$row["Publication_type"]."</td><td>".$row["Published_in"]."</td><td>".$row["Publication_year"]."</td><td>".$row["Total_citations"]."</td></tr>";

                  
                }
      
              } else {
                  echo "0 results";
              }

            ?>

          </table>
        </div>













      </div>
    </div>



<!-- ----------------------------------------------------------------------------- -->
<!-- CHARTS  -->
<!-- ----------------------------------------------------------------------------- -->

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>

    <script>
      const ctx_cit = document.getElementById('cit_chart');
      const ctx_h = document.getElementById('h_chart');
      const ctx_i10 = document.getElementById('i10_chart');

      var labelList = <?php echo $prof_name_list ?>;

      new Chart(ctx_cit, {
        type: 'bar',
        data: {
          labels: labelList,
          datasets: [{
            data : <?php echo $cit_data ?>,
            backgroundColor: "#4CBB17",
            borderColor: "#4CBB17",
            borderWidth: 1
          }]
        },
        options: {
          radius : 4,
          responsive: false,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              title: {
                display: true,
                text: 'No. of Citations',
                font:{
                  size : 16,
                }
              },
              beginAtZero: true,
            }
          }
        }
      });

      new Chart(ctx_h, {
        type: 'bar',
        data: {
          labels: labelList,
          datasets: [{
            data : <?php echo $h_ind ?>,
            backgroundColor: "#0096FF",
            borderColor: "#0096FF",
            borderWidth: 1
          }]
        },
        options: {
          radius : 4,
          responsive: false,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              title: {
                display: true,
                text: 'H-Index',
                font:{
                  size : 16,
                }
              },
              beginAtZero: true,
            }
          }
        }
      });

      new Chart(ctx_i10, {
        type: 'bar',
        data: {
          labels: labelList,
          datasets: [{
            data : <?php echo $i10_ind ?>,
            backgroundColor: "#C70039",
            borderColor: "#C70039",
            borderWidth: 1
          }]
        },
        options: {
          radius : 4,
          responsive: false,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              title: {
                display: true,
                text: 'i10-Index',
                font:{
                  size : 16,
                }
              },
              beginAtZero: true,
            }
          }
        }
      });

      const domain_chart = document.getElementById('domain_chart');

      var pie_color = ['#F9D7AC','#B7C9E2','#E6B0AA','#B8B8FF','#FFDAB9','#C8A2C8','#F6D8C6','#90EE90','#FFA07A','#FFEFD5','#DDA0DD','#00CED1','#E0FFFF','#FFE4E1','#87CEEB'];
      
      new Chart(domain_chart, {
        type: "pie",
        data: {
          labels: <?php echo $domain_name ?>,
          datasets: [{
            backgroundColor: pie_color,
            data: <?php echo $domain_count ?>,
          }]
        },
        options: {
          radius : 150,
          responsive: false,
          maintainAspectRatio: false,
          height : 400,
          plugins:{
            legend:{
              position: 'left',
            },
          },
        }
      });

      const yearwise_cit = document.getElementById('yearwise_cit');

      new Chart(yearwise_cit, {
        type: "line",
        data: {
          labels: <?php echo $years ?>,
          datasets: [{
            data: <?php echo $yearwise_cit ?>,
          }]
        },
        options: {
          radius : 5,
          responsive: false,
          height:  800,
          width : 400,
          plugins : {
            legend : {
              display : false,
            },
          },
          scales: {
            y: {
              title: {
                display: true,
                text: 'Citation Count',
                font:{
                  size : 16,
                }
              },
              beginAtZero: true,
            }
          }
        }
      });

      
      const profwise_cit =document.getElementById('profwise_cit');

      const profwise_cit_chart = new Chart(profwise_cit, {
        type: "bar",
        data: {
          labels: <?php echo $years ?>,
          datasets: [{
            backgroundColor : ' rgba(93, 63, 211, 0.5) ',
            data: [0,0,0,0,0,0],
          }]
        },
        options: {
          responsive: false,
          maintainAspectRatio: false,
          height : 300,
          plugins : {
            legend : {
              display : false,
            },
          },
          scales: {
            y: {
              title: {
                display: true,
                text: 'Citation Count',
                font:{
                  size : 16,
                }
              },
              beginAtZero: true,
            }
          }
        }
      });



      const pick_prof = document.getElementById("profwise_select");

      pick_prof.addEventListener("change", tracker);
      function tracker(){

        var temp =pick_prof.value;

        temp = temp.replace('[','');
        temp = temp.replace(']','');
        console.log(temp);
        profwise_cit_chart.data.datasets[0].data = temp.split(',');
        profwise_cit_chart.update();

      }


      const yearwise_papers_pub =document.getElementById('yearwise_papers_pub');

      new Chart(yearwise_papers_pub, {
        type: "line",
        data: {
          labels: <?php echo $years ?>,
          datasets: [{
            backgroundColor : 'rgba(255, 148, 112,0.5)',
            borderColor : 'rgba(255, 148, 112,0.7)',
            data: <?php echo $paper_pub_count ?>,
          }]
        },
        options: {
          radius : 5,
          responsive: false,
          // maintainAspectRatio: false,
          height:  800,
          width : 400,
          plugins : {
            legend : {
              display : false,
            },
          },
          scales: {
            y: {
              title: {
                display: true,
                text: 'No of papers published',
                font:{
                  size : 16,
                }
              },
              beginAtZero: true,
            }
          }
        }
      });


      const dept_count = document.getElementById('dept_count');
      
      new Chart(dept_count, {
        type: "pie",
        data: {
          labels: <?php echo $dept ?>,
          datasets: [{
            data: <?php echo $dept_count ?>,
          }]
        },
        options: {
          radius : 150,
          responsive: false,
          maintainAspectRatio: false,
          height : 400,
          plugins:{
            legend:{
              position: 'top',
            },
          },
        }
      });
      
      
      const dist_auth_chart = document.getElementById('dist_auth_chart');

      // var avg_coauth_colors = ['#FF6961','#77DD77','#FFB347','#B5D8EB'];

      new Chart(dist_auth_chart, {
        type: "bar",
        data: {
          labels: <?php echo $name2 ?>,
          datasets: [{
            data: <?php echo $dist ?>,
          }]
        },
        options: {
          radius : 150,
          responsive: false,
          maintainAspectRatio: false,
          height : 400,
          plugins : {
            legend : {
              display : false,
            }
          },
        }
      });

      
// <!-- ----------------------------------------------------------------------------- -->
// <!-- WORD CLOUD  -->
// <!-- ----------------------------------------------------------------------------- -->
      

    // anychart.onDocumentReady(function() {

    //   var word = <?php echo $word; ?>;
    //   var count = <?php echo $count; ?>;

    //   console.log(word);

    //   var combine_obj={};
    //   for(var key in word)  combine_obj[word[key]]=count[key];

    //   console.log(combine_obj);

    //   var chart = anychart.tagCloud(combine_obj);

    //   // set a chart title
    //   chart.title('15 most spoken languages')
    //   // set an array of angles at which the words will be laid out
    //   chart.angles([0]);
    //   // enable a color range
    //   chart.colorRange(true);
    //   // set the color range length
    //   chart.colorRange().length('80%');

    //   // display the word cloud chart
    //   chart.container("wordcloud");
    //   chart.draw();
      
    // });

    <?php $conn->close(); ?>
      
    </script>
  </body>
</html>
