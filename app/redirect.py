import Cookie
import datetime
import os
import random

from google.appengine.ext import db
from google.appengine.ext import webapp
import google.appengine.ext.webapp.util
import google.appengine.ext.webapp.template


REDIRECTS = {
  "mytag": "http://www.1010global.org/uk/tags",
}


class RedirectHandler(webapp.RequestHandler):
  def get(self, request_path):
    if request_path in REDIRECTS:
      self.redirect(REDIRECTS[request_path])
    else:
      self.error(404)

def main():
  webapp.util.run_wsgi_app(
    webapp.WSGIApplication([
      (r'/(.+)', RedirectHandler),
    ], debug=False))

if __name__ == '__main__':
  main()
