const cursorTag = document.querySelector("div.cursors");
const balls = cursorTag.querySelectorAll("div");
const buttons = document.querySelectorAll("button, input, .clickable");

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
    ball.style.opacity = speed*1.5;

    requestAnimationFrame(animate);
  }

  animate();
});

document.addEventListener("mousemove", (e) => {
  aimX = e.pageX;
  aimY = e.pageY;
});

buttons.forEach(btn => {
  btn.addEventListener("mouseover", () => {
    balls.forEach(ball => {
      ball.style.backgroundImage = "url(/static/mouseBlobBlack.png)";
    })
  })

  btn.addEventListener("mouseout", () => {
    balls.forEach(ball => {
      ball.style.backgroundImage = "url(/static/mouseBlob.png)";
    })
  })
})
