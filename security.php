<?php

define ('HMAC_SHA256', 'sha256');
//define ('SECRET_KEY', 'c2a1a65290e44ebd86926453bb77063cd85fc3c3890d49f9a686e741da16fb6dedca4bfcb58f4966a047d2737081d0d7136c60cf48424ee2822c14be5bdb2fb6b0fedf890a1c4d5687b1bfadd9d4f3b22daea4bde693420a964d349929b0db69910aab3e357e435d97691d7d83c991e84c6c555b382a4dd493b64a45c8592715');
define ('SECRET_KEY', '4b50c4c776d940be914188af3c74d8acbb28577aeef74a2f8c265c2d6eddcc60f48894f591954e0b91a2e15b25140642baf5707614984269b23d093958de65c3399ccd0fe5f34d3a90d863069528836ec7022399f6954a26a991d0af5fb063b7d2ac70d793264096930c77be07fd358853a6723dcf2b4f65a049df61979ff3c4');
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
