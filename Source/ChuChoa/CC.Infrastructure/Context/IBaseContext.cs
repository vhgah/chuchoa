using CC.Infrastructure.Authentication;
using CC.Infrastructure.Mapping;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;

namespace CC.Infrastructure.Context
{
    public interface IBaseContext
    {
        IFormsAuthentication FormsAuthentication { get; }
        HttpClient Client { get; }
    }
}
