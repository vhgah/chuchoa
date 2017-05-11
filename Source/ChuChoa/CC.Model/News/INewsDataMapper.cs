using CC.Infrastructure.Domain;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CC.Model.News
{
    public interface INewsDataMapper : IDataMapper<News>
    {
        News FindByNewsKey(string key);
    }
}
