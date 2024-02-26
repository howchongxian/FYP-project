<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>F1 Driver and Team Standings 2023</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="header">

    <img src="F1/Victor motorsport.jpg" class="logo" width="150px" height="90px">
    <nav class="navbar">
        <a href="Index.php">Home</a>
        <a href="news_video.php">News and Videos</a>
        <a href="schedule.php">Schedule & Result</a>
        <a href="driver and team.php">Drivers and Team Standings</a>
        <a href="product_list.php">Product</a>
        <a href="about us.php">About Us</a>
        <a href="contact us.php">Contact Us</a>
    </nav>
    <a href="login.php" class="btn">Login</a>
</header>

  <h1>F1 Driver and Team Standings 2023</h1>

  <div class="team-standings">
    <h2>Team Standings</h2>
    <table id="team-standings-table">
      <tr>
        <th>Team</th>
        <th>Points</th>
      </tr>
    </table>
  </div>

  <div class="driver-standings">
    <h2>Driver Standings</h2>
    <div id="driver-standings-container"></div>
  </div>

  <script>
    const drivers = [
      {
        driver: 'Lewis Hamilton',
        picture: 'F1/Lewis_Hamilton.jpg',
        team: 'Mercedes',
        country: 'United Kingdom',
        podiums: 10,
        points: 300,
        championships: 7,
        gridPosition: '1st',
        dateOfBirth: '07/01/1985'
      },
      {
        driver: 'Max Verstappen',
        picture: 'F1/Max_Verstappen.jpg',
        team: 'Red Bull',
        country: 'Netherlands',
        podiums: 8,
        points: 280,
        championships: 0,
        gridPosition: '1st',
        dateOfBirth: '30/09/1997'
      },
      {
        driver: 'Charles Leclerc',
        picture: 'F1/Charles_Leclerc.jpg',
        team: 'Ferrari',
        country: 'Monaco',
        podiums: 4,
        points: 180,
        championships: 0,
        gridPosition: '2nd',
        dateOfBirth: '16/10/1997'
      },
      {
        driver: 'Sergio Perez',
        picture: 'F1/Sergio_Perez.jpg',
        team: 'Red Bull',
        country: 'Mexico',
        podiums: 2,
        points: 120,
        championships: 0,
        gridPosition: '3rd',
        dateOfBirth: '26/01/1990'
      },
      {
        driver: 'Carlos Sainz',
        picture: 'F1/Carlos_Sainz.jpg',
        team: 'Ferrari',
        country: 'Spain',
        podiums: 1,
        points: 100,
        championships: 0,
        gridPosition: '5th',
        dateOfBirth: '01/09/1994'
      },
      {
        driver: 'George Russell',
        picture: 'F1/George_Russell.jpg',
        team: 'Mercedes',
        country: 'United Kingdom',
        podiums: 0,
        points: 50,
        championships: 0,
        gridPosition: '7th',
        dateOfBirth: '15/02/1998'
      }
    ];

    function generateDriverCards() {
      const driverStandingsContainer = document.getElementById('driver-standings-container');

      drivers.forEach(driver => {
        const card = document.createElement('div');
        card.className = 'driver-card';
        card.innerHTML = `
          <img src="${driver.picture}" alt="${driver.driver}">
          <div class="driver-card-details">
            <h3>${driver.driver}</h3>
            <p>Team: ${driver.team}</p>
            <p>Country: ${driver.country}</p>
            <p>Podiums: ${driver.podiums}</p>
            <p>Points: ${driver.points}</p>
            <p>World Championships: ${driver.championships}</p>
            <p>Highest Grid Position: ${driver.gridPosition}</p>
            <p>Date of Birth: ${driver.dateOfBirth}</p>
          </div>
        `;

        driverStandingsContainer.appendChild(card);
      });
    }

    function generateTeamStandings() {
      const table = document.getElementById('team-standings-table');
      const teamStandings = {};

      drivers.forEach(driver => {
        if (teamStandings[driver.team]) {
          teamStandings[driver.team] += driver.points;
        } else {
          teamStandings[driver.team] = driver.points;
        }
      });

      for (let team in teamStandings) {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${team}</td>
          <td>${teamStandings[team]}</td>
        `;
        table.appendChild(row);
      }
    }

    generateDriverCards();
    generateTeamStandings();
  </script>
</body>
</html>
