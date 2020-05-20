import requests
import json
import time
url = 'http://music.163.com/api/v1/resource/comments/R_SO_4_506092019?limit=10&offset='
page = input('input page you want to check: ')
if int(page) > 10:
    exit('out of range')

r = requests.get(url + str(page))
info = json.loads(r.text)
comments = info['comments']

for i in comments:
    t = i['time']
    date = time.localtime(int(str(i['time'])[:10]))
    date = str(date.tm_mon) + '月' + str(date.tm_mday) + '日'
    print(date, '点赞: ', i['likedCount'], '用户: ', i['user']['nickname'], i['content'],)
