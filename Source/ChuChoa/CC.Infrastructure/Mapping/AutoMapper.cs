using AutoMapper;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CC.Infrastructure.Mapping
{
    public class AutoMapper : IMapper
    {
        public TItem Map<TDomain, TItem>(TDomain domain) where TItem : class
        {
            return Mapper.Map<TDomain, TItem>(domain);
        }
    }
}
