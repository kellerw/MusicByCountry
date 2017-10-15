import urllib2
from bs4 import BeautifulSoup
import sys
# or if you're using BeautifulSoup4:
# from bs4 import BeautifulSoup
lookup = {"USA": 27, "UK": 25, "India": 43, "Mexico": 46}
soup = BeautifulSoup(urllib2.urlopen('https://top40-charts.com/chart.php?cid=' + str(lookup[sys.argv[1]])).read(), "html.parser")
#print str(soup)
for i in str(soup).split('<tr chid="')[1:-1]:
	print (i.split('"View song details">')[2].split("<")[0] + "|" + i.split('/artist.php?aid=')[1].split(">")[1].split("<")[0]).replace(",","")

#hopefully works for all but nigeria and korea... mexico iffy - look into better solution