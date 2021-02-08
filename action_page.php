<script>
    var name = document.getElementbyId("names")
</script>

	</div>
<center><div id="player">
<script src="https://www.youtube.com/iframe_api"></script>

<script>
    /**
     * Put your video IDs in this array
     */
    var videoIDs = [
        'vFU6GlqPOAQ',
        'HuLqYdKyYlE',
        'wMt4yiXxb1k',
        'dJsmj8dtZJs'
    ];

    var player, currentVideoId = 0;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '450',
            width: '800',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerReady(event) {
        event.target.loadVideoById(videoIDs[currentVideoId]);
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            currentVideoId++;
            if (currentVideoId < videoIDs.length) {
                player.loadVideoById(videoIDs[currentVideoId]);
            }
        }
    }
</script>
</div></center>
