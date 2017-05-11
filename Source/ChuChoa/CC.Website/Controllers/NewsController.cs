using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using CC.Infrastructure.Context;
using System.Net.Http;

namespace CC.Website.Controllers
{
    public class NewsController : BaseController
    {  

        // GET: News
        public ActionResult Index()
        {
            // TODO: impelement GetNews
            var response = Client.GetAsync("api/News").Result;

            if (response.IsSuccessStatusCode)
            {
                //return View(Mapper.Map<IEnumerable<GetCompetition>, IEnumerable<CompetitionViewModel>>(response.Content.ReadAsAsync<IEnumerable<GetCompetition>>().Result));
            }

            return ErrorView(response);

            //return View();
        }

        public ActionResult TechnicalNews()
        {
            return View();
        }

        public ActionResult TechinicalNewsDetail()
        {
            return View();
        }
    }
}