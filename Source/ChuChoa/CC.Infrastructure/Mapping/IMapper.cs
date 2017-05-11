using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CC.Infrastructure.Mapping
{
    public interface IMapper
    {
        TItem Map<TDomain, TItem>(TDomain domain) where TItem : class;
    }
}
