<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $url=$_GET['url']; //request get to url
    if (filter_var($url, FILTER_SANITIZE_STRING)) {
        $text = $url;
    }
    else{
        echo "Invalid text provided. Please check the input and try again.";
        exit();
    }
    function genrate($message,$prompt){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.chad-gpt.ai/api/generate',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{"prompt":"'.$prompt.': '.$message.'"}',
            CURLOPT_HTTPHEADER => array(
                    'accept: */*',
                    'accept-language: en-US,en;q=0.9,ru;q=0.8,zh-TW;q=0.7,zh;q=0.6',
                    'content-type: application/json',
                    //'cookie: userId=55caeb02-e687-4f26-b772-abd311bc2167; _ga=GA1.1.304580036.1711200847; _ga_EKP596FYB4=GS1.1.1711200846.1.0.1711200846.0.0.0',
                    'dnt: 1',
                    'origin: https://www.chad-gpt.ai',
                    'referer: https://www.chad-gpt.ai/',
                    'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"',
                    'sec-ch-ua-mobile: ?0',
                    'sec-ch-ua-platform: "Linux"',
                    'sec-fetch-dest: empty',
                    'sec-fetch-mode: cors',
                    'sec-fetch-site: same-origin',
                    'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }
    //Prompt  is a string that will be added to the beginning
    function generateFunnyResponse() {
        $responses = "Generate 2 dating chat responses and clearly label them \"1.\" and \"2.\". The context of the chat is that two people are getting to know each other, most likely through an online dating app or through chatting online via social media. Generate the chat response in a confident way that feels unique and original without revealing too much personal information. Try to match the style and vibe of the chat history. make sure it's funny and witty, there's a joke in there, it's not sexual but it can be a little ridiculous.  Make sure each generated response is at max 25 words and base it on the last chat message of the other person";
        return $response;
    }

    function generateFlirtyResponse(){
        $response = "Generate 2 dating chat responses and clearly label them \"1.\" and \"2.\". The context of the chat is that two people are getting to know each other, most likely through an online dating app or through chatting online via social media. Generate the chat response in a confident way that feels unique and original without revealing too much personal information. Try to match the style and vibe of the chat history. make sure it's flirty, there is a compliment in there and it can also be a bit sexual.  Make sure each generated response is at max 25 words and base it on the last chat message of the other person";
        return $response;
    }
    function generateTeasingResponse(){
        $response = "Generate 2 dating chat responses and clearly label them \"1.\" and \"2.\". The context of the chat is that two people are getting to know each other, most likely through an online dating app or through chatting online via social media. Generate the chat response in a confident way that feels unique and original without revealing too much personal information. Try to match the style and vibe of the chat history. make sure it's teasing and nagging, and can be a little bit mean, but still flirty. It should not be sexual.  Make sure each generated response is at max 25 words and base it on the last chat message of the other person";
        return $response;
    }
    function generateSpicyResponse(){
        $response = "Generate 2 dating chat responses and clearly label them \"1.\" and \"2.\". The context of the chat is that two people are getting to know each other, most likely through an online dating app or through chatting online via social media. Generate the chat response in a confident way that feels unique and original without revealing too much personal information. Try to match the style and vibe of the chat history. make sure it's overly sexual, vulgar and extra spicy.  Make sure each generated response is at max 25 words and base it on the last chat message of the other person";
        return $response;
    }

    // Function to search for appropriate response based on keyword in message
    function getResponse($keyword) {
        switch ($keyword) {
            case 'funny':
                return generateFunnyResponse();
            case 'flirty':
                return generateFlirtyResponse();
            case 'teasing':
                return generateTeasingResponse();
            case 'spicy':
                return generateSpicyResponse();
            default:
                return "Sorry, I couldn't find a response for that.";
        }
    }
    $keyword = "funny"; //change your keyword
    $prompt = getResponse($keyword);
    echo genrate($text,$prompt);
}
?>
