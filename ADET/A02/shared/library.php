<div class="row">
    <div class="col-8">
        <h2>My Playlist</h2>
    </div>
    

    <div class="list row g-1 justify-content-start" id="playlist"></div>

    
    <script>
        const playlistData  = [{
            name: "by sha",
            img: "playlist1.jpg"
        }, {
            name: "by sha",
            img: "playlist2.jpg"
        },
        {
            name: "by sha",
            img: "playlist3.jpg"
        },
        {
            name: "by sha",
            img: "playlist4.jpg"
        },
        {
            name: "by sha",
            img: "playlist5.jpg"
        },{
            name: "by sha",
            img: "playlist6.jpg"
        },{
            name: "by sha",
            img: "playlist7.jpg"
        }, {
            name: "by sha",
            img: "playlist8.jpg"
        },
        {
            name: "by sha",
            img: "playlist9.jpg"
        },
        {
            name: "by sha",
            img: "playlist10.jpg"
        },
        {
            name: "by sha",
            img: "playlist11.jpg"
        },{
            name: "by sha",
            img: "playlist12.jpg"
        },




        ];

        const playlistContainer  = document.getElementById("playlist");

        function renderPlaylist(data, container) {
            data.forEach(item => {
                container.innerHTML += `
      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4 pt-3 playlist-item">
        <div class="item">
          <img src="img/${item.img}">
          <div class="play">
            <span class="fa fa-play"></span>
          </div>
          <p>${item.name}</p>
        </div>
      </div>
    `;
            });
        }
        renderPlaylist(playlistData , playlistContainer);
    </script>