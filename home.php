<?php
/*
Author : Shakib Ahmed
E-mail : shakibwap@yahoo.com
WEB: https://shakib.eu.org
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $config['Title']; ?> - Stream and Make Direct Download Link for Your Online Content</title>
    <!-- Favicon -->
    <link href="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/v2.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/app.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/pop.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/jquery.min.js"></script>
    <style>
        .plyr--fullscreen-active video {
            max-height: 100% !important;
        }

        .form-control {
            color: black !important;
        }
    </style>
</head>

<body class="">
    <div class="main-content">
        <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-4">
                <a class="navbar-brand" href="/">
                    <img src="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/logo.png" style="background:white; border-radius:20px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="/home">
                                    <img src="https://cdn.jsdelivr.net/gh/cdnxyz/gpfile@main/logo.png" style="background:white; border-radius: 20px;">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Navbar items -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="/">
                                <svg class="svg-icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M512 0C229.286957 0 0 229.286957 0 512s229.286957 512 512 512 512-229.286957 512-512S794.713043 0 512 0z m41.182609 932.730435c-2.226087 0-4.452174 0-7.791305 1.113043V692.313043c57.878261-1.113043 110.191304-2.226087 158.052174-5.565217-42.295652 130.226087-121.321739 217.043478-150.260869 245.982609z m-82.365218 0c-30.052174-30.052174-107.965217-116.869565-150.260869-245.982609 46.747826 3.33913 100.173913 5.565217 158.052174 5.565217v241.530435c-2.226087 0-4.452174-1.113043-7.791305-1.113043zM89.043478 512c0-27.826087 3.33913-55.652174 7.791305-82.365217 24.486957-4.452174 71.234783-11.130435 136.904347-17.808696-5.565217 32.278261-8.904348 65.669565-8.904347 101.286956 0 35.617391 3.33913 69.008696 7.791304 100.173914-64.556522-6.678261-112.417391-13.356522-136.904348-17.808696-3.33913-27.826087-6.678261-55.652174-6.678261-83.478261z m203.686957 0c0-37.843478 4.452174-73.46087 11.130435-106.852174 51.2-3.33913 109.078261-6.678261 174.747826-6.678261v227.06087c-64.556522-1.113043-123.547826-3.33913-175.86087-7.791305-5.565217-32.278261-10.017391-67.895652-10.017391-105.73913zM552.069565 91.269565c30.052174 30.052174 106.852174 119.095652 150.26087 245.982609-46.747826-3.33913-99.06087-5.565217-156.939131-5.565217V90.156522c2.226087 0 4.452174 1.113043 6.678261 1.113043zM478.608696 90.156522v241.530435c-57.878261 1.113043-110.191304 2.226087-156.939131 5.565217 42.295652-126.886957 120.208696-215.930435 149.147826-245.982609 3.33913 0 5.565217-1.113043 7.791305-1.113043z m66.782608 535.373913V398.469565c64.556522 1.113043 123.547826 3.33913 174.747826 6.678261 6.678261 33.391304 11.130435 69.008696 11.130435 106.852174 0 37.843478-3.33913 73.46087-10.017391 106.852174-51.2 3.33913-110.191304 5.565217-175.86087 6.678261zM789.147826 411.826087c65.669565 6.678261 112.417391 13.356522 136.904348 17.808696 5.565217 26.713043 8.904348 54.53913 8.904348 82.365217s-3.33913 55.652174-7.791305 82.365217c-24.486957 4.452174-71.234783 11.130435-136.904347 17.808696 5.565217-32.278261 7.791304-65.669565 7.791304-101.286956 0-33.391304-3.33913-67.895652-8.904348-99.06087z m116.869565-53.426087c-31.165217-4.452174-75.686957-10.017391-132.452174-15.582609-26.713043-95.721739-73.46087-172.521739-112.417391-227.060869 112.417391 42.295652 201.46087 131.33913 244.869565 242.643478zM362.852174 115.756522c-40.069565 53.426087-85.704348 130.226087-112.417391 225.947826-55.652174 4.452174-100.173913 11.130435-132.452174 15.582609 43.408696-110.191304 133.565217-199.234783 244.869565-241.530435z m-244.869565 549.843478c31.165217 4.452174 75.686957 10.017391 131.33913 15.582609 26.713043 95.721739 71.234783 172.521739 111.304348 225.947826-111.304348-43.408696-199.234783-131.33913-242.643478-241.530435z m545.391304 241.530435c40.069565-53.426087 84.591304-129.113043 111.304348-224.834783 55.652174-4.452174 100.173913-11.130435 131.33913-15.582609-43.408696 109.078261-131.33913 197.008696-242.643478 240.417392z" />
                                </svg>
                                <span class="nav-link-inner--text">Homepage</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body  anonymous ">
                    <!-- Card stats -->
                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">

            <div class="row">
                <div class="col anonymous-box-container">
                    <div class="card shadow anonymous-create-box">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col anonymous-box-container">
                                            <div class="card shadow anonymous-create-box">
                                                <div class="card-header border-0">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-12">
                                                            <h3 class="mb-0">Generate Embed and Download Link</h3>

                                                            <div class="input-group ml-2 mt-2">
                                                                <input type="text" class="form-control" id="longUrl" name="url-photos" placeholder="Google Photos Share Link." value="" required="">
                                                                <input type="hidden" name="_token" value="MY54iwIbI6mOSJ0aUKPf8NtizupB2xdLU0W5nRQW">
                                                            </div>


                                                            <div class="input-group-append mt-3">
                                                                <input id="search-by-title-button" type="submit" class="btn btn-primary">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col anonymous-box-container mt-3">
                                            <div class="card shadow anonymous-create-box">
                                                <div class="card-header border-0">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-12">

                                                            <div id="result"></div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        $("#search-by-title-button").click(function() {
                                            console.log(document.getElementById("longUrl").value);
                                            if ($('#button').is(':checked')) {
                                                var url = "<?= $_url; ?>/create?link=" + document.getElementById("longUrl").value;
                                            } else {
                                                var url = "/create?link=" + document.getElementById("longUrl").value;
                                            }

                                            document.getElementById("result").innerHTML = "Loading...";
                                            $.get(url, function(data, status) {
                                                document.getElementById("result").innerHTML = '<div class="card-header"><div class="row align-items-center"><div class="col"><h1 class="text-center">Download Link</h1></div></div></div><textarea style="height:151px;width:100%;margin-top: 19px;" class="form-control">' + data + '</textarea><br/>';
                                            });
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; <?= $config['Copyright']; ?> - <?= $config['Year']; ?> <a href="/" class="font-weight-bold ml-1"><?= $config['Title']; ?></a> -
                            Design by <a href="<?= $config['_URL']; ?>"><?= $config['_AUTHOR']; ?></a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Terms of Use</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>