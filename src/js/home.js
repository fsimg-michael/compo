import { SplitText } from './vendor/SplitText'
import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { ScrollToPlugin } from "gsap/ScrollToPlugin"

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, SplitText)

const domContentLoaded = () => {
  //split text
  const paragraph = document.querySelector(".js-split-text")
  const split = new SplitText(paragraph, { type: "chars" })
  gsap.to(split.chars, { opacity: 0, stagger: { from: "center", amount: 1.5 }, yoyo: true, repeat: -1 })
}
document.addEventListener('DOMContentLoaded', domContentLoaded)
