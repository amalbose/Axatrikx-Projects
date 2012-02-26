#!/bin/python
import sys
import urllib

#validate project Name

projectName=sys.argv[1]

ReadMeFile=urllib.urlopen("https://raw.github.com/axatrikx/%s/master/README.md" % projectName)
fileContents = ReadMeFile.read()
print(fileContents)
