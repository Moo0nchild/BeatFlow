const audio = document.getElementById('audio');
const playPauseBtn = document.getElementById('playPauseBtn');
const progress = document.getElementById('progress');
const currentTime = document.getElementById('currentTime');
const duration = document.getElementById('duration');
const volume = document.getElementById('volume');

playPauseBtn.addEventListener('click', togglePlay);
audio.addEventListener('timeupdate', updateProgress);
audio.addEventListener('loadedmetadata', setDuration);

function togglePlay() {
  if (audio.paused) {
    audio.play();
    playPauseBtn.textContent = '❚❚';
  } else {
    audio.pause();
    playPauseBtn.textContent = '▶';
  }
}

function updateProgress() {
  const percent = (audio.currentTime / audio.duration) * 100;
  progress.style.width = `${percent}%`;
  const minutes = Math.floor(audio.currentTime / 60);
  const seconds = Math.floor(audio.currentTime % 60);
  currentTime.textContent = `${padTime(minutes)}:${padTime(seconds)}`;
}

function setDuration() {
  const minutes = Math.floor(audio.duration / 60);
  const seconds = Math.floor(audio.duration % 60);
  duration.textContent = `${padTime(minutes)}:${padTime(seconds)}`;
}

function padTime(time) {
  return (time < 10) ? `0${time}` : time;
}

function resetPlay() {
  playPauseBtn.textContent = '▶';
  progress.style.width = '0';
  currentTime.textContent = '0:00';
}

volume.addEventListener('input', setVolume);

function setVolume() {
  audio.volume = volume.value;
}
