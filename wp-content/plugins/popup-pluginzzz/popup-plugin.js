const manipulateFn = (e) => {
  const body = document.querySelector('body')
  const interactArea = document.getElementById('smth')
  body.addEventListener('mousemove', someFn)
  body.addEventListener('keydown', otherFn)
}

document.addEventListener('DOMContentLoaded', manipulateFn)
document.addEventListener('DOMContentLoaded', otherFn)

const someFn = (event) => {
  const overlayContainter = document.getElementById('overlay')
  const popup = document.getElementById('modal-container')
  if (event.pageY < 245) {
    // console.log(event.pageY)
    // console.log(overlayContainter)
    overlayContainter.classList.add('modal-overlay')
  }
}

function otherFn(event) {
  const overlayContainter = document.getElementById('overlay')
  const popup = document.getElementById('modal-container')
  if (event.key === 'Escape') {
    // console.log('bang!')
    overlayContainter.classList.remove('modal-overlay')
    popup.classList.remove('modal-container')
  }
}
