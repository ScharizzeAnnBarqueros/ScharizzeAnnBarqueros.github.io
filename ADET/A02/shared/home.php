<div class="row">
    <div class="col-8">
        <h2>Trending Songs</h2>
    </div>
    <div class="col-3 ">
        <div class="showtext">
            <h5 id="showAllText1"
                style="color: #aaa; cursor: pointer; display: none; font-size: 16px; font-weight: 600; margin-top: 10px; d-flex justify-content: end;">
                Show all
            </h5>
        </div>
    </div>

    <div class="list row g-1 justify-content-start" id="trending-list"></div>

    <div class="row">
        <div class="col-8 pt-5">
            <h2>Best of artist</h2>
        </div>
    </div>
    <div class="list row g-1 justify-content-start" id="artist-list"></div>

    <script>
        const trendingSongs = [{
            title: "Youll be in my heart",
            name: "Niki",
            img: "youllBeInMyHeart.jpg"
        }, {
            title: "Sakin ka ",
            name: "SUPAFLY",
            img: "sakinKa.jpg"



        }, {
            title: "Chest Pain (I love)",
            name: "malcolm todd",
            img: "chestPain.jpg"



        }, {
            title: "Saranggola",
            name: "ben&ben",
            img: "saranggola.jpg"



        }, {
            title: "Sino ",
            name: "Unique Salonga",
            img: "sino.jpg"



        }, {
            title: "The man who cant be moved",
            name: "The Script",
            img: "theManWhoCantBeMoved.jpg"



        }




        ];
        const Artist = [{
            artist: "This is Lana del rey.",
            desc: "the essential tracks,...",
            img: "thisIsLanaDelRey.jpg"




        }, {
            artist: "This is Doja cat.",
            desc: "the essential tracks,...",
            img: "thisIsDojaCat.jpg"




        }, {
            artist: "This is Ariana Grande.",
            desc: "the essential tracks,...",
            img: "thisIsArianaGrande.jpg"




        },{
            artist: "This is Billie Eilish.",
            desc: "the essential tracks,...",
            img: "thisIsBillieEilish.jpg"

        }, {
            artist: "This is Olivia rodrigo.",
                desc: "the essential tracks,...",
                    img: "thisIsOliviaRodrigo.jpg"




        }, {
            artist: "This is The Weeknd.",
                desc: "the essential tracks,...",
                    img: "thisIsTheWeeknd.jpg"




        },

        
        
];
        const trendingList = document.getElementById("trending-list");
        const artistList = document.getElementById("artist-list");

        function renderPlaylist(data, container) {
            data.forEach(item => {
                container.innerHTML += `
      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4 pt-3 playlist-item">
        <div class="item">
          <img src="img/${item.img}">
          <div class="play">
            <span class="fa fa-play"></span>
          </div>
          <h2>${item.title ||  item.artist}</h2>
          <p>${item.name || item.desc}</p>
        </div>
      </div>
    `;
            });
        }
        renderPlaylist(trendingSongs, trendingList);
        renderPlaylist(Artist, artistList);

    </script>