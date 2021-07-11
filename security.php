<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', 'c2a1a65290e44ebd86926453bb77063cd85fc3c3890d49f9a686e741da16fb6dedca4bfcb58f4966a047d2737081d0d7136c60cf48424ee2822c14be5bdb2fb6b0fedf890a1c4d5687b1bfadd9d4f3b22daea4bde693420a964d349929b0db69910aab3e357e435d97691d7d83c991e84c6c555b382a4dd493b64a45c8592715');

function sign ($params) {
  return signData(buildDataToSign($params), SECRET_KEY);
}

function signData($data, $secretKey) {
    return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
}

function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];  
        }
        return commaSeparate($dataToSign);
}

function commaSeparate ($dataToSign) {
    return implode(",",$dataToSign);
}

?>
