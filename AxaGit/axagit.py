#!/bin/python
import sys
import os
import subprocess
import re
import urllib

#print "hello", sys.argv[1]
#json = os.popen("curl -k https://api.github.com/repos/axatrikx/Axatrikx-Projects/commits/master","r")
#text = json.read()
#f = open("commits.json","wb");
#f.write(text)
#f.close()
#proc = subprocess.Popen(["curl -k https://api.github.com/repos/axatrikx/Axatrikx-Projects/commits/master"], stdout=subprocess.PIPE, shell=True)
#(out, err) = proc.communicate()
#print(out)

outFile=urllib.urlopen("https://api.github.com/repos/axatrikx/Axatrikx-Projects/commits/master")
out=outFile.read()
#matches = re.search("(sha\S*)(\s)(\S*)",out)
matches = re.search("sha\":\"([^\"]*)",out)
if matches:
    sha=matches.group(1)
else:
    print("Not matched");
ReadMeFile=urllib.urlopen("https://raw.github.com/axatrikx/Axatrikx-Projects/%s/README.md" % sha)

print(ReadMeFile.read())
