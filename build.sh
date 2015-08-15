#!/bin/bash

tar -zcvf dist.tar assets bower_components contact.php index.php
scp dist.tar brandonmorrill.com:~/www/victorybakeshop.com