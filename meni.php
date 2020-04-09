<head>
<link rel="stylesheet" href="../public/fastMeal.css">
<link rel="stylesheet" href="../public/isplanirajObrok.css">
</head>
<body>
    <nav id="mainNavbar"class="navbar  navbar-expand-md py-0 py-md-1 fixed-top">
        <a  href="./?stranica=fastMeal" class="navbar-brand">FAST MEAL</a>
        <button class="navbar-toggler px-0" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <img id="slike/hamburger.jpg" src="../public/slike/hamburger4.png" alt="">
        </button>

        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../?stranica=isplanirajObrok" class="nav-link">Isplaniraj obrok</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Nabavka namirnica</a>
                </li>
            </ul>
            <form id="searchForm" class="d-flex align-items-center ml-auto my-1">
              <input class="form-control mr-2 " type="search" placeholder="Search" aria-label="Search">
              <button class="my-0 " type="submit">Search</button>
            </form>
        </div>
    </nav>
    <content>
        <?php include("../fastMeal/template/header.php")?>
        <?php include("../fastMeal/includes/{$stranica}.php")?>
        <?php include("../fastMeal/template/footer.php")?>
    </content>
</body>