<?php 

	public function resize($image_path,$dimensions="1280x720>") {
		exec("convert $image_path -resize \'$dimensions\' $image_path");
	}

	public function further_reduce($path) {
		exec("convert $path -sampling-factor 4:2:0 -strip -quality 85 -interlace JPEG -colorspace sRGB $path");
	}