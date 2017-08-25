<?php
/**
 * Created by PhpStorm.
 * User: Error404 not found
 * Date: 8/22/2017
 * Time: 8:57 AM
 */
//if (!defined('PATH')) DIE ('Bad requested!');

class getLink
{   //Kiểm tra link có đúng định dạng mp3
    public function checkLink($mp3Link)
    {

    }
    //Lấy link API có kèm link mp3
    public function mp3Link($mp3Link)
    {
        return 'https://mp3zing.download/api?key=QFopqEX1hjMN&url=' . $mp3Link;
    }
    //Lấy json link download
    public function generatorLink($link)
    {
        $ch = curl_init();

        // Cấu hình cho CURL
        curl_setopt ($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Thực thi CURL
        $result = curl_exec($ch);
        if ($result=='Incorrect URL!')
        {
            echo 'Incorrect URL!';
            die;
        }
        // Ngắt CURL, giải phóng
        curl_close($ch);
        return $result;
    }
    //Hàm trả về link 320kbs
    public function getLink320($jsonLink)
    {
        $pattern= '/"link320": "(.*)",/';
        $subject = $jsonLink;
        preg_match($pattern,$subject,$matches);
        return $matches[1];
    }
    //Hàm trả về link Lossless flac
    public function getLinkLossless($jsonLink)
    {
        $pattern= '/"lossless\": \"(.*)\"}/';
        $subject = $jsonLink;
        preg_match($pattern,$subject,$matches);
        return $matches[1];
    }
}
class ApiFacebook

{
    public function hearCallBack($jsonCallBack)
    {
        $json = array();
        $json=json_decode($jsonCallBack);
//        $json[]
    }
}
