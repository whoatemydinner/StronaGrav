function liveplayer(){
	

	rds();
	setInterval(function() {rds();}, 10000);

	var	stream = {
			mp3: "https://listen.radioaktywne.pl:8443/ramp3",
			oga: "https://listen.radioaktywne.pl:8443/raogg" },
		ready = false;

	$('#live_player').jPlayer({
		ready: function(event){ ready = true; $(this).jPlayer("setMedia", stream); },
		pause: function(){ $(this).jPlayer("clearMedia"); },
		error: function(event){
			if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET){
				$(this).jPlayer("setMedia", stream).jPlayer("play");
			}
		},
		play: function(){ $(this).jPlayer('pauseOthers');},
		solution: 'html',
		supplied: 'oga, mp3',
		preload: 'none',
		volume: 0.8,
		muted: false,
		cssSelectorAncestor: '#jp_live_container',
		cssSelector: {
			play: '#jp-live-play',
			pause: '#jp-live-pause',
			mute: '#jp-live-mute',
			unmute: '#jp-live-unmute',
			volumeBar: '#jp-live-volume-bar',
			volumeBarValue: '#jp-volume-bar-value'
		},
	});
}
function rds(){
		var url = 'https://listen.radioaktywne.pl:8443/status-json.xsl';
		
		$.get(url, function(data){
			var title = data.icestats.source[0].title;
			if( title != 'Unknown'){	
				$('.jp-live-title').html(title);
			}
			
		});
}
function linkliveselectors(){
	$('#live_player').jPlayer({
		cssSelectorAncestor: '#jp_live_container',
		cssSelector: {
			play: '#jp-live-play',
			pause: '#jp-live-pause',
			mute: '#jp-live-mute',
			unmute: '#jp-live-unmute',
			volumeBar: '#jp-live-volume-bar',
			volumeBarValue: '#jp-volume-bar-value'
		},
	});
}	
