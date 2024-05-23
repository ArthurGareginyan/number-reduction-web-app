# Number Reduction Web Application

Welcome to Number Reduction Web Application! This project is a simple web application built with pure PHP and HTML. It is designed for use in numerology or similar systems where numbers must be confined to a specific range. It takes an input number and reduces it to a value within the range of 1 to 22. This is a fully working application :)

## Features

- Accepts user input via an HTML form.
- Reduces any number greater than 22 to a value within the range of 1 to 22.
- Displays the reduced number to the user.

## Example

1. **Input**: 37
2. **Process**: 37 - 22 = 15
3. **Output**: 15

## Requirements

- PHP 7.0 or higher
- A web server (e.g., Apache, Nginx, or a local server like XAMPP or MAMP)

## Project Structure

- `index.html`: The HTML file containing the form for number input.
- `process.php`: The PHP script that processes the form submission and reduces the number.

## Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/ArthurGareginyan/number-reduction-web-app.git
   cd number-reduction-web-app
   ```

2. **Set Up the Server**

   If you are using a local server like XAMPP, place the project files in the `htdocs` directory (or the equivalent for your server setup).

3. **Run the Application**

   Start your web server and navigate to `http://localhost/number-reduction-web-app/index.html` in your web browser.

## Usage

To use this application, follow these steps:

1. Open the web application in your browser.
2. Enter a number in the input field.
3. Submit the form to see the reduced number displayed.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvement, feel free to open an issue or submit a pull request.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
