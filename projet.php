<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/dist/main.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/dist/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/dist/locales/fr.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.min.js"></script>
    <title>Timy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      #calendar-container {
      margin-top: 20px;
    }

    #calendar-container table {
      width: 100%;
    }

    #calendar-container th, #calendar-container td {
      text-align: center;
      padding: 10px;
    }

    .event {
      background-color: #007bff;
      color: #fff;
      border-radius: 4px;
      padding: 5px;
      cursor: pointer;
    }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            overflow-x: hidden;
        }


.image {
 width: 100%;
 height: 500px;
 background-size: cover;
  background-position: center;
  margin-top: 100px;
}
        .fullscreen-image {
            width: 100%;
            height: 100vh;
        }

        .navbar {
            background-color: transparent;
            transition: background 0.5s;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .day {
            padding: 10px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .day-name {
            background-color: #eee;
            border-bottom: 1px solid #ccc;
        }

        .b{
            display: block;
            margin-left:600px;
            padding: 2px 10px;
            border-radius: 10px;
        }

        .tips-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .tip {
            width: 250px;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tip-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .tip-content {
            font-size: 16px;
            line-height: 1.5;
        }
        .login{
          border-radius: 10px;
          padding-right : 500px;
        }
        .username {
          font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
    </style>
</head>

<body>

 <img src="gestion.jpg" class="image">


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Timy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="projet.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#listtodo">List To Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#calender">Calender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tips-section">Tips</a>
                    </li>
                    <button class="b">
                        <a class="nav-link" href="form.php">LogOut</a>
                    </button>
                    <li>
                      <div class="username"><?php
                    $nom = $_POST['username'];
                    echo "$nom";
                    $firstnom = $_POST['firstname'];
                    echo "$firstnom";
                    $secondnom = $_POST['secondname'];
                    echo "$secondnom";
                    ?></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="d-flex flex-column justify-content-center align-items-center" style="background-color: #eee;"
        id="listtodo">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h4 class="text-center my-3 pb-3">To Do List</h4>

                            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2"
                                id="todoForm" action="insertion.php" method="post">
                                <div class="col-12">
                                    <div class="form-outline">
                                        <input type="text" id="formTaskName" name="taskName" class="form-control"
                                            placeholder="Enter a task name" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-outline">
                                        <input type="text" id="formStatus" name="status" class="form-control"
                                            placeholder="Enter the status" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="addTask">Save</button>
                                </div>
                            </form>

                        
                            <table class="table mb-4">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Todo item</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('task.php');
            $taskObject = new Task();
            $tasks = $taskObject->getAllTasks();

            foreach ($tasks as $task) {
                echo "<tr>";
                echo "<th scope='row'>" . $task['id'] . "</th>";
                echo "<td>" . $task['taskName'] . "</td>";
                echo "<td>" . $task['status'] . "</td>";
                echo "<td>";
                echo "<form method='post' action='supp.php'>";
                echo "<input type='hidden' name='id' value='" . $task['id'] . "'/>";
                echo "<button type='submit' class='btn btn-danger' name='deleteTask'>Delete</button>";
                echo "</form>";
                echo "<form method='get' action='modif.php'>";
                echo "<input type='hidden' name='id' value='" . $task['id'] . "'/>";
                echo "<button type='submit' class='btn btn-success ms-1' name='modifyTask'>Modify</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section></br></br>

    <section id="calendar" class="section-container">
  <h1 id="month-year" class="text-center"></h1>
  <div id="calendar-container" class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Sun</th>
          <th>Mon</th>
          <th>Tue</th>
          <th>Wed</th>
          <th>Thu</th>
          <th>Fri</th>
          <th>Sat</th>
        </tr>
      </thead>
      <tbody id="calendar-body">
    
      </tbody>
    </table>
  </div>
</section>

<div id="event-modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Event Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="event-title"></p>
        <p id="event-description"></p>
        <p id="event-meet-link"></p>
      </div>
    </div>
  </div>
</div></br>

<button class="b" onclick="addEvent()">ADD EVENT</button></br></br></br>
<h2><i>Tips : Improve your Time Management : </i></h2></br></br>
    <section class="tips-section" id="tips-section">
      
        <div class="tip">
            <h3 class="tip-title">Plan your day</h3>
            <p class="tip-content">Plan out your tasks and deadlines for the day to avoid last-minute stress and
                procrastination.</p>
        </div>

        <div class="tip">
            <h3 class="tip-title">Set time blocks</h3>
            <p class="tip-content">Break your work into specific time blocks, such as one for planning, another for
                research, and another for writing.</p>
        </div>

        <div class="tip">
            <h3 class="tip-title">Prioritize tasks</h3>
            <p class="tip-content">Focus on completing the most important tasks first to improve efficiency and
                motivation.</p>
        </div>

        <div class="tip">
            <h3 class="tip-title">Take breaks</h3>
            <p class="tip-content">Take regular breaks to prevent burnout and maintain focus and productivity.</p>
        </div>

        <div class="tip">
            <h3 class="tip-title">Delegate tasks</h3>
            <p class="tip-content">Consider delegating tasks that you're not the most suitable for, freeing up your time
                for more important work.</p>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script>
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            var navbar = document.getElementById("navbar");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                navbar.style.background = "#501e27";
            } else {
                navbar.style.background = "transparent";
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
    updateCalendar();
  });

  function updateCalendar() {
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
    const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
    const startingDay = firstDayOfMonth.getDay();

    document.getElementById('month-year').innerText = new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(currentDate);

    const calendarBody = document.getElementById('calendar-body');
    calendarBody.innerHTML = '';

    let dayCount = 1;

    for (let i = 0; i < 6; i++) {
      const row = document.createElement('tr');
      for (let j = 0; j < 7; j++) {
        const cell = document.createElement('td');
        if (i === 0 && j < startingDay) {
          cell.innerText = '';
        } else if (dayCount > daysInMonth) {
  
          cell.innerText = '';
        } else {
          cell.innerText = dayCount;
          cell.setAttribute('data-day', dayCount);
          cell.addEventListener('click', showEventsForDay);
          dayCount++;
        }
        row.appendChild(cell);
      }
      calendarBody.appendChild(row);
    }
  }

  function showEventsForDay(event) {
    const day = event.target.getAttribute('data-day');
    alert('Événements pour le jour ' + day); 
  }

  let events = []; 

  
  document.addEventListener('DOMContentLoaded', function () {
    updateCalendar();
  });

  function updateCalendar() {
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
    const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
    const startingDay = firstDayOfMonth.getDay();

    document.getElementById('month-year').innerText = new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(currentDate);

    const calendarBody = document.getElementById('calendar-body');
    calendarBody.innerHTML = '';

    let dayCount = 1;

    for (let i = 0; i < 6; i++) {
      const row = document.createElement('tr');
      for (let j = 0; j < 7; j++) {
        const cell = document.createElement('td');
        if (i === 0 && j < startingDay) {
          
          cell.innerText = '';
        } else if (dayCount > daysInMonth) {
          
          cell.innerText = '';
        } else {
        
          cell.innerText = dayCount;
          cell.setAttribute('data-day', dayCount);
          cell.addEventListener('click', showEventsForDay);
          dayCount++;
        }
        row.appendChild(cell);
      }
      calendarBody.appendChild(row);
    }

    updateCalendarWithEvents();
  }

  function showEventsForDay(event) {
    const day = event.target.getAttribute('data-day');
    const eventsForDay = events.filter(event => event.day == day);

    if (eventsForDay.length > 0) {
      let eventsDetails = 'Événements pour le jour ' + day + ':\n';
      eventsForDay.forEach(event => {
        eventsDetails += `- ${event.title} (${event.description})\n`;
      });
      alert(eventsDetails);
    } else {
      alert('Aucun événement pour le jour ' + day);
    }
  }

  function addEvent() {
    const title = prompt('Entrez le titre de l\'événement:');
    const description = prompt('Entrez la description de l\'événement:');
    const meetLink = prompt('Entrez le lien Google Meet:');
    const day = prompt('Entrez le jour (1-31):');

    if (day >= 1 && day <= 31) {
      // Stockez l'événement dans le tableau
      events.push({
        title: title,
        description: description,
        meetLink: meetLink,
        day: day
      });

      updateCalendarWithEvents();

      alert('Événement ajouté : ' + title + ' - ' + description + ' - ' + meetLink + ' le jour ' + day);
    } else {
      alert('Veuillez entrer un jour valide (entre 1 et 31)');
    }
  }

  function updateCalendarWithEvents() {
    events.forEach(event => {
      const cell = document.querySelector(`[data-day="${event.day}"]`);
      if (cell) {
        const eventElement = document.createElement('div');
        eventElement.classList.add('event');
        eventElement.innerText = event.title;
        eventElement.addEventListener('click', function () {
          showEventsForDay({ target: cell });
        });
        cell.appendChild(eventElement);
      }
    });
  }
    </script>
</body>

</html>
