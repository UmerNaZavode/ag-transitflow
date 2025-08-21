export default function playVideo(selector = "[data-js-video-player]") {
  const players = document.querySelectorAll(selector);
  if (!players.length) return;

  players.forEach((player) => {
    const video = player.querySelector("[data-js-video-player-video]");
    const panel = player.querySelector("[data-js-video-player-panel]");
    const playBtn = player.querySelector("[data-js-video-player-play-button]");

    if (!video || !panel || !playBtn) return;

    playBtn.addEventListener("click", function() {
      video.setAttribute("controls", "true");
      video.play();
      panel.classList.remove("is-active");
    });

    video.addEventListener("ended", function() {
      panel.classList.add("is-active");
      video.removeAttribute("controls");
    });
  });
}
