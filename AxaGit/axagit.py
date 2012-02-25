#!/bin/python
import sys
import os
import subprocess
import re

#print "hello", sys.argv[1]
#json = os.popen("curl -k https://api.github.com/repos/axatrikx/Axatrikx-Projects/commits/master","r")
#text = json.read()
#f = open("commits.json","wb");
#f.write(text)
#f.close()
print(")))))))))))))))))))))))))))))))))))))))))))))")
proc = subprocess.Popen(["curl -k https://api.github.com/repos/axatrikx/Axatrikx-Projects/commits/master"], stdout=subprocess.PIPE, shell=True)
(out, err) = proc.communicate()
f = open("commits.json","wb")
f.write(out)
f.close()
#print(out)
#matches = re.search("(sha\S*)(\s)(\S*)",out)
matches = re.search("\s*(sha\S*)(\s)(\S*)",out)
if matches:
    print matches.group()
else:
    print("Not matched");
