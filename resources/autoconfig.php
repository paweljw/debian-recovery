<?php header('Content-Type: application/xml;charset=utf-8'); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php $domain = str_replace("autoconfig.", "", $_SERVER['SERVER_NAME']); ?>

<clientConfig version="1.1">
  <emailProvider id="">
    <domain><?php echo $domain; ?></domain>
    <displayName><?php echo "Poczta $domain" ?></displayName>
    <displayShortName><?php echo $domain; ?></displayShortName>
    <incomingServer type="imap">
      <hostname>moja-poczta.net</hostname>
      <port>993</port>
      <socketType>SSL</socketType>
      <authentication>password-cleartext</authentication>
      <username>%EMAILADDRESS%</username>
    </incomingServer>
    <outgoingServer type="smtp">
      <hostname>moja-poczta.net</hostname>
      <port>587</port>
      <socketType>SSL</socketType>
      <authentication>password-cleartext</authentication>
      <username>%EMAILADDRESS%</username>
    </outgoingServer>
  </emailProvider>
</clientConfig>