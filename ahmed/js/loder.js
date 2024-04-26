var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;

function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#00ffec';
	ctx.strokeStyle = "#00ffec";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
		const end = Date.now() + 15 * 300;

		// go Buckeyes!
		const colors = ["#bb0000", "#ffffff"];
		
		(function frame() {
		  confetti({
			particleCount: 2,
			angle: 60,
			spread: 55,
			origin: { x: 0 },
			colors: colors,
		  });
		
		  confetti({
			particleCount: 2,
			angle: 120,
			origin: { x: 1 },
			colors: colors,
		  });
		
		  if (Date.now() < end) {
			requestAnimationFrame(frame);
		  }
		})();
        myModal.show();
        loader.style.display = 'none';
	}
	al++;
}



// إختيار الرابح
const win = document.querySelector("#winner");
const loader = document.querySelector(".loader-con");

var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  keyboard: false
})

win.addEventListener('click', function(){
  loader.style.display = 'block';
  sim = setInterval(progressSim, 20);

});