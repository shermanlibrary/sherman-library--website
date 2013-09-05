			<?php $video_root = 'http://www.nova.edu/library/video/' . get_post_meta( get_the_ID(), 'academy_video_file', true); ?>	
			<video controls poster="<?php echo $video_root ?>.jpg">
	   

            <!-- Format: .webm
            ======================
	        --> <source type='video/webm; codecs="vp8, vorbis"' src="<?php echo $video_root ?>.webm" />

		   	<!-- Format: .mp4
            ======================
            -->	<source type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' src="<?php echo $video_root ?>.mp4" />


	        <!-- Captions: .srt / .vtt
	        ======================
	    	--> <!--<track kind="subtitles" src="<?php echo $video_root ?>.srt" srclang="en" label="English">-->

			</video>