<?php

class Instagetter
{
	protected $baseUrl = 'https://api.instagram.com/v1/';
    protected $client_id;

    function __construct( $settings )
    {
        $this->client_id = $settings['client_id'];
    }

    public function user($id)
    {
    	$data = $this->fetch($this->baseUrl.'users/'.$id.'/media/recent?client_id='.$this->client_id.'&access_token=1673874285.1677ed0.d851518442a64ec4beaaa59249168639');
    	return $data;
    }

    public function hashtag($hashtag, $pages = 0)
	{
		$data = $this->fetch($this->baseUrl.'tags/'.$hashtag.'/media/recent?client_id='.$this->client_id);
		if ( $pages ) {
			$images = $this->nextPage($data, $data->pagination->next_url, $pages);
			return $images;
		}
		return $data;
	}
	public function fetch( $url )
	{
		$response = file_get_contents($url);
		return json_decode($response);
	}
	public function filterOnlyImages($images)
	{
		return $images->data;
	}
	public function nextPage($images, $url, $page)
	{
		$data = $this->fetch($url);
		$images->pagination = $data->pagination;
		foreach ($data->data as $img) {
			array_push($images->data, $img);
		}
		if ($page) {
			return $this->nextPage($images, $data->pagination->next_url, --$page);
		}
		return $images;
	}
}