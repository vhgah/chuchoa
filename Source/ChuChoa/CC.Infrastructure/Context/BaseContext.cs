using CC.Infrastructure.Authentication;
using CC.Infrastructure.Mapping;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Net.Http.Headers;
using System.Text;
using System.Threading.Tasks;

namespace CC.Infrastructure.Context
{
    public class BaseContext : IBaseContext
    {
        private readonly HttpClient _client;

        private readonly IFormsAuthentication _formsAuthentication;

        public BaseContext(HttpClient client, IFormsAuthentication authentication)
        {
            _client = client;
            _formsAuthentication = authentication;
        }

        public IFormsAuthentication FormsAuthentication
        {
            get { return _formsAuthentication; }
        }

        public HttpClient Client
        {
            get
            {
                if (!string.IsNullOrEmpty(FormsAuthentication.AuthenticationToken))
                {
                    _client.DefaultRequestHeaders.Authorization
                        = new AuthenticationHeaderValue(FormsAuthentication.AuthenticationToken);
                }

                return _client;
            }
        }
    }
}
