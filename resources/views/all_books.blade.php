<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="styleshee">
    <link href="assets/vendor/glightbox/css/</a>glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
    table,
    tr,
    td {
        padding: 5px;
        text-align: center;
    }
</style>

<body>
    <?php
    session('email');
    ?>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <a href="profile"><img src="/images/logo.png" alt="logo"></a>
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li class="nav-link">
                        <form action="search_all_books" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="search" name="search" placeholder="Search book name">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </li>
                    <li><a class="nav-link scrollto" href="admin_home">All Users</a></li>
                    <li><a class="nav-link scrollto" href="add_book">Add Books</a></li>
                    <li><a class="nav-link scrollto active" href="all_books">All Books</a></li>
                    <li><a class="nav-link scrollto" href="rented_books">Rented Books</a></li>
                    <li><a class="nav-link scrollto" href="logout1">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="section-title" style="margin-top: 30px;">
                <h2
                    style="text-align: center; margin-top:10px; font-weight: 500; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                    Total Books</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Auther Name</th>
                    <th>Pages</th>
                    <th>Image</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($show as $shows)
                    <tr>
                        <td>{{ $shows->id }}</td>
                        <td>{{ $shows->book_name }}</td>
                        <td>{{ $shows->auther_name }}</td>
                        <td>{{ $shows->pages }}</td>
                        <td> <img src="{{ 'books/' . $shows->image }}" class="rounded" width="50px" /> </td>
                        <td><a href="{{ url('updatebookpage/' . $shows->id) }}" class="btn btn-warning">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {{ $show->links() }}
        </div>
    </div>
</body>

</html>
