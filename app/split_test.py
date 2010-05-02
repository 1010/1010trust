import Cookie
import datetime
import os
import random

from google.appengine.ext import db
from google.appengine.ext import webapp
import google.appengine.ext.webapp.util
import google.appengine.ext.webapp.template


SPLIT_GROUPS = {
  'OvGSfXnnvcNHD1Bnj1vP': "d5",
  'DBB5OQaV9whgv2wHeCZk': "d1010",
}


class SplitTestHandler(webapp.RequestHandler):
  def set_cookie(self, key, value):
    """Set a cookie for the request path that expires a year from now.
    """
    a_year_from_now = (
      datetime.datetime.now() + datetime.timedelta(days=365)
    ).strftime("%a, %d %b %Y %H:00:00 GMT")
    self.response.headers.add_header(
      "Set-Cookie", "%s=%s; path=%s; expires=%s" % (key, value, self.request.path, a_year_from_now))
  
  def get_cookie(self, key):
    """Get the value of a cookie.
    """
    morsel = Cookie.BaseCookie(os.environ.get("HTTP_COOKIE")).get(key)
    if morsel:
      return morsel.value
    return None
  
  def get(self, request_path):
    template_path = request_path + ".html"
    template_args = {}
    
    split_group = self.get_cookie("tenten_sg")
    if not split_group:
      split_group = random.choice(SPLIT_GROUPS.keys())
      self.set_cookie("tenten_sg", split_group)
    template_args["split_group"] = SPLIT_GROUPS[split_group]
    
    self.response.out.write(webapp.template.render(template_path, template_args))

def main():
  webapp.util.run_wsgi_app(
    webapp.WSGIApplication([
      (r'/(.+)', SplitTestHandler),
    ], debug=False))

if __name__ == '__main__':
  main()
