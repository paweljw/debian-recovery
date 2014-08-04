<?xml version="1.0" encoding="UTF-8"?>

<clientConfig version="1.1">
  <emailProvider id="">
    <domain><?php echo $_SERVER['SERVER_NAME']; ?></domain>
    <displayName><?php echo "Poczta ".$_SERVER['SERVER_NAME']; ?></displayName>
    <displayShortName><?php echo $_SERVER['SERVER_NAME']; ?></displayShortName>
    <incomingServer type="imap">
      <hostname>moja-poczta.net</hostname>
      <port>993</port>
      <socketType>SSL</socketType>
      <authentication>password-encrypted</authentication>
      <username>%EMAILADDRESS%</username>
    </incomingServer>
    <outgoingServer type="smtp">
      <hostname>moja-poczta.net</hostname>
      <port>587</port>
      <socketType>SSL</socketType>
      <authentication>password-encrypted</authentication>
      <username>%EMAILADDRESS%</username>
    </outgoingServer>
  </emailProvider>
</clientConfig>