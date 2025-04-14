<div class="container like-page mt-5">
  <h4>Liked Songs</h4>
  <div class="list-group">

    <div class="list-group" id="track-list"></div>

    <script>

      const tracks = [
        {
          id: 1,
          title: "Do I wanna Know",
          artist: "arctic monkeys",
          duration: "4:32",
          img: "doiWannaKnow.jpg"
        },
        {
          id: 2,
          title: "Playground",
          artist: "Bea Miller, Arcane",
          duration: "3:20",
          img: "playground.jpg"
        },
        {
          id: 3,
          title: "As the World caves in",
          artist: "Sarah Cothran",
          duration: "2:41",
          img: "asTheWorldCavesIn.jpg"
        },
        {
          id: 4,
          title: "Beanie ",
          artist: "Chezile",
          duration: "2:12",
          img: "beanie.jpg"
        },
        {
          id: 5,
          title: "Chihiro ",
          artist: "Billie Eilish ",
          duration: "5:03",
          img: "chihiro.jpg"
        },
        {
          id: 6,
          title: "Cinnamon Girl ",
          artist: "Chezile",
          duration: "2:12",
          img: "cinnamonGirl.jpg"
        },
        {
          id: 7,
          title: "Every summertime ",
          artist: "Niki",
          duration: "3:35",
          img: "everySummertime.jpg"
        },

        {
          id: 8,
          title: "Borderline ",
          artist: "Tame Impala",
          duration: "3:57",
          img: "borderline.jpg"
        },
        {
          id: 9,
          title: "Discord ",
          artist: "The Living Tombstone",
          duration: "3:13",
          img: "discord.jpg"
        },
        {
          id: 10,
          title: "happy w u ",
          artist: "Arthur Nery ",
          duration: "4:40",
          img: "happyWu.jpg"
        }


      ];

      const container = document.getElementById("track-list");

      tracks.forEach(track => {
        container.innerHTML += `
      <div class="list-group-item d-flex align-items-center">
        <span class="me-3">${track.id}</span>
        <img src="img/${track.img}" class="track-img me-3">
        <div class="flex-grow-1">
          <div class="track-title">${track.title}</div>
          <div class="artist">${track.artist}</div>
        </div>
        <span class="me-3 duration">${track.duration}</span>
        <i class="fa-solid fa-ellipsis-vertical track-icon"></i>
      </div>
    `;
      });
    </script>