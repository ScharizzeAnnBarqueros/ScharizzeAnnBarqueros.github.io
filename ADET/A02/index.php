<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EchoBeat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="img/musicicon.png" rel="icon" type="image/png">

</head>



<body>

    <?php
    $page = "home";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case "library":
            case "likes":
            case "home":
                break;
            default:
                $page = "home";
                break;
        }
    }
    ?>


    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-2">
                <div class="card side-container">
                    <div class="buttons pt-3 px-2">
                        <a href="?page=home" class="nav-item">
                            <span class="fa fa-home px-2"></span>
                            <span class="label">Home</span>
                        </a>
                        <a href="?page=library" class="nav-item">
                            <span class="fa fa-book px-2"></span>
                            <span class="label">Your Library</span>
                        </a>
                        <a href="?page=likes" class="nav-item">
                            <span class="fa fa-heart px-2"></span>
                            <span class="label">Liked Songs</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-10">
                <div class="card main-container p-4">
                    <div class="spotify-playlists">
                        <?php include("shared/" . $page . ".php") ?>

                    </div>

                </div>

            </div>
        </div>




        <script>
            function updatePlaylistVisibility(listId, showAllId) {
                const container = document.getElementById(listId);
                const items = container.querySelectorAll('.playlist-item');
                const showAllCard = document.getElementById(showAllId);
                const maxVisible = 2;
                const isMobile = window.innerWidth <= 768;

                items.forEach((item, index) => {
                    item.style.display = isMobile ? (index < maxVisible ? 'block' : 'none') : 'block';
                });

                if (isMobile && items.length > maxVisible) {
                    showAllCard.style.display = 'block';
                } else {
                    showAllCard.style.display = 'none';
                }
            }

            // On load and resize
            function refreshAllPlaylists() {
                updatePlaylistVisibility('trending-list', 'showAllText1');
                updatePlaylistVisibility('popular-list', 'showAllText2');
            }
            window.addEventListener('load', refreshAllPlaylists);
            window.addEventListener('resize', refreshAllPlaylists);

        </script>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
            </script>
</body>

</html>