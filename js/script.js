if (window.DeviceMotionEvent != undefined) {
	window.ondevicemotion = function(e) {
        var x = e.accelerationIncludingGravity.x;
        var y = e.accelerationIncludingGravity.y;
        var z = e.accelerationIncludingGravity.y;
        
        if (z >= 0.5 && z <= 2) {
            location.replace("happy_process.php");
        }
	}
}