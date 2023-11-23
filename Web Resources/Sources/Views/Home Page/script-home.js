
const  createPlaylist = document.getElementById('createPlaylist')
createPlaylist.addEventListener('click', function(){
    const namePlaylist = prompt('Nombre de la PlayList:')
    const description = prompt('descripcion de la PlayList:')
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/Playlist_Be.php', true)
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert('Playlist created successfully!')
      } else {
        alert('Failed to create playlist')
      }
    }
    const data = `namePlaylist=${encodeURIComponent(namePlaylist)}&userName=${encodeURIComponent(userName)}&description=${encodeURIComponent(description)}`;
    xhr.send(data);
})

const play = document.getElementById('play')
play.addEventListener('click', function(){
  const  reproductor = document.getElementById('reproductor')
  reproductor.src= audioURL1
  reproductor.play(); 
})

const play2 = document.getElementById('play2')
play2.addEventListener('click', function(){
  const  reproductor = document.getElementById('reproductor')
  reproductor.src= audioURL2
  reproductor.play(); 
})

const play3 = document.getElementById('play3')
play3.addEventListener('click', function(){
  const  reproductor = document.getElementById('reproductor')
  reproductor.src= audioURL3
  reproductor.play(); 
})

const play4 = document.getElementById('play4')
play4.addEventListener('click', function(){
  const  reproductor = document.getElementById('reproductor')
  reproductor.src= audioURL4
  reproductor.play(); 
})
const  exit = document.getElementById('exit')
exit.addEventListener('click', function(){
  window.location.href = '../Login Page/Login.php';
})
const audio = document.querySelector('audio'),
    songLength = document.getElementById('songLength'),
    currentTime = document.getElementById('currentSongTime');

const calculateTime = (secs) =>{
    const minutes = Math.floor(secs / 60),
        seconds = Math.floor(secs % 60),
        returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
        return `${minutes}:${returnedSeconds}`;
}

const displayDuration = () =>{
    songLength.innerHTML = calculateTime(audio.duration);
}

if(audio.readyState > 0){
    displayDuration();
    currentTime.innerHTML = calculateTime(audio.currentTime);
}else{
    audio.addEventListener('loadedmetadata', () =>{
        displayDuration();
    })
}

audio.ontimeupdate = function(){
    currentTime.innerHTML = calculateTime(audio.currentTime);
    setProgress();
}

function setProgress(){
    let percentage = (audio.currentTime / audio.duration) * 100;
    document.querySelector('.progress').style.width = percentage + '%'; 
}

//Audio Controls
const playPause = document.getElementById('PlayPause'),
    plus10 = document.getElementById('Plus10'),
    back10 = document.getElementById('Back10');

playPause.addEventListener('click', ()=>{
    if(audio.paused){
        playPause.src = '../../../../Assets/Music Player/SVG/pause.svg';
        audio.play();
    }else{
        playPause.src = '../../../../Assets/Music Player/SVG/Play.svg';
        audio.pause();
    }
})

plus10.addEventListener('click', ()=>{
    audio.currentTime +=10;
})

back10.addEventListener('click', ()=>{
    audio.currentTime -=10;
})

let arrow = document.querySelectorAll(".arrow")

for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu")
    })
}