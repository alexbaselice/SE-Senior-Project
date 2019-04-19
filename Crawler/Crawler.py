import scrapy


class BlogSpider(scrapy.Spider):
    name = 'blogspider'
    start_urls = ['https://blog.scrapinghub.com']

    def parse(self, respond):
        for title in respond.css('.post-header>h2'):
            yield {'title': title.css('a ::text').get()}

        for next_page in respond.css('a.next-post-link'):
            yield respond.follow(next_page, self.parse)
