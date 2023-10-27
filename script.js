function toggleMode() {
  const html = document.documentElement
  html.classList.toggle("light")
  // Função de dark e light mode com if
  //if (html.classList.contains("light")) {
  //  html.classList.remove("light")
  //} else {
  //  html.classList.add("light")
  //}
  const img = document.querySelector("#profile img")

  if (html.classList.contains("light")) {
    img.setAttribute("src", "./assets/avatar.png")
    img.setAttribute("alt", "foto com oculos")
  } else {
    img.setAttribute("src", "./assets/avatar1.png")
    img.setAttribute("alt", "foto sem oculos")
  }
}
