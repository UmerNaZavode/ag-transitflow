export default function showAbsoluteHiddenFiles() {
  document.querySelectorAll("*").forEach((el) => {
    if (getComputedStyle(el).position === "absolute") {
      el.style.border = "1px solid red";
      el.style.display =  "block";
      el.style.visibility = "visible";
      el.style.zIndex = "9999";
    }
  });
}
