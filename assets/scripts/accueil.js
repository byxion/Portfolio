// TypeWriter effect
const animh1 = document.querySelector("h1");

new Typewriter(animh1, {
})
  .pauseFor(800)
.changeDelay(50)
.typeString("Bonjour,")
.pauseFor(200)
.typeString(" je m'appelle Matéo Guenot.")
.start()

const langdev = document.querySelector(".language-web");

new Typewriter(langdev, {

})
.changeDelay(50)
.typeString("l'HTML / CSS, ")
.pauseFor(200)
.typeString("le JavaScript, ")
.pauseFor(200)
.typeString("et le PHP.")
.pauseFor(200)
.start()


