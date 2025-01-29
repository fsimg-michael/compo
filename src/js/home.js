const domContentLoaded = () => {
  gsap.to('picture', { x: 50, yoyo: true, repeat: -1, duration: 3 })
}
document.addEventListener('DOMContentLoaded', domContentLoaded)  