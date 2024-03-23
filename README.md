# README

This PHP script is designed to generate responses for various scenarios in a dating chat based on provided keywords. It utilizes the Chad GPT AI API to generate responses. Below is a guide on how to use and understand this script.

## Usage

1. **Setting up the script**: Ensure you have PHP installed on your server. Copy the provided PHP script to your server directory.

2. **Making a GET request**: The script expects a GET request with a parameter `url` which contains the URL-encoded text for which you want to generate a response.

3. **Keyword selection**: Modify the `$keyword` variable in the script to specify the type of response you want. Possible values are `'funny'`, `'flirty'`, `'teasing'`, and `'spicy'`.

4. **Response generation**: Based on the selected keyword, the script will generate a response using the Chad GPT AI API. Responses are tailored to match the context of a dating chat and follow specific guidelines based on the selected keyword.

5. **Output**: The generated response will be returned as the output of the script.

## Functions

- `genrate($message, $prompt)`: This function sends a POST request to the Chad GPT AI API with the provided message and prompt. It returns the generated response.

- `generateFunnyResponse()`, `generateFlirtyResponse()`, `generateTeasingResponse()`, `generateSpicyResponse()`: These functions contain the prompts for generating responses based on different scenarios. Each function returns a string containing the prompt.

- `getResponse($keyword)`: This function takes a keyword as input and returns the corresponding prompt for generating the response.

## Security

- **Input validation**: The script checks if the input URL is provided and filters it using `FILTER_SANITIZE_STRING` to prevent potential security risks.

- **API usage**: The script utilizes the Chad GPT AI API to generate responses securely over HTTPS.

## Important Note

- Ensure that you have appropriate permissions and comply with the terms of service of the Chad GPT AI API when using this script in a production environment.

## Disclaimer

- This script is provided as-is without any warranty. Use it at your own risk.

---

Feel free to enhance this README with additional information or instructions as needed.
