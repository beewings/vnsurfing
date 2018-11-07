
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/boostrap.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">VnSurfing Tour</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#" style="color: #ffffff;">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/admin">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/addarticles">
                  <span data-feather="file"></span>
                  Add Articles
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Drop Articles
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Add Reviews
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Drop Reviews
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-md-6" style="background-color: #ffffff; padding-bottom: 20px; padding-top: 20px;">
              <form action="{{ route('admin.store') }}" method="POST">
                {{ csrf_field() }}
                  <div class="container">
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col large pb-0">
                        <label style="color: #000000;font-family: Arial;font-size: 16px;">NAME</label>
                        <input type="text" class="form-control" required name="name" id="name">
                      </div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col large pb-0">
                        <label style="color: #000000;font-family: Arial;font-size: 16px;">CAPTION</label>
                        <textarea name="caption" class="form-control" required cols="30" rows="5" id="caption"></textarea>
                      </div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col large pb-0">
                        <label style="color: #000000;font-family: Arial;font-size: 16px;">CONTENT</label>
                        <textarea name="content" class="form-control" required cols="30" rows="5" id="content"></textarea>
                      </div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col large pb-0">
                        <label style="color: #000000;font-family: Arial;font-size: 16px;">IMAGES</label>
                        <input type="file" class="form-control" required name="img" id="img">
                      </div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col large pb-0">
                        <button type="submit" class="btn btn-danger" style="margin-left: 40%;">
                          Add Article
                        </button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
