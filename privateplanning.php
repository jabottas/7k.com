<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>7k.com</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/sup4.css" rel="stylesheet" />
    </head>
    <?php
        include("verifica_usuario_logado.php");

        $pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');

    ?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-3">
                <a class="navbar-brand" href="privateindex.php"><img class="logo7k" src="assets/img/logo7k.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <!--<li class="nav-item"><a class="nav-link" href="MPD1.html">MPD1</a></li>
                        <li class="nav-item"><a class="nav-link" href="MPD2.html">MPD2</a></li>
                        <li class="nav-item"><a class="nav-link" href="MPD3.html">MPD3</a></li>
                        <li class="nav-item"><a class="nav-link">-</a></li>-->
                    <li class="nav-item"><a class="nav-link" href="privateavaliacao.php">Avaliações</a></li>
                    <li class="nav-item"><a class="nav-link" href="privateplanning.php">Plan to listen</a></li>
                    <li id="dropdown" class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="div-100">
        <div class="areacomentario">
            <div class="wrapper">
                <h2 class="title">Plan to listen</h2>
                <div class="inputFields">
                    <input type="text" id="taskValue" placeholder="músicas">
                    <button type="submit" id="addBtn" class="btn"><i class="fa fa-plus"></i></button>
                </div>
                <div class="content">
                    <ul id="tasks">
                        
                    </ul>
                </div>
            </div>
        </div>                
        </div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
		$(document).ready(function() {
			// Show Tasks
			function loadTasks() {
				$.ajax({
					url: "show-tasks.php",
					type: "POST",
					success: function(data) {
						$("#tasks").html(data);
					}
				});
			}

			loadTasks();

			// Add Task
			$("#addBtn").on("click", function(e) {
				e.preventDefault();

				var task = $("#taskValue").val();

				$.ajax({
					url: "add-task.php",
					type: "POST",
					data: {task: task},
					success: function(data) {
						loadTasks();
						$("#taskValue").val('');
						if (data == 0) {
							alert("Something wrong went. Please try again.");
						}
					}
				});
			});

			// Remove Task
			$(document).on("click", "#removeBtn", function(e) {
				e.preventDefault();
				var id = $(this).data('id');
				
				$.ajax({
					url: "remove-task.php",
					type: "POST",
					data: {id: id},
					success: function(data) {
						loadTasks();
						if (data == 0) {
							alert("Something wrong went. Please try again.");
						}
					}
				});
			});
		});
	</script>
        <!-- Footer
        <footer class="py-4 bg-dark flex-shrink-0">
            <div class="container text-center">
              <p class="text-muted">7k.com - 2021 ?? Todos os Direitos Reservados</p>
            </div>
          </footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>