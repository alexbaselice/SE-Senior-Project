import requests
import bs4

res = requests.get('https://google.com/search?q='+'loyalty program million')
res.raise_for_status()

soup = bs4.BeautifulSoup(res.text, "html.parser")
linkElements = soup.select('.r a')
linkToSave = min(10, len(linkElements))
for i in range(linkToSave):
    with open('Links.txt', 'a+') as fo:
        fo.write('https://google.com' + linkElements[i].get('href') + '\n')
        fo.close()
