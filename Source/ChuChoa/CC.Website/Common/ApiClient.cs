using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Net.Http;
using System.Net.Http.Headers;
using System.Web;

namespace CC.Website.Common
{
    public class ApiClient
    {
        public static HttpClient GetClient()
        {
            var client = new HttpClient()
            {
                BaseAddress = new Uri(ConfigurationManager.AppSettings["BaseApiUri"]),
            };

            client.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));

            return client;
        }
    }
}