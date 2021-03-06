<?php
declare(strict_types=1);

class Song
{
    private $artistName;
    private $songName;
    private $length;

    public function __construct(string $artistName, string $songName, string $length)
    {
        $this->setArtistName($artistName);
        $this->setSongName($songName);
        $this->setLength($length);
    }
    public function setArtistName($artistName)
    {
        if(strlen($artistName) < 3 ||strlen($artistName) > 20){
            throw new Exception("Artist name should be between 3 and 20 symbols.");
        }
        $this->artistName = $artistName;
    }
    public function setSongName($songName)
    {
        if(strlen($songName) < 3 ||strlen($songName) > 20){
            throw new Exception("Song name should be between 3 and 20 symbols.");
        }
        $this->songName = $songName;
    }
    public function setLength($length)
    {
        $data=explode(":",$length);
        $minutes=intval($data[0]);
        $seconds=intval($data[1]);
        if($minutes < 0 ||$minutes > 14){
            throw new Exception("Song minutes should be between 0 and 14.\r\n");
        }
        if($seconds < 0||$seconds > 59)
        {
            throw new Exception("Song seconds should be between 0 and 59.\r\n");
        }
        $this->length = $length;
    }

    public function getLength():string
    {
        return $this->length;
    }
}