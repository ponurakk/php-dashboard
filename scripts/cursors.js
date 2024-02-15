const BasePath = localStorage.getItem("BasePath");
const cursorTag = document.querySelector("div.cursors");
const balls = cursorTag.querySelectorAll("div");
const buttons = document.querySelectorAll("button, input, .clickable");
const body = document.querySelector("body");

let aimX = 0;
let aimY = 0;

balls.forEach((ball, i) => {
  let currentX = 0;
  let currentY = 0;

  let speed = 0.8 - i * 0.061;

  const animate = () => {
    currentX += (aimX - currentX) * speed;
    currentY += (aimY - currentY) * speed;

    ball.style.left = currentX + "px"
    ball.style.top = currentY + "px";
    ball.style.opacity = speed * 1.5;

    requestAnimationFrame(animate);
  }

  animate();
});

document.addEventListener("mousemove", (e) => {
  if (e.pageX + 16 <= window.innerWidth) {
    aimX = e.pageX;
  }

  let bodyRect = document.body.getBoundingClientRect();
  let elemRect = body.getBoundingClientRect();
  let offset = elemRect.bottom - bodyRect.top;

  if (e.pageY + 16 <= offset) {
    aimY = e.pageY;
  }
});

buttons.forEach(btn => {
  btn.addEventListener("mouseover", () => {
    balls.forEach(ball => {
      ball.style.backgroundImage = `url('${BasePath}/static/mouseBlobBlack.png')`;
    })
  })

  btn.addEventListener("mouseout", () => {
    balls.forEach(ball => {
      ball.style.backgroundImage = `url('${BasePath}/static/mouseBlob.png')`;
    })
  })
})

document.addEventListener("mouseout", (e) => {
  var from = e.relatedTarget || e.toElement;
  if (!from || from.nodeName == "HTML") {
    balls.forEach(ball => {
      ball.style.display = "none";
    })
  }
})

document.addEventListener("mouseover", (e) => {
  var from = e.relatedTarget || e.toElement;
  if (!from || from.nodeName == "HTML") {
    balls.forEach(ball => {
      ball.style.display = "block";
    })
  }
})
