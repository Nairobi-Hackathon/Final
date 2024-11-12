<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Compliance Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style>
      body {
        background-color: #f7f9fc;
      }
      .sidebar {
        background-color: #eaeaead9;
        min-height: 100vh;
      }
      .sidebar h5 {
        color: #495057;
      }
      .sidebar .nav-link {
        color: #495057;
        font-weight: 500;
      }
      .sidebar .nav-link.active {
        background-color: #dcdcdc;
        color: #343a40;
      }
      .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }
      .compliance-score-card {
        background-color: #ffa726;
        color: #ffffff;
      }
      .violations-card {
        background-color: #ef5350;
        color: #ffffff;
      }
      .trends-card {
        background-color: #66bb6a;
        color: #ffffff;
      }
      .btn-primary {
        background-color: #007bff;
        border: none;
      }
      .btn-outline-primary {
        color: #007bff;
        border-color: #007bff;
      }
      .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
          <div class="position-sticky">
            <h5 class="text-center py-3">Admin Dashboard</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#overview"
                  ><i class="fas fa-tachometer-alt"></i> Overview</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#upload"
                  ><i class="fas fa-upload"></i> Upload & Validation</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#audit"
                  ><i class="fas fa-clipboard-check"></i> Audit Management</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reports"
                  ><i class="fas fa-file-alt"></i> Compliance Reports</a
                >
              </li>
            </ul>
          </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <!-- Overview Section -->
          <section id="overview" class="my-4">
            <h2 class="mb-4">Compliance Overview</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="card compliance-score-card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">
                      <i class="fas fa-shield-alt"></i> Compliance Score
                    </h5>
                    <p class="display-5">95%</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card violations-card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">
                      <i class="fas fa-exclamation-circle"></i> Violations
                      Detected
                    </h5>
                    <p class="display-5">3</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card trends-card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">
                      <i class="fas fa-chart-line"></i> Compliance Trends
                    </h5>
                    <p class="display-5">+5%</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Upload & Validation Section -->
          <section id="upload" class="my-4">
            <h2>Upload & Validation</h2>
            <div class="card mb-4">
              <div class="card-body">
                <form>
                  <div class="mb-3">
                    <label for="documentUpload" class="form-label"
                      >Upload Company Document</label
                    >
                    <input
                      type="file"
                      class="form-control"
                      id="documentUpload"
                    />
                  </div>
                  <button type="button" class="btn btn-primary">
                    <i class="fas fa-upload"></i> Upload and Validate
                  </button>
                </form>
              </div>
            </div>
          </section>

          <!-- Audit Management Section -->
          <section id="audit" class="my-4">
            <h2>Audit Management</h2>
            <div class="card mb-4">
              <div class="card-body">
                <button type="button" class="btn btn-secondary mb-3">
                  <i class="fas fa-plus-circle"></i> Conduct New Audit
                </button>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Audit ID</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Findings</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>2024-10-12</td>
                      <td><span class="badge bg-success">Completed</span></td>
                      <td>2 Violations</td>
                      <td>
                        <button class="btn btn-info btn-sm">View Report</button>
                      </td>
                    </tr>
                    <!-- Additional audit entries -->
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <!-- Compliance Reports Section -->
          <section id="reports" class="my-4">
            <h2>Compliance Reports</h2>
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Latest Compliance Report</h5>
                <p>Date: 2024-10-12</p>
                <p>
                  Summary: Company adheres to 95% of the data protection rules.
                  3 minor violations detected.
                </p>
                <button class="btn btn-outline-primary">
                  <i class="fas fa-download"></i> Download Full Report
                </button>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
