using CC.Infrastructure.Authentication;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web;
using System.Web.Http;

namespace CC.Service.Controllers
{
    public class BaseController : ApiController
    {        
        public ITokenAuthentication TokenAuthentication { get; set; }

        public string RequestToken
        {
            get
            {
                return ControllerContext.Request.Headers.Authorization.ToString();
            }
        }

        protected HttpResponseMessage CreatedHttpResponse(object newId, object createdItem)
        {
            var httpResponse = Request.CreateResponse(HttpStatusCode.Created, createdItem);
            string uri = Url.Link("DefaultApi", new { id = newId });
            httpResponse.Headers.Location = new Uri(uri);
            return httpResponse;
        }
    }
}