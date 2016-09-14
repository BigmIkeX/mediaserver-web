<?php
function get_server_memory_usage(){
 
    $free = shell_exec('free');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2]/$mem[1]*100;
 
    return $memory_usage;
};
?>
<?php
function get_server_cpu_usage(){
 
    $load = sys_getloadavg();
    return $load[0];
 
};
?>

<?php
$ds = disk_total_space("/");
$fs = disk_free_space("/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <title>EMS Landpage</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
    <!-- Progress bar -->
    <link href='css/nprogress.css' rel='stylesheet' />
</head>

<body>
    <!-- Navigation -->
    <!-- Page Content -->
    <div class="container container-css">
        <div class="header">
            <center>
                <img src="img/logo.png" class="animated fadeIn img-server">
                <br>
                <div class="row animated fadeIn">
                    <br>

                    <form method="get" action="https://www.google.com/search">
                        <div class="col-lg-12 searchbar">
                            <input type="text" class="form-control" name="q" placeholder="Google Search...">

                        </div>
                        
                    </form>  
                    <button data-toggle="tooltip" data-placement="right" title="Refresh"  class="btn btn-primary refreshbtn" onclick="myFunction()"><i class="fa fa-refresh" aria-hidden="true"></i> </button>
                </div>
            </center>
        </div>

        <br />
        <!-- Projects Row 1 -->
        <div id="all">

            <div class="row">
                <!-- Deluge -->

                <div  id="deluge-1" data-toggle="tooltip" data-placement="bottom" title="Deluge" class="hvr-grow col-md-4 portfolio-item animated fadeIn project-row" style="animation-delay: 0.1s;">
                    <a id="deluge-2" href="http://emslanding.local:8112/">
                        <img id="deluge" class="img-responsive ping-orange" src="img/deluge3.png" alt="">
                    </a>
                </div >
                <!-- Couchpotato -->
                <div data-toggle="tooltip" data-placement="bottom" title="Couchpotato" class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 0.2s;">
                    <a href="http://emslanding.local:5050/">
                        <img id="couchpotato" class="img-responsive ping-orange" src="img/cp.png" alt="">
                    </a>
                </div>
                <!-- Sonarr -->
                <div data-toggle="tooltip" data-placement="bottom" title="Sonarr" class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 0.3s;">
                    <a href="http://emslanding.local:8989/">
                        <img id="sonarr" class="img-responsive ping-orange" src="img/sonarr.png" alt="">
                    </a>
                </div>
                <!-- Headphones -->
                <div data-toggle="tooltip" data-placement="bottom" title="Headphones" class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 0.4s;">
                    <a href="http://emslanding.local:8181/">
                        <img id="headphones" class="img-responsive ping-orange" src="img/hp.png" alt="">
                    </a>
                </div>
            </div>
            <!-- /.row -->
            <!-- Projects Row 2 -->
            <div class="row">
                <!-- Owncloud -->
                <div data-toggle="tooltip" data-placement="bottom" title="Owncloud" class="hvr-grow col-md-4 portfolio-item animated fadeIn project-row" style="animation-delay: 0.8s;">
                    <a href="http://emslanding.local/owncloud">
                        <img id="owncloud" class="img-responsive  ping-orange" src="img/owncloud.png" alt="">
                    </a>
                </div>
                <!-- Shell in a box -->
                <div data-toggle="tooltip" data-placement="bottom" title="Shell in a box" class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 0.7s;">
                    <a href="http://emslanding.local:4222/">
                        <img id="shell" class="img-responsive ping-orange" src="img/shell.png" alt="">
                    </a>
                </div>
                <!-- Stretto -->
                <div data-toggle="tooltip" data-placement="bottom" title="Stretto" class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 0.6s;">
                    <a href="http://emslanding.local:2000/">
                        <img id="stretto" class="img-responsive ping-orange" src="img/stretto.png" alt="">
                    </a>
                </div>
                <!-- Kanboard -->
                <div data-toggle="tooltip" data-placement="bottom" title="Kanboard" class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 0.5s;">
                    <a href="http://emslanding.local/kanboard/">
                        <img id="kanboard" class="img-responsive ping-orange" src="img/kb.png" alt="">
                    </a>
                </div>
            </div>
            <!-- /.row -->
            <!-- Projects Row 3 -->
            <div class="row">
                <!-- 2048 -->
                <div data-toggle="tooltip" data-placement="bottom" title="2048" class="hvr-grow col-md-4 portfolio-item animated fadeIn project-row" style="animation-delay: 0.9s;">
                    <a href="http://emslanding.local/2048/index.html">
                        <img id="2048" class="img-responsive ping-orange" src="img/2048.png" alt="">
                    </a>
                </div>
                <!-- Plex -->
                <div data-toggle="tooltip" data-placement="bottom" title="Plex" class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 1.0s;">
                    <a href="http://emslanding.local:32400/">
                        <img id="plex" class="img-responsive ping-orange" src="img/plex.png" alt="">
                    </a>
                </div>
                <!--  -->
                <div class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 1.1s;">
                    <a href="#">
                        <img class="img-responsive ping-orange" src="img/app.png" alt="">
                    </a>
                </div>
                <!--  -->
                <div class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 1.2s;">
                    <a href="#">
                        <img class="img-responsive ping-orange" src="img/app.png" alt="">
                    </a>
                </div>
            </div>
            <!-- /.row -->
            <!-- Projects Row 4 -->
            <div class="row">
                <!--  -->
                <div class="hvr-grow col-md-4 portfolio-item animated fadeIn project-row" style="animation-delay: 1.6s;">
                    <a href="#">
                        <img class="img-responsive ping-orange" src="img/app.png" alt="">
                    </a>
                </div>
                <!--  -->
                <div class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 1.5s;">
                    <a href="#">
                        <img class="img-responsive ping-orange" src="img/app.png" alt="">
                    </a>
                </div>
                <!--  -->
                <div class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 1.4s;">
                    <a href="#">
                        <img class="img-responsive ping-orange" src="img/app.png" alt="">
                    </a>
                </div>
                <!--  -->
                <div class="col-md-4 portfolio-item hvr-grow animated fadeIn project-row" style="animation-delay: 1.3s;">
                    <a href="http://emslanding.local/kanboard/">
                        <img id="prueba" class="img-responsive ping-orange" src="img/kb.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
<center>
        <button data-toggle="tooltip" data-placement="bottom" title="CPU usage" type="button" class="btn btn-success animated fadeIn btnpc" style="animation-delay: 1.8s;"><span>CPU: </span> <span class="result"><?= round(get_server_cpu_usage(), 1) ?>%</span></button>
        <button data-toggle="tooltip" data-placement="bottom" title="RAM usage" type="button" class="btn btn-success animated fadeIn btnpc" style="animation-delay: 1.9s;"><span>RAM:</span> <span class="result"><?= round(get_server_memory_usage(), 1) ?>%</span></button>
        <button data-toggle="tooltip" data-placement="bottom" title="Total disk space" type="button" class="btn btn-success animated fadeIn btnpc" style="animation-delay: 2.1s;"><span>HDD TOTAL: </span> <span class="result"><?= round($ds / 1024 / 1024 / 1024 / 1024, 1) ?>TB</span></button>
                <button data-toggle="tooltip" data-placement="bottom" title="Current disk space" type="button" class="btn btn-success animated btnpc fadeIn" style="animation-delay: 2.2s;"><span>HDD FREE: </span> <span class="result"><?= round($fs / 1024 / 1024 / 1024 / 1024, 1) ?>TB</span></button>
</center>
    </div>



    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/checkservices.js"></script>
    <!-- NProgress JS -->
    <script src='js/nprogress.js'></script>
    <!-- Fontawesome own CDN -->
    <script src="https://use.fontawesome.com/267fbb4ad2.js"></script>
    <!-- Bootstrap JS -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- NProgress bar -->
    <script>
        $('body').show();
        $('.version').text(NProgress.version);
        NProgress.start();
        setTimeout(function () { NProgress.done(); $('.fade').removeClass('out'); }, 3500);

        $("#b-0").click(function () { NProgress.start(); });
        $("#b-40").click(function () { NProgress.set(0.4); });
        $("#b-inc").click(function () { NProgress.inc(); });
        $("#b-100").click(function () { NProgress.done(); });
    </script>
    <!-- Refresh function -->
    <script>
        function myFunction() {
            $('#all').load('http://emslanding.local #all ');
            var head = document.getElementsByTagName('head')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'js/checkservices.js';
            head.appendChild(script);

            $('body').show();
            $('.version').text(NProgress.version);
            NProgress.start();
            setTimeout(function () { NProgress.done(); $('.fade').removeClass('out'); }, 3500);
            $("#b-0").click(function () { NProgress.start(); });
            $("#b-40").click(function () { NProgress.set(0.4); });
            $("#b-inc").click(function () { NProgress.inc(); });
            $("#b-100").click(function () { NProgress.done(); });
        }

    </script>
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>


</body>
</html>
