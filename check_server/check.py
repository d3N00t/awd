#!/usr/bin/env python
# -*- coding:utf8 -*-
'''

'''
import hashlib
import base64

sleep_time = 300
debug = True
headers = {"User-Agent":"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36"}

import time
import httplib
import urllib2
import ssl 
import socket

def get_host_ip(): 
    try:
        s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
        s.connect(('8.8.8.8', 80))
        ip = s.getsockname()[0]
    finally:
        s.close()
    return ip

my_time = 'AAAA'
__doc__ = 'http(method,host,port,url,data,headers)'
flag_server = get_host_ip()
key = '744def038f39652db118a68ab34895dc'
hosts = open('host.lists','r').readlines()
user_id = [host.split(':')[0] for host in hosts]
hosts = [host.split(':')[1] for host in hosts]
port = 8080

def http(method,host,port,url,data,headers):
  con=httplib.HTTPConnection(host,port,timeout=2)
  if method=='post' or method=='POST':
    headers['Content-Length']=len(data)
    headers['Content-Type']='application/x-www-form-urlencoded'
    con.request("POST",url,data,headers=headers)
  else:
    headers['Content-Length'] = 0    
    con.request("GET",url,headers=headers)
  res = con.getresponse()
  if res.getheader('set-cookie'):
    #headers['Cookie'] = res.getheader('set-cookie')
     pass
  if res.getheader('Location'):
     print "Your 302 direct is: "+res.getheader('Location')
  a = res.read()
  con.close()
  return a


def https(method,host,port,url,data,headers):
  url = 'https://' + host + ":" + str(port) + url
  req = urllib2.Request(url,data,headers)
  response = urllib2.urlopen(req)
  return response.read()

def get_score():
  res = http('get',flag_server,8080,'/score.php?key=%s'%key,'',headers)
  print res
  user_scores = res.split('|')
  print "******************************************************************"
  res = ''
  print res
  print "******************************************************************" 
  return user_scores

def write_score(scores):
  scores = '|'.join(scores)
  res = http('get',flag_server,8080,'/score.php?key=%s&write=1&score=%s'%(key,scores),'',headers)
  if res == "success":
    return True
  else:   
    print res
    raise ValueError

class check():
  def index_check(self):
		res = http('get',host,port,'/index.php?file=%s'%str(my_time),'',headers)
		if 'perspi' in res:
			return True
		if debug:
			print "[fail!] index_fail"
		return False

def server_check():
	try:
		a = check()
		if not a.index_check():
			return False
		return True
	except Exception,e:
		print e
		return False

game_round = 0
while True:
	scores = get_score()
	scores = []
	print "--------------------------- round %d -------------------------------"%game_round
	for host in hosts:
		print "---------------------------------------------------------------"
		host = host[:-1]
		if server_check():
			print "Host: "+host+" seems ok"
			scores.append("0")
		else:
			print "Host: "+host+" seems down"
			scores.append("-10")
	game_round += 1
	write_score(scores)
	time.sleep(sleep_time)
