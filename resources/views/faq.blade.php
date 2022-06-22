<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img style="width: 40px" src="https://styles.redditmedia.com/t5_2uakt/styles/communityIcon_fmttas2xiy351.png" alt="Logo Laravel">
                <span class=" mx-2 fs-4">Primo Laravel</span>
            </a>
    
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/faq" class="nav-link active">FAQs</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>

    <div class="container main">
        <h1>FAQ</h1>

        <h4>FAQ 1</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, odio? Odit esse optio possimus unde, repellat in ipsum qui consectetur perferendis repudiandae deserunt excepturi. Aliquam, eaque maxime! Pariatur ducimus dolore aliquid nobis veritatis alias esse eos rerum laborum molestiae neque quisquam inventore, ipsa a quibusdam odit modi eum deserunt consectetur?</p>

        <h4>FAQ 2</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, odio? Odit esse optio possimus unde, repellat in ipsum qui consectetur perferendis repudiandae deserunt excepturi. Aliquam, eaque maxime! Pariatur ducimus dolore aliquid nobis veritatis alias esse eos rerum laborum molestiae neque quisquam inventore, ipsa a quibusdam odit modi eum deserunt consectetur?</p>
    </div>

</body>
</html>
