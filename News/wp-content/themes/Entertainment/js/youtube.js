var player,
	time_update_interval = 0;
	video_arr = ["uxpDa-c-4Mc","6vYnas6q3Sg"];
var random_video_id = video_arr[Math.floor(Math.random() * video_arr.length)];
function onYouTubeIframeAPIReady() {
	player = new YT.Player('video-placeholder', {
		width: "100%",
		height: 300,
		videoId: random_video_id,
		playerVars: {
			autoplay:1,
			controls:0,
			disablekb:1,
			autohide:1,
			rel:0,
			showinfo:0,
			loop:1,
			playlist:random_video_id,
			fs:0,
			modestbranding:1,
			iv_load_policy:3,
			wmode:'transparent'
		},
		events: {
			onReady: initialize
		}
	});
	
}
function initialize(){
	player.mute();
	// Update the controls on load
	//updateTimerDisplay();
	//updateProgressBar();

	// Clear any old interval.
	clearInterval(time_update_interval);

	// Start interval to update elapsed time display and
	// the elapsed part of the progress bar every second.
	//time_update_interval = setInterval(function () {
		//updateTimerDisplay();
		//updateProgressBar();
	//}, 1000);

	//$('#volume-input').val(Math.round(player.getVolume()));
}
function mute_video(){
	//var mute_toggle = $(this);

	if(player.isMuted()){
		player.unMute();
		//document.getElementById("mute_main_video").className="";
		//document.getElementById("mute_main_video").className="fa fa-volume-up";
	}
	else{
		player.mute();
		//document.getElementById("mute_main_video").className="";
		//document.getElementById("mute_main_video").className="fa fa-volume-off";
		
	}
}
function play_video(){
	//player.playVideo();
	 if(player)
    {
        var fn = function(){ player.playVideo(); }
        setTimeout(fn, 1000);
    }
}
function pause_video(){
	//player.pauseVideo();
}

/*// This function is called by initialize()
function updateTimerDisplay(){
	// Update current time text display.
	$('#current-time').text(formatTime( player.getCurrentTime() ));
	$('#duration').text(formatTime( player.getDuration() ));
}


// This function is called by initialize()
function updateProgressBar(){
	// Update the value of our progress bar accordingly.
	$('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
}


// Progress bar

$('#progress-bar').on('mouseup touchend', function (e) {

	// Calculate the new time for the video.
	// new time in seconds = total duration in seconds * ( value of range input / 100 )
	var newTime = player.getDuration() * (e.target.value / 100);

	// Skip video to new time.
	player.seekTo(newTime);

});


// Playback

$('#play').on('click', function () {
	player.playVideo();
});


$('#pause').on('click', function () {
	//player.pauseVideo();
});

// Sound volume


$('#mute-toggle').on('click', function() {
	var mute_toggle = $(this);

	if(player.isMuted()){
		player.unMute();
		mute_toggle.text('volume_up');
	}
	else{
		player.mute();
		mute_toggle.text('volume_off');
	}
});

$('#volume-input').on('change', function () {
	player.setVolume($(this).val());
});


// Other options


$('#speed').on('change', function () {
	player.setPlaybackRate($(this).val());
});

$('#quality').on('change', function () {
	player.setPlaybackQuality($(this).val());
});


// Playlist

$('#next').on('click', function () {
	player.nextVideo()
});

$('#prev').on('click', function () {
	player.previousVideo()
});


// Load video

$('.thumbnail').on('click', function () {

	var url = $(this).attr('data-video-id');

	player.cueVideoById(url);

});

// Helper Functions

function formatTime(time){
	time = Math.round(time);

	var minutes = Math.floor(time / 60),
		seconds = time - minutes * 60;

	seconds = seconds < 10 ? '0' + seconds : seconds;

	return minutes + ":" + seconds;
}*/
/*jQuery(document).ready(function($) {
	$("a.mute_video").click(function(){
		mute_video();
		$(this).stop().toggleClass("off");
	});
});*/

jQuery(document).ready(function($) {
	$("a.mute_video2").click(function(){
		$(this).stop().toggleClass("on");
	});
});
