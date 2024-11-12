<?php

include('database/db.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compliance Management Dashboard</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
      rel="stylesheet"
    />
    <style>
      .sidebar {
        height: 100vh;
        position: fixed;
      }

      .sidebar .nav-link {
        color: #333;
      }

      .sidebar .nav-link.active {
        background-color: #007bff;
        color: white;
      }

      .content {
        margin-left: 250px;
      }

      .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }

      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
      }

      .kpi-card {
        border-left: 5px solid;
      }

      .kpi-card.kpi-success {
        border-color: #28a745;
      }

      .kpi-card.kpi-warning {
        border-color: #ffc107;
      }

      .kpi-card.kpi-danger {
        border-color: #dc3545;
      }

      .icon-large {
        font-size: 3rem;
      }

      table {
        width: 100%;
        text-align: left;
      }

      table th,
      table td {
        padding: 10px;
      }
    </style>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
          <div class="position-sticky">
            <h5 class="sidebar-heading p-3">Compliance Dashboard</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#dashboard">
                  <i class="bi bi-speedometer2"></i> Dashboard Overview
                </a>
              </li>
              <li class="nav-item">
                    <a href="audit.php" class="btn btn-warning my-5">View Reports</a> 
              </li>
              <li class="nav-item">
              <a href="audit.php" class="btn btn-warning">Make Audit</a>  
              </li>
            </ul>
          </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
          <div id="dashboard">
            <div
              class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
            >
              <h1 class="h2">Compliance User Dashboard Overview</h1>
            </div>

            <!-- KPI Cards Section -->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card kpi-card kpi-success text-white bg-success">
                  <div class="card-body d-flex align-items-center">
                    <i class="bi bi-clipboard-check icon-large me-3"></i>
                    <div>
                      <h5 class="card-title">Compliance Rate</h5>
                      <p class="card-text">95% Compliance</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card kpi-card kpi-warning text-white bg-warning">
                  <div class="card-body d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle icon-large me-3"></i>
                    <div>
                      <h5 class="card-title">Open Audits</h5>
                      <p class="card-text">3 Pending</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card kpi-card kpi-danger text-white bg-danger">
                  <div class="card-body d-flex align-items-center">
                    <i class="bi bi-x-circle icon-large me-3"></i>
                    <div>
                      <h5 class="card-title">Compliance Violations</h5>
                      <p class="card-text">2 Violations Detected</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Compliance Audits Section -->
            <div class="card mb-4" id="complianceAudits">
              <div class="card-header bg-primary text-white">
                <h5>Compliance Audits</h5>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Audit Title</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                <?php

                  $getaudits = "SELECT * FROM audits";
                  $feed = mysqli_query($conn, $getaudits);

                  while($row = mysqli_fetch_assoc($feed)){
                         
                    $title = $row['Title'];
                    $date = $row['A_Date'];
                    $status = $row['Audit_Status'];


                  echo'
                    
                    <tr>
                      <td>'.$title.'</td>
                      <td>'.$date.'</td>
                      <td><span class="badge bg-success">'.$status.'</span></td>
                      <td>
                        <a href="#" class="btn btn-sm btn-primary"
                          >View Report</a
                        >
                      </td>
                    </tr>
                    
                    ';
       
                  }

                ?>

                  </tbody>
                </table>
              </div>
            </div>

          
          </div>
        </main>
      </div>
    </div>




    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64b264c1cc26a871b0288c76/1h5cdohlr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.js"></script>

    <script>
      // Smooth scroll functionality for sidebar links
      document.querySelectorAll(".nav-link").forEach((link) => {
        link.addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
          });

          // Toggle active class
          document
            .querySelectorAll(".nav-link")
            .forEach((l) => l.classList.remove("active"));
          this.classList.add("active");
        });
      });
    </script>
  </body>
</html>