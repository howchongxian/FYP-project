<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>F1 Schedule and Results</title>
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

<h1>F1 Schedule and Results</h1>
  <table id="scheduleTable">
    <tr>
      <th>Grand Prix</th>
      <th>Date</th>
      <th>Race Winner</th>
      <th>Points</th>
      <th>Track Picture</th>
      <th>Track Map</th>
    </tr>
</table>

<div id="modal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <div class="modal-content">
      <img id="modalImage" src="" alt="Track Picture">
    </div>
  </div>

<script>
    const f1Schedule = [
    { 
        grandPrix: "Bahrain Grand Prix", 
        date: "3-5 March 2023", 
        raceWinner: "Max Verstappen", 
        points: 25,
        trackImage: "F1/Bahrain.jpg",
        trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/bahrain-international-circuit-track-information/"
    },

    { 
        grandPrix: "Saudi Arabia Grand Prix", 
        date: "17-19 March 2023", 
        raceWinner: "Sergio Perez", 
        points: 25,
        trackImage: "F1/Jeddah.jpg",
        trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/jeddah-corniche-circuit/"
    },

    { 
      grandPrix: "Monaco Grand Prix", 
      date: "26-28 May 2023", 
      raceWinner: "Max Verstappen", 
      points: 25,
      trackImage: "F1/monaco.jpg",
      trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/monte-carlo-circuit-information/"
    },

    { 
      grandPrix: "Australia Grand Prix", 
      date: "31 March - 2 April 2023",
      raceWinner: "Max Verstappen",
      points: 25,
      trackImage: "F1/australia.jpg",
      trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/albert-park-melbourne-circuit-information/"
    },
    ];

    const table = document.getElementById("scheduleTable");

    f1Schedule.forEach((race, index) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${race.grandPrix}</td>
        <td>${race.date}</td>
        <td>${race.raceWinner}</td>
        <td>${race.points}</td>
        <td><img class="track-img" src="${race.trackImage}" alt="${race.grandPrix}" onclick="openModal('${race.trackImage}')"></td>
        <td><span class="track-map" onclick="openTrackMap('${race.trackMapLink}')">View Map</span></td>
      `;
      table.appendChild(row);
    });

    const upcomingRaces = [
    { 
        grandPrix: "Canada Grand Prix", 
        date: "16-18 Jun 2023",
        trackImage: "F1/canada.jpg",
        trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/circuit-gilles-villeneuve-montreal-circuit-information/"
      },

      { 
        grandPrix: "Italy Grand Prix", 
        date: "1-3 September 2023",
        trackImage: "F1/italy.jpg",
        trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/autodromo-nazionale-monza-italy-circuit-information/"
      },
      { 
        grandPrix: "Singapore Grand Prix", 
        date: "15-17 September 2023",
        trackImage: "F1/singapore.jpg",
        trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/singapore-street-circuit/"
      },

      { 
        grandPrix: "Abu Dhabi Grand Prix", 
        date: "24-26 November 2023",
        trackImage: "F1/Abu_Dhabi.jpg",
        trackMapLink: "https://www.racefans.net/f1-information/going-to-a-race/yas-island-abu-dhabi-circuit-information/"
      },

      
    ];

    upcomingRaces.forEach((race) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${race.grandPrix}</td>
        <td>${race.date}</td>
        <td class="upcoming-race">Upcoming</td>
        <td>-</td>
        <td><img class="track-img" src="${race.trackImage}" alt="${race.grandPrix}" onclick="openModal('${race.trackImage}')"></td>
        <td><span class="track-map" onclick="openTrackMap('${race.trackMapLink}')">View Map</span></td>
      `;
      
      table.appendChild(row);
    });


    function openTrackMap(link) {
      window.open(link);
    }

    function openModal(imageSrc) {
      const modal = document.getElementById("modal");
      const modalImage = document.getElementById("modalImage");
      modal.style.display = "block";
      modalImage.src = imageSrc;
    }
    
    // Function to close modal
    function closeModal() {
      const modal = document.getElementById("modal");
      modal.style.display = "none";
    }
  </script>
</body>
</html>

