
<!DOCTYPE html>
<html>
    
<head>
    <title>Firepvp!</title>
    <link rel="shortcut icon" href="use/image.png" />
    <link rel="stylesheet" type="text/css" href="use/styles/index.css" />
    <script src="use/js/index.js"></script>
    
</head>
<body style="background-image: url(use/image.png); background-size: 100vh;">
    <div class="container">

       


        <div class="pos">

            <div class="header">
                <h1>FirePVP!</h1>
                <!--
        <img src="use/header.png" alt="Header" style="wclassth: 100vh; height: 60px;">
        -->
            </div>



            <div class="nav">
                <a class="button" onclick="load_home()">Home</a>
                <a class="button" onclick="load_ranks()">Ranks</a>
                <a class="button" onclick="load_Dynmap()">Dynmap</a>
            </div>

            <div class="selected" >
                <p class="selected" id="selectedtext" >Home Page</p>
            </div>
            
            <div class="Footer">
                <?PHP include 'use/php/index.php'; ?>
            </div>
            
            <img src="use/image.png" alt="FirePVP" class="picture">
        </div>



        <div class="section" id="section">
            
        </div>

        <div class="TimesLoaded">

        </div>
    </div>

    




</body>

</html>
