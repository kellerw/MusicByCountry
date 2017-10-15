import urllib2
from bs4 import BeautifulSoup
import sys
import re
# or if you're using BeautifulSoup4:
# from bs4 import BeautifulSoup
def test(url):
	soup = BeautifulSoup(urllib2.urlopen(url).read(), "html.parser")
	text = str(soup).lower()
	part = text[text.find('<h1 class="firstheading" id="firstheading"'):]
	part = part[:part.find("</p>")]
	print sys.argv[3].lower() in part
try:
	url='https://en.wikipedia.org/wiki/' + sys.argv[1] + " (" + sys.argv[2] + " song)"
	url = url.replace(" ","_")
	test(url)
except:
	try:
		url='https://en.wikipedia.org/wiki/' + sys.argv[1].replace(" ","_")
		test(url)
	except:
		print "True"