// Animation to see the scroll level
import "https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js";

const scrollTracker = document.querySelector(".scroll-tracker");
const nav = document.querySelector("nav");

const scrollTrackingTimeLine = new ScrollTimeline({
  source: document.scrollingElement,
  orientation: "block",
  scrollOffsets: [CSS.percent(0), CSS.percent(80)],
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