import urllib2
from bs4 import BeautifulSoup
import sys
# or if you're using BeautifulSoup4:
# from bs4 import BeautifulSoup
soup = BeautifulSoup(urllib2.urlopen('http://www.billboard.com/charts/k-pop-hot-100').read(), "html.parser")
for i in str(soup).split('<h2 class="chart-row__song">')[1:]:
	print (i.split("</h2>")[0] +"|" + i.split(">")[2].split("<")[0].replace("\n","")).replace(",","")
