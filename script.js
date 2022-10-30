// Animation to see the scroll level
import "https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js";

const scrollTracker = document.querySelector(".scroll-tracker");
const nav = document.querySelector("nav");

const scrollTrackingTimeLine = new ScrollTimeline({
  source: document.scrollingElement,
  orientation: "block",
  scrollOffsets: [CSS.percent(0), CSS.percent(100)],
});

scrollTracker.animate(
  {
    transform: ["scaleY(0)", "scaleY(1)"],
  },
  {
    duration: 1,
    timeline: scrollTrackingTimeLine,
  }
);

nav.animate(
  {
    transform: ["translateY(-100%)", "translateY(0)"],
  },
  {
    duration: 1,
    timeline: scrollTrackingTimeLine,
  }
);

// TypeWriter effect
const animh1 = document.querySelector("h1");

new Typewriter(animh1, {
})
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


