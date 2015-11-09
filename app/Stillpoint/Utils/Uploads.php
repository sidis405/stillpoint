<?php

namespace Stillpoint\Utils;

use Illuminate\Support\Str;

class Uploads{

	protected $attachmentPath = "/attachments/";


	public function uploadAttachment($file)
	{
		$new_filename = $this->createFilename($file);

		$file->move(public_path() . $this->attachmentPath , $new_filename);

		return $this->attachmentPath . $new_filename;
	}


	public function createFilename($file)
	{
		return time() . '-' . $file->getClientOriginalName();
	}


}