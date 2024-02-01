let player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player("youtube-player", {
    videoId: "XZ7BWbmvi94",
    playerVars: {
      autoplay: 0,
      controls: 1,
      modestbranding: 1,
      loop: 0,
      showinfo: 0,
      rel: 0,
    },
    events: {
      onReady: onPlayerReady,
    },
  });
}

function onPlayerReady(event) {
  if (event.player) event.player.playVideo();
}

window.onload = function () {
  onYouTubeIframeAPIReady();
};
