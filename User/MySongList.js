//song list
let All_song = [{
        name: "Chơi",
        path: "../MP3/choi.mp3",
        img: "../Image/hieuthuhai.jpg",
        singer: "Hieuthuhai"
    },
    {
        name: "Cua",
        path: "../MP3/cua.mp3",
        img: "../Image/hieuthuhai.jpg",
        singer: "Hieuthuhai"
    },
    {
        name: "Dynamic Duo",
        path: "../MP3/dynamicduo.mp3",
        img: "../Image/hieuthuhai.jpg",
        singer: "Hieuthuhai"
    },
    {
        name: "Fashion Tán Gái",
        path: "../MP3/fashiontangai.mp3",
        img: "../Image/lowg.png",
        singer: "Low G"
    },
    {
        name: "Mượn Rượu Tỏ Tình",
        path: "../MP3/muonruoutotinh.mp3",
        img: "../Image/BigDaddy.jpg",
        singer: "Big Daddy"
    },
    {
        name: "Ánh Nắng Của Anh",
        path: "../MP3/anhnangcuaanh.mp3",
        img: "../Image/DucPhuc.jpg",
        singer: "Đức Phúc"
    },
];


/*tracks*/
let tracks = document.querySelector('.tracks');

//creating a list or generating Html
for (let i = 0; i < All_song.length; i++) {

    let Html = ` <div class="song">
   <div class="img">
   <img src="${All_song[i].img}"/>
   </div>
   <div class="more">
   <audio src="${All_song[i].path}" id="music"></audio>
   <div class="song_info">
      <p id="title">${All_song[i].name}</p>
      <p>${All_song[i].singer}</p>
   </div>
   <button id="play_btn"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
   </div>
 </div>`;

    tracks.insertAdjacentHTML("beforeend", Html);
};