<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Teacher List</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="offset-md-2 col-md-8">
            <!-- New Teacher Card -->
            <div class="card">
                <div class="card-header">
                    New Teachers
                </div>
                <div class="card-body">
                    <!-- New Teacher Form -->
                    <form action="create" method="POST">
                        @csrf
                        <!-- teacher name -->
                        <div class="mb-3">
                            <label for="Teacher-name" class="form-label">Teacher</label>
                            <input type="text" name="name" id="Teacher-name" class="form-control" placeholder="Enter a new Teacher">
                        </div>

                        <!-- add teacher button -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus me-2"></i>Add Teacher
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Current Teacher
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Teacher</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Teacher 1</td>
                                <td>
                                    <form action="#" method="POST" class="d-inline">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Teacher 2</td>
                                <td>
                                    <form action="#" method="POST" class="d-inline">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Teacher 3</td>
                                <td>
                                    <form action="#" method="POST" class="d-inline">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

