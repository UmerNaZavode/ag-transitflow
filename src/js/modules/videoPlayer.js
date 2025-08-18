export default function videoPlayer(selector = "[data-js-video-player]") {
  const player = document.querySelector(selector);
  if (!player) return;

  const video = player.querySelector("[data-js-video-player-video]");
  const panel = player.querySelector("[data-js-video-player-panel]");
  const playBtn = player.querySelector("[data-js-video-player-play-button]");

  if (!video || !panel || !playBtn) return;

  playBtn.addEventListener("click", function() {
    video.play();
    panel.classList.remove("is-active");
  });

  video.addEventListener("ended", function() {
    panel.classList.add("is-active");
  });
}
