<?php
function zatca_base64_tlv_encode()
{
    $seller_name = 'seller name'; //constant / seller name
    $vat_registration_number = 310139155500005; //constant / vat registration number
    $invoice_datetimez = '2023-07-12T14:25:09Z'; //invoice datetimez
    $invoice_amount = 100; //total invoice amount
    $invoice_tax_amount = 15; //invoice tax amount

    $result = chr(1) . chr(strlen($seller_name)) . $seller_name;
    $result .= chr(2) . chr(strlen($vat_registration_number)) . $vat_registration_number;
    $result .= chr(3) . chr(strlen($invoice_datetimez)) . $invoice_datetimez;
    $result .= chr(4) . chr(strlen($invoice_amount)) . $invoice_amount;
    $result .= chr(5) . chr(strlen($invoice_tax_amount)) . $invoice_tax_amount;
    return base64_encode($result);
}
?>
<div style="margin:50px;">
	<object type="image/svg+xml" data="http://127.0.0.1/index.svg?param=<?php echo zatca_base64_tlv_encode();?>" width="250"></object>
</div>

<br/><br/>
<p>for test qrcode: "<a href="https://aliphia.com/en/zatca-qrcode">https://aliphia.com/en/zatca-qrcode</a></p>