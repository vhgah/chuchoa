using CC.Infrastructure.Authentication;
using CC.Infrastructure.Context;
using CC.Infrastructure.Mapping;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Web;
using System.Web.Mvc;

namespace CC.Website.Controllers
{
    public class BaseController : Controller
    {
        private readonly IBaseContext _context;

        public BaseController()
        {
            // TODO: this cuntruct must remove to use contruction have context
            _context = new BaseContext(Common.ApiClient.GetClient(), new AspNetFormsAuthentication());
        }

        public BaseController(IBaseContext context)
        {
            _context = context;
        }

        public IFormsAuthentication FormsAuthentication
        {
            get { return _context.FormsAuthentication; }
        }

        public HttpClient Client
        {
            get { return _context.Client; }
        }
        
        public void AddModelErrors(HttpResponseMessage response)
        {
            foreach (var item in response.Content.ReadAsAsync<dynamic>().Result.Items)
            {
                ModelState.AddModelError(item.PropertyName.Value, item.Message.Value);
            }
        }

        protected ActionResult ErrorView(HttpResponseMessage response)
        {
            ModelState.AddModelError("Model", response.ReasonPhrase);
            return View("ErrorView");
        }
    }
}