using CC.DataAccessLayer;
using CC.Infrastructure.Mapping;
using CC.Model.News;
using CC.ViewModel.News;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;

namespace CC.Service.Controllers
{
    public class NewsController : BaseController
    {
        private readonly IMapper _mapper;
        private readonly INewsDataMapper _newsDataMapper;

        public NewsController()
        {
            _mapper = new AutoMapper();
            _newsDataMapper = new NewsDataMapper();
        }

        public IEnumerable<NewsViewModel> Get()
        {
            var news = _newsDataMapper.FindAll();
            return _mapper.Map<IEnumerable<News>, IEnumerable<NewsViewModel>>(news);
        }
    }
}
