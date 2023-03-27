# Laravel ChatGPT Language Translation App

This is a sample Laravel app that uses the OpenAI PHP client (version v0.4.1) to perform language translation using the GPT-3 language model.

## Installation

To install and run the app, follow these steps:

1. Clone the repository to your local machine using the following command:

    https://github.com/jagadishwar2010/language-translator.git

2. Navigate to the project directory using the terminal:

    cd language-translator

3. Install the project dependencies using Composer:
   
   composer install

4. Copy the `.env.example` file to create a new `.env` file:
   
   cp .env.example .env

5. Generate a new Laravel application key:

   php artisan key:generate

6. In the `.env` file, update the `OPENAI_API_SECRET_KEY` variable with your OpenAI API secret key.

7. Start the Laravel development server:
   
    php artisan serve

8. Open your web browser and navigate to `http://localhost:8000` to view the app.

## Usage

To use the app, enter a source text and target language in the provided fields and click the "Translate" button. The translated text will be displayed in the "Translated Text" field.

## Credits

This project was created using Laravel and the OpenAI PHP client. Special thanks to the Laravel and OpenAI communities for their contributions to open source software.

If you face any issues during setup or installation, feel free to open an issue on the repository or reach out to me directly.








