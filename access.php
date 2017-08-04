<?php

/*$graph_url= "https://graph.facebook.com/me/photos";
$postData = "url=" . urlencode($photo_url)
  . "&message=" . urlencode('')
  . "&access_token=" .$access_token;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $graph_url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);

        curl_close($ch);    

*/


//$keyword = $_GET['keyword'];
$access_token = 'EAACEdEose0cBAI8OzN2QF0FzxuGwCtKUOFxHA3ktOpVFjgxL01ZAN80abVQinRpZB6VZAeUZAWHEZCs6ZARkWWYNhanohRpxXUZBOSI02fharCCyncppBZCAHkfZBe8LGU0Bn9LEPmFv83ii3SfDvhO5pIedFfFJk0jtIhMsJJwo2I4XmRfGdB6MHZA1Wbq11NNbZCegaFjGQw7hgZDZD';
//$graph_url = "https://graph.facebook.com/me?&type=post&locale=en_US&q=".$keyword;

$graph_url = "https://graph.facebook.com/me?access_token=".$access_token;

$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $graph_url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        curl_close($ch);

print $output;
?>