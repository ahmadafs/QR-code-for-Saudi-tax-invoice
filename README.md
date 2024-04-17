To generate a QR Code for the Saudi tax invoice, follow these steps:

- Create a folder at the root of your project and copy the required files into it.
- Update the path of "http://127.0.0.1/qrcode.js" in the index.svg file.
- Update the path of "http://127.0.0.1/index.svg" in the code.php file.
- Update the variables in the "zatca_base64_tlv_encode" function with the relevant information such as $seller_name, $vat_registration_number, and so on.
- Run the code.php file (or include the code in your project) using Apache or Nginx.
- Ensure that you use fully paths like "http://127.0.0.1/..." inside both the index.svg and code.php files.



