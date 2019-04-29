"""
Loyalty Crawler web crawling and parsing spider
"""

import scrapy
import scrapy.exceptions
from scrapy.crawler import CrawlerProcess
import requests
import bs4
from nltk.tokenize import RegexpTokenizer

keywords = 'loyalty program million'
urls = []


class Crawler(scrapy.Spider):
    name = 'Loyalty'

    custom_settings = {'CLOSESPIDER_ITEMCOUNT': 100}            # the condition to stop when amount hit 100

    start_urls = ['https://google.com/search?q=' + keywords]

    def parse(self, response):
        for link in response.css('.r a'):
            urls.append('https://google.com' + link.css('a::attr(href)').get())

        next_page = response.css('#foot td a::attr(href)').getall()
        if next_page is not None:
            next_page_link = 'https://google.com' + next_page[9]
            yield scrapy.Request(url=next_page_link, callback=self.parse)

    for i in range(len(urls)):
        res = requests.get(urls[i])
        soup = bs4.BeautifulSoup(res.text, 'lxml')
        web_text = soup.getText().lower()
        tokenizer = RegexpTokenizer('\w+|\$[\d\.]+|\S+')
        web_text_list = tokenizer.tokenize(web_text)
        keywords_test = tokenizer.tokenize(keywords)
        for n in range(len(keywords_test)):
            if keywords_test[n] in web_text_list:
                None
            else:
                urls.remove(urls[i])


process = CrawlerProcess({
    'USER_AGENT': 'Chrome/60.0.3112.113'
})
process.crawl(Crawler)
process.start()

print(urls)
